<?php
require_once __DIR__ . '/config_tokens.php'; // change path as needed
use Facebook\Facebook;

$fb = new Facebook([
    'app_id' => $appId,
    'app_secret' => $appSecret,
    'default_graph_version' => 'v12.0',
]);

$access_token = $access_token;

try {
    // Start a live video stream
    $response = $fb->post("/{$page_id}/live_videos", [
        'access_token' => $access_token,
        'status' => 'LIVE_NOW',
        'title' => 'Your Live Video Title',
        'description' => 'Your Live Video Description',
        'original_fov' => '',
        'product_items'=>[
            [
                'id'=>"123",
                'name'=>'Test',
                'image'=>'https://scontent.flhe4-1.fna.fbcdn.net/v/t39.30808-6/269606982_102527028968087_271137023880021135_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeE0DlBh8nIT_Hp9sm9Nz3iJEn2ks5vNmzsSfaSzm82bO9EvoFsKPklePE9Skhkzs5XLaEzqHbTKUQ9kG1jggLJY&_nc_ohc=UMiu8INzyhwAX_5yZdz&_nc_zt=23&_nc_ht=scontent.flhe4-1.fna&oh=00_AfBmvvT8moSzHsZiENpn8TkfwhhEpKYYN0lA32cfKF-9_Q&oe=66124200',
            ],
        ]
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