<?php

namespace App\Traits;

use App\Models\Campaign;
use App\Models\Pages;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Donmbelembe\LaravelFacebookCatalog\LaravelFacebookCatalog;
use Illuminate\Support\Facades\Http;
use SimpleXMLElement;
use Illuminate\Support\Facades\DB;
use Facebook\FacebookRequest;
use FacebookAds\Api;
use FacebookAds\Object\ProductCatalog;
use FacebookAds\Object\Fields\ProductCatalogFields;

use FacebookAds\Object\ProductFeed;
use FacebookAds\Object\Fields\ProductFeedFields;
use FacebookAds\Object\Fields\ProductFeedScheduleFields;
use FacebookAds\Logger\CurlLogger;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

trait FaceBookSdkTraits
{
    function getSessionToken(){
        $user_page_selected = session('user_page_selected'); // Using session() helper
        if(empty($user_page_selected)){
            $user_page_selected = Session::get('user_page_selected'); // Using Session facade
        }
        $long_token = Pages::where('id' , $user_page_selected)->whereNotNull('long_page_access_token')->select('long_page_access_token')->first();
        if($long_token){
            return $long_token->long_page_access_token;
        }
        return false;
    }
    function getPageID(){
        $user_page_selected = session('user_page_selected'); // Using session() helper
        if(empty($user_page_selected)){
            $user_page_selected = Session::get('user_page_selected'); // Using Session facade
        }
        $long_token = Pages::where('id' , $user_page_selected)->whereNotNull('page_id')->select('page_id')->first();
        if($long_token){
            return $long_token->page_id;
        }
        return false;
    }
    function getSessionPageID(){
        $user_page_selected = session('user_page_selected'); // Using session() helper
        if(empty($user_page_selected)){
            $user_page_selected = Session::get('user_page_selected'); // Using Session facade
        }
        return $user_page_selected;
    }
    function getLongLiveToken($shortToken)
    {
        // if(empty($shortToken)){
        //     $shortToken ='EAAUpognFdwcBO7ZCPvQwAKQQHpzNXXdK0hA7ZAuw3JroYk0I8qMqwX7IWV3yTArsmDkgrA9KtRnk7Sxs3S1caiubRz0dSXrZCotLrKZA1jWpO59kkmWX0mcyVwGm9qrvHCoZA0qfg35RP5IsRsxmXywQEShMT6mV41lZABLJdjglBRM9SPGDVJTHEcZCi3aM6MIWv1TTmAx2MHdaWkzatThuzRQeVZBdA1V4z7FXrLoZD';
        // }
        try {
            // Exchange the short-lived token for a long-lived token
            $oauth_response = $this->fb->getOAuth2Client()->getLongLivedAccessToken($shortToken);
            $long_lived_token = $oauth_response->getValue();
            return $long_lived_token;
            // echo 'Long-lived access token: ' . $long_lived_token;
        } catch (FacebookResponseException $e) {
            return false;
            //dd($e); // API call failed echo 'Graph returned an error: ' . $e->getMessage();
        } catch (FacebookSDKException $e) {
            // return false;
            // dd($e); // SDK error occurred  echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
        return false;
        die();
    }
    public function createCataLog($campaign, $businessId, $accessToken)
    {
        try {
            $api = Api::init(env('FACEBOOK_APP_ID'), env('FACEBOOK_APP_SECRET'), $accessToken);
            $api->setLogger(new CurlLogger());
            $catalog = new ProductCatalog(null, $businessId);
            $catalog->setData(array(
                ProductCatalogFields::NAME => $campaign->campaign_name
            ));
            $catalog->create();
            $productCatalogId = $catalog->{ProductCatalogFields::ID};
            return $productCatalogId;
        } catch (FacebookResponseException $e) {
            dd($e);
            // API call failed
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (FacebookSDKException $e) {
            dd($e);
            // SDK error occurred
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }

    public function createFBProductForCatalogId($productData, $cataLogId, $userId, $fbObject, $accessToken)
    {
        $api = Api::init(env('FACEBOOK_APP_ID'), env('FACEBOOK_APP_SECRET'), $accessToken);
        $api = Api::instance();

        $api = Api::init(env('FACEBOOK_APP_ID'), env('FACEBOOK_APP_SECRET'), $accessToken);
        $api->setLogger(new CurlLogger());

        $fields = array();

        $data[] = array(
            'method' => 'CREATE',
            'retailer_id' => 'retailer-' . $productData->id . '_' . time(),
            'data' => array(
                "availability" => "in stock",
                "brand" => "JataBrand",
                "category" => "Defaultk" . $productData->name,
                "description" => $productData->product_information,
                "image_url" => str_replace('public/public', 'public/storage', asset($productData->image)),
                "name" => $productData->name,
                "price" => (int)$productData->price,
                "currency" => "USD",
                "condition" => "new",
                "url" => $productData->url,
                "retailer_product_group_id" => "product-group-" . $productData->id . '_' . time()
            )
        );
        $params = array(
            'access_token' => $accessToken,
            'requests' => $data
        );
        return json_encode((new ProductCatalog($cataLogId))->createBatch(
            $fields,
            $params
        )->exportAllData(), JSON_PRETTY_PRINT);
        exit;
    }

    public function getBatches($fbObject, $accessToken)
    {
        // Get Page posts
        $response = $fbObject->get($this->businessId . "/owned_product_catalogs", $accessToken);
        $posts = $response->getDecodedBody()['data'];
        return $posts;
    }

    public function getBatchesProducts($fbObject, $accessToken, $batchId)
    {
        $fbObject->setDefaultAccessToken($accessToken);

        try {
            // Make the API call to retrieve batches of products
            $response = $fbObject->get('/' . $batchId . '/products', $accessToken);
            $graphEdge = $response->getGraphEdge();
            // Process the products
            $arrayProduct = [];
            foreach ($graphEdge as $product) {
                $arrayProduct[] = $product;
            }
            return $arrayProduct;
        } catch (FacebookResponseException $e) {
            // API call failed
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (FacebookSDKException $e) {
            // SDK error occurred
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }

    public function getPosts($fbObject, $accessToken, $pageId)
    {
        try {
            $response = $fbObject->get("/" . $pageId . "/posts?fields=id,message,attachments,created_time,from", $accessToken);
            $posts = $response->getDecodedBody()['data'];
            return $posts;
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }
    public function getComments($fbObject, $accessToken, $postId)
    {
        try {
            $response = $fbObject->get("/" . $postId . "/comments?fields=id,message,attachment,created_time,from", $accessToken);
            $posts = $response->getDecodedBody()['data'];
            return $posts;
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }

    public function replyToComment($fbObject, $accessToken, $postId, $commentId, $senderId, $pageId, $message)
    {
        // $response = $this->fb->post(
        //     '/'.$commentId.'/comments',
        //     array('message' => 'Thanks for your time please check your inbox.')
        //   , $accessToken);

        //   $graphNode = $response->getGraphNode();
        //   echo 'Reply ID: ' . $graphNode['id'];

        $fbObject->setDefaultAccessToken($accessToken);
        try {
            if ($senderId) {
                // $message = "Your reply message here Inbox here.";
                // Send a message to the sender's inbox
                $response = $fbObject->post(
                    "/" . $pageId . "/messages",
                    array('recipient' => ['comment_id' => $postId], 'message' => $message),
                    $accessToken
                );

                // Check if the message was sent successfully
                $message_id = $response->getGraphNode()->getField('message_id');
                if ($message_id) {
                    return true;
                    echo "Message sent successfully!";
                } else {
                    return false;
                    echo "Failed to send message.";
                }
            }
            return false;
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            // dd($e);
            // return false;
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // dd($e);
            // return false;
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }

    public function commentReply($fbObject, $accessToken, $postId, $commentId, $senderId, $pageId, $replyMessage)
    {
        $fbObject->setDefaultAccessToken($accessToken);
        try {
            $response = $fbObject->post('/' . $commentId . '/comments', ['message' => $replyMessage]);
            $message_id = $response->getGraphNode()->getField('id');
            if ($message_id) {
                return $message_id;
                echo "Message sent successfully!";
            } else {
                return false;
                echo "Failed to send message.";
            }
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            return false;
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            return false;
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }
}
