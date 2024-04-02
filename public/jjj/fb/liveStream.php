<?php

require_once __DIR__ . '/config_tokens.php'; // change path as needed

$fbNew = new Facebook\Facebook([
  'app_id' => $appId,
  'app_secret' => $appSecret,
  'default_graph_version' => 'v11.0',
]);

// Get user access token with manage_pages permission
$helper = $fbNew->getRedirectLoginHelper();


// Upload video
$data = [
    'title' => 'My Video Title',
    'description' => 'This is a test video',
    'source' => $fbNew->videoToUpload('fb1/istockphoto-1413207061-640_adpp_is.mp4'),
];

$response = $fbNew->post($page_id.'/videos', $data, $access_token);
$videoId = $response->getGraphNode()['id'];

echo 'Video uploaded. ID: ' . $videoId;
?>
  