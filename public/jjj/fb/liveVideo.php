<?php
require_once __DIR__ . '/config_tokens.php'; // change path as needed

/* PHP SDK v5.0.0 */
/* make the API call */
try {
  // Returns a `Facebook\FacebookResponse` object


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
    // 'source' => $fbNew->live_videos('fb1/istockphoto-1413207061-640_adpp_is.mp4'),
  ];
  
  $response = $fbNew->post($page_id . '/live_videos', $data, $access_token);
} catch (Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
  $videoId = $response->getGraphNode()['id'];
  
  echo 'Video uploaded. ID: ' . $videoId;
/* handle the result */
pr($response);

unset($response);

/* PHP SDK v5.0.0 */
/* make the API call */
try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get(
    '/'.$videoId,
    $access_token
  );
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$graphNode = $response->getGraphNode();
/* handle the result */

pr($graphNode,1);