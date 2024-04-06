<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Facebook;
use Facebook\Exceptions\FacebookSDKException;
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

class LiveStreamController extends Controller
{
    protected $fb;
    protected $accessToken;
    protected $businessId;
    protected $pageID;
    public function __construct()
    {
        // $this->fb = new Facebook([
        //     'app_id' => config('services.facebook.app_id'),
        //     'app_secret' => config('services.facebook.app_secret'),
        //     'default_graph_version' => config('services.facebook.default_graph_version'),
        // ]);
        $this->fb = new Facebook(config('facebook'));
        $this->accessToken = env('ACCESS_TOKEN');
        $this->businessId = env('BUSINESS_ID');
        $this->pageID = env('PAGE_ID');
    }

    /**
     * Display a listing of the resource.
     */
    public function createRtmsLink()
    {
        // $fb = new Facebook([
        //     'app_id' => $appId,
        //     'app_secret' => $appSecret,
        //     'default_graph_version' => 'v12.0',
        // ]);
        $fb = new Facebook(config('facebook'));
        $accessToken = env('ACCESS_TOKEN');

        try {
            // Start a live video stream
            $response = $fb->post("/{$page_id}/live_videos", [
                'access_token' => $accessToken,
                'status' => 'LIVE_NOW',
                'title' => 'Your Live Video Title',
                'description' => 'Your Live Video Description',
                'original_fov' => '',
                // 'product_items'=>[
                //     [
                //         'id'=>"123",
                //         'name'=>'Test',
                //         'image'=>'https://scontent.flhe4-1.fna.fbcdn.net/v/t39.30808-6/269606982_102527028968087_271137023880021135_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeE0DlBh8nIT_Hp9sm9Nz3iJEn2ks5vNmzsSfaSzm82bO9EvoFsKPklePE9Skhkzs5XLaEzqHbTKUQ9kG1jggLJY&_nc_ohc=UMiu8INzyhwAX_5yZdz&_nc_zt=23&_nc_ht=scontent.flhe4-1.fna&oh=00_AfBmvvT8moSzHsZiENpn8TkfwhhEpKYYN0lA32cfKF-9_Q&oe=66124200',
                //     ],
                // ]
                // 'source'=>__DIR__ .'fb1/istockphoto-1413207061-640_adpp_is.mp4',
            ]);

            $graphNode = $response->getGraphNode();
            $stream_url = $graphNode->getField('stream_url');



            pr($graphNode);
            if ($stream_url) {
                echo "Live video stream started successfully.<br>";
                echo "Stream URL: {$stream_url}<br>";
            } else {
                echo "Error starting live video stream.";
            }
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }

    public function getPosts()
    {
        $fb = new Facebook(config('facebook'));
        $accessToken = env('ACCESS_TOKEN');
        $page_id = env('PAGE_ID');

        try {
            // Get Page posts
            $response = $fb->get("/{$page_id}/feed", $accessToken);
            $posts = $response->getDecodedBody()['data'];

            // Output posts
            foreach ($posts as $post) {
                pr('start');
                echo "Post ID: {$post['id']}\n";
                echo "Message: {$post['message']}\n";
                echo "Created Time: {$post['created_time']}\n\n";
                pr('end');
            }
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }
    public function getSinglePost()
    {
        // $fb = new Facebook([
        //     'app_id' => $appId,
        //     'app_secret' => $appSecret,
        //     'default_graph_version' => 'v12.0',
        // ]);
        $fb = new Facebook(config('facebook'));
        $accessToken = env('ACCESS_TOKEN');
        try {
            // Get Page posts
            $response = $fb->get("102504132303710_436846248879065", $accessToken);
            $posts = $response->getDecodedBody()['data'];
            pr($response);
            // Output posts
            // foreach ($posts as $post) {
            //     pr('start');
            //     echo "Post ID: {$post['id']}\n";
            //     echo "Message: {$post['message']}\n";
            //     echo "Created Time: {$post['created_time']}\n\n";
            //     pr('end');

            // }
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }
    public function getComments()
    {

        // $fb = new Facebook([
        //     'app_id' => $appId,
        //     'app_secret' => $appSecret,
        //     'default_graph_version' => 'v12.0',
        // ]);
        $fb = new Facebook(config('facebook'));
        $accessToken = env('ACCESS_TOKEN');
        try {
            // Get Page posts
            $response = $fb->get("/102504132303710_436846248879065/comments", $accessToken);
            $posts = $response->getDecodedBody()['data'];

            // Output posts
            foreach ($posts as $comment) {
                pr('start');
                echo "Comment ID: {$comment['id']}\n";
                echo "Comment Text: {$comment['message']}\n";
                echo "Commenter Name: {$comment['from']['name']}\n";
                echo "Commenter ID: {$comment['from']['id']}\n";
                echo "Created Time: {$comment['created_time']}\n\n";
                pr('end');
            }
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }
    public function getCommentsInfo()
    {

        // $fb = new Facebook([
        //     'app_id' => $appId,
        //     'app_secret' => $appSecret,
        //     'default_graph_version' => 'v12.0',
        // ]);
        $fb = new Facebook(config('facebook'));
        $accessToken = env('ACCESS_TOKEN');
        try {
            $response = $fb->get("/436846248879065_940193657798708", $accessToken);
            $comment = $response->getGraphNode();
            pr($comment);
            // Output comment details
            echo "Comment ID: {$comment['id']}\n";
            echo "Comment Text: {$comment['message']}\n";
            echo "Commenter Name: {$comment['from']['name']}\n";
            echo "Commenter ID: {$comment['from']['id']}\n";
            echo "Created Time: {$comment['created_time']}\n\n";
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }


    function getCommentReply()
    {

        $fb = new Facebook(config('facebook'));
        $accessToken = env('ACCESS_TOKEN');
        $comment_id = 436846248879065_940193657798708;
        $recipient_id = 7420888131308581;


        $fb->setDefaultAccessToken($accessToken);

        // Message you want to send
        $message = 'Your message here';

        try {
            // Request to send the message
            $response = $fb->get(
                "/$recipient_id/messages",
                array(
                    'message' => $message,
                    'link' => "https://www.facebook.com/{$recipient_id}/posts/{$comment_id}"
                )
            );

            // Get the response
            $graphNode = $response->getGraphNode();

            // Success message
            echo 'Message sent successfully';
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            // Error message in case of Facebook API error
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // Error message in case of SDK error
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }

    public function createAccessToken()
    {

        $fb = new Facebook(config('facebook'));
        $accessToken = env('ACCESS_TOKEN');
        $oAuth2Client = $fb->getOAuth2Client();
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken('EAAUpognFdwcBOZBdc8G6y1eDS2SIxzeCZCThpHYsHxQoq2IUTHl9IdMQYNmUyOxWHDtHMbLfKpchPMopwUnlZBmXxLF8EZCbEuUrVSvop63Jvb4Meahq24gY1GenKKBIg1tWDZBxZABVDvD9lgUytZBjNli0YilPMpUXXYTJt8hHxSQkZBZC2RlXq7k2fEwCCRAbG7Wi4mM1eVCBdgZCyQYOKnu7A4gLpJa5LeJQZDZD');

        echo "<pre>";
        print_r($longLivedAccessToken);
        exit;
        try {
            // Get the \Facebook\GraphNodes\GraphUser object for the current user.
            // If you provided a 'default_access_token', the '{access-token}' is optional.
            $response = $fb->get('/me', '{access-token}');
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        $me = $response->getGraphUser();
        echo 'Logged in as ' . $me->getName();
    }

    // 1- live video sy comments and reactions get kar k db mai store
    // 2- connect user with fb page => get access token , page id , page secret token
    // 3- long time access token
    // 4- product catlog creation from admin panel using db and fb apis
    // yeah abi kame jo next 4 sy 5 din mai karny hain

    public function generateToken()
    {

        $fb = new Facebook(config('facebook'));
        $accessToken = env('ACCESS_TOKEN');
        $oAuth2Client = $fb->getOAuth2Client();
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken('EAAUpognFdwcBOZBdc8G6y1eDS2SIxzeCZCThpHYsHxQoq2IUTHl9IdMQYNmUyOxWHDtHMbLfKpchPMopwUnlZBmXxLF8EZCbEuUrVSvop63Jvb4Meahq24gY1GenKKBIg1tWDZBxZABVDvD9lgUytZBjNli0YilPMpUXXYTJt8hHxSQkZBZC2RlXq7k2fEwCCRAbG7Wi4mM1eVCBdgZCyQYOKnu7A4gLpJa5LeJQZDZD');

        echo "<pre>";
        print_r($longLivedAccessToken);
        exit;
        try {
            // Get the \Facebook\GraphNodes\GraphUser object for the current user.
            // If you provided a 'default_access_token', the '{access-token}' is optional.
            $response = $fb->get('/me', '{access-token}');
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        $me = $response->getGraphUser();
        echo 'Logged in as ' . $me->getName();
    }

    function getSettings()
    {
        $client_token = '505bf66a834c4e189781e663efd766a7';
        $appId = '1453150808930055';
        $appSecret = '2d468a4e90d951d79194786a5f219c15';
        $user_token = 'EAAUpognFdwcBO77Pvs8An66SsWvnsYnEBAsFSArgiuLxwV7CAYs5xED1SHecN5BMUiBFzy7OD1iq1Wn3KChspBZB5GM7QnFZA8sHWlUHtvsH35kRlpbuirGijeepSXPCCZBwaEkEZBYoWZBEB7fier0nGhy1JH0J60kIpQzwW5616dPIFpNcV8Ygg7eZAX3ZCeurdXWu9QULgZDZD';
        // $access_token = 'EAAUpognFdwcBO6vl9uDlwUkyvq4KzymLWZA41rcsIpr0wil84zr4ZCvxUo7nsrD1dB6d48uAumAh7TeeVWZB6blGkcksERgWKd7k8R6F90OQIbYEasE9QxcHvtsRCZAWjqOxDMeG7dgElF6wx33gnpQa2o5QrokCDqMKPnZAOUKRGKO9TGU1jEhRZCxPim0YnFw4lV1wgD3R2NQA1Q5GMTeKQgIi7aQyXMS5KzZBHcZD';
        $access_token = 'EAAUpognFdwcBO4D78KXDISYqZChS46ohu5xOlr0KPi81ldYEX9K4xdAJpIYZBcE62dG0w0q4hScvIEgBcCf0zx9SHYEuuX5m7ovkTzCfKkcc5Gn4Ja0trMD0NVsMJXzaJFhDwZClCjNDZArkZAZBcNQd7p0PFDntLT2PlxrvFikZC7OrNFh4lMivpOWGBOPi9eehndBzmyiDJ5lEasZD';
        $AppToken = '1453150808930055|EkBQD8pNfjnTBeZEHpq1Elk11-o';
        $page_id = '102504132303710';

        $fb = new \Facebook\Facebook([
            'app_id' => $appId,
            'app_secret' => $appSecret,
            'default_graph_version' => 'v2.10',
            //'default_access_token' => '{access-token}', // optional
        ]);
        $stream_key = 'FB-437667765463580-0-AbyCVyE_jq-asUfb';
        $backup_stream_key = 'FB-437667765463580-1-Aby6LFuBPjvNYZ31';
        $server_url = 'rtmps://live-api-s.facebook.com:443/rtmp/';
    }

    public function getCatlogs()
    {
        $fb = new Facebook(config('facebook'));
        $accessToken = env('ACCESS_TOKEN');
        $page_id = env('PAGE_ID');
        // Get Page posts
        $response = $fb->get($this->businessId . "/owned_product_catalogs", $accessToken);
        $posts = $response->getDecodedBody()['data'];
    }
    public function createCatlog()
    {
        $api = Api::init(env('FACEBOOK_APP_ID'), env('FACEBOOK_APP_SECRET'), $this->accessToken);
        $catalog = new ProductCatalog(null, $this->businessId);
        $catalog->setData(array(
            ProductCatalogFields::NAME => 'againtest ',
        ));
        dd($catalog->save()['data']);
    }

    function createFBProduct()
    {
        $catLogId = 3701091503438786;

        $api = Api::init(env('FACEBOOK_APP_ID'), env('FACEBOOK_APP_SECRET'), $this->accessToken);
        $api->setLogger(new CurlLogger());

        $fields = array();
        $data[] = array(
            'method' => 'CREATE',
            'retailer_id' => 'retailer-6',
            'data' => array(
                "availability" => "in stock",
                "brand" => "Nike",
                "category" => "t-shirts",
                "description" => "product description",
                "image_url" => "http://www.images.example.com/t-shirts/1.png",
                "name" => "product name",
                "price" => "1000", //it will be 1000 otherwise it will through error
                "currency" => "INR",
                "condition" => "new",
                "url" => "http://www.images.example.com/t-shirts/1.png",
                "retailer_product_group_id" => "product-group-1"
            )
        );

        $params = array(
            'access_token' => $this->accessToken,
            'requests' => $data
        );
        echo json_encode((new ProductCatalog($catLogId))->createBatch(
            $fields,
            $params
        )->exportAllData(), JSON_PRETTY_PRINT);

        exit;
    }

    protected function addToFacebookCatalog($productData, $catLogId)
    {
        // Construct the request payload
        $payload = [
            'items' => [
                [
                    'id' => 'your_unique_product_id', // You need to assign a unique ID to your product
                    'availability' => 'in stock', // or 'out of stock' depending on the availability
                    'condition' => 'new', // or 'used' or 'refurbished'
                    'description' => $productData['description'],
                    'image_link' => $productData['image_link'],
                    'link' => $productData['link'],
                    'title' => $productData['name'],
                    'price' => [
                        'currency' => 'USD', // Adjust currency as needed
                        'amount' => $productData['price'],
                    ],
                    // Add more fields as needed
                ]
            ]
        ];

        // Send a request to Facebook Catalog API to add the product
        $client = new Client();
        $response = $client->post('https://graph.facebook.com/v13.0/' . $catLogId . '/products_batch', [
            'json' => $payload,
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->accessToken,
            ],
        ]);

        // Handle response
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        return $body;
        // Process response as needed
    }

    function createProduct()
    {
        $api = Api::init(env('FACEBOOK_APP_ID'), env('FACEBOOK_APP_SECRET'), $this->accessToken);
        $catalogId = 3701091503438786;

        $fb = new Facebook([
            'app_id' => env('FACEBOOK_APP_ID'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => 'v19.0',
        ]);
        // Initialize the Facebook SDK

        // Define access token (usually obtained after user login)
        $accessToken = $this->accessToken;

        // Set default access token for requests
        $fb->setDefaultAccessToken($accessToken);

        // Product data
        $productData = [
            'retailer_id' => 'retailer_id_W4T',
            'name' => 'Your Product Title',
            'title' => 'Your Product Title',
            'description' => 'Description of your product',
            'availability' => 'in_stock', // or 'out_of_stock'
            'condition' => 'new', // or 'used'
            'price' => 100.00,
            'currency' => 'USD',
            'availability' => 'in stock',
            'image_url' => 'https://jatak.artisticsheaven.com/public/website/assets/images/iphone18.png',
            'image_link' => 'https://jatak.artisticsheaven.com/public/website/assets/images/iphone18.png',
            'link' => 'https://jatak.artisticsheaven.com/public/function', // Add the link to your product here
            // Add any other product attributes you need
        ];

        try {
            // Make the API call to create the product
            $response = $fb->post(
                '/' . $catalogId . '/products',
                $productData,
                $this->accessToken
            );

            // Get the response as an array
            $responseData = $response->getDecodedBody();
            dd($responseData);
        } catch (FacebookResponseException $e) {
            // API returned an error response
            dd($e);
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (FacebookSDKException $e) {
            dd($e);
            // SDK error occurred
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
        exit;
    }
}
