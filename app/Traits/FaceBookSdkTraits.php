<?php

namespace App\Traits;

use App\Models\Campaign;
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

trait FaceBookSdkTraits
{
    // public function init()
    // {
    //     $this->fb = new Facebook(config('facebook'));
    //     $this->accessToken = env('ACCESS_TOKEN');
    //     $this->businessId = env('BUSINESS_ID');
    //     $this->pageID = env('PAGE_ID');
    // }

    public function createFBProductForCatalogId( $productData , $cataLogId , $userId , $fbObject , $accessToken )
    {
        $api = Api::init(env('FACEBOOK_APP_ID'), env('FACEBOOK_APP_SECRET'), $accessToken);
        $api = Api::instance();
        $catLogId = 3701091503438786;

        $api = Api::init(env('FACEBOOK_APP_ID'), env('FACEBOOK_APP_SECRET'), $accessToken);
        $api->setLogger(new CurlLogger());

        $fields = array();
        // $data[] = array(
        //     'method' => 'CREATE',
        //     'retailer_id' => 'retailer-045',
        //     'data' => array(
        //         "availability" => "in stock",
        //         "brand" => "Nike",
        //         "category" => "t-shirts-1",
        //         "description" => "dlad ads product description",
        //         "image_url" => "http://www.images.example.com/t-shirts/1.png",
        //         "name" => "ALksf product name",
        //         "price" => "500", //it will be 1000 otherwise it will through error
        //         "currency" => "INR",
        //         "condition" => "new",
        //         "url" => "http://www.images.example.com/t-shirts/5.png",
        //         "retailer_product_group_id" => "product-group-8"
        //     )
        // );
        $data[] = array(
        'method' => 'CREATE',
        'retailer_id' => 'retailer-'.$productData->id.'_'.time(),
        'data' => array(
            "availability" => "in stock",
            "brand" => "JataBrand",
            "category" => "Default-".$productData->name,
            "description" => $productData->product_information,
            "image_url" => str_replace('public/public','public/storage',asset($productData->image)),
            "name" => $productData->name,
            "price" => (int)$productData->price,
            "currency" => "USD",
            "condition" => "new",
            "url" => $productData->url,
            "retailer_product_group_id" => "product-group-".$productData->id.'_'.time()
        )
        );
        $params = array(
            'access_token' => $accessToken,
            'requests' => $data
        );
        return json_encode((new ProductCatalog($catLogId))->createBatch(
            $fields,
            $params
        )->exportAllData(), JSON_PRETTY_PRINT);
        exit;
    }

    public function getBatches()
    {
        return $this->fb;
        // Get Page posts
        $response = $this->fb->get($this->businessId . "/owned_product_catalogs", $this->accessToken);
        $posts = $response->getDecodedBody()['data'];
        return $posts;
    }

    public function getBatchesProducts()
    {
        $this->fb->setDefaultAccessToken($this->accessToken);

        try {
            // Make the API call to retrieve batches of products
            $response = $this->fb->get('/3701091503438786/products', $this->accessToken);
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

}
