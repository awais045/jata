<?php

require_once __DIR__ . '/config_tokens.php'; // change path as needed
use Facebook\Facebook;
error_reporting(0);

$fb = new Facebook([
    'app_id' => $appId,
    'app_secret' => $appSecret,
    'default_graph_version' => 'v12.0',
]);


$access_token = $access_token;
$page_id = $page_id;

try {
    // Start a live video stream
    $response = $fb->post("/{$page_id}/live_videos", [
        'access_token' => $access_token,
        'status' => 'LIVE_NOW',
        'title' => 'Your Live Video Title',
        'description' => 'Your Live Video Description'
    ]);
    
    $graphNode = $response->getGraphNode();
    $stream_url = $graphNode->getField('stream_url');

    if ($stream_url) {
        echo $stream_url; // Return the stream URL
    } else {
        echo "Error starting live video stream.";
    }
} catch (\Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
} catch (\Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
}
?>
