<?php

require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new \Facebook\Facebook([
 'app_id' => '1453150808930055',
  'app_secret' => '2d468a4e90d951d79194786a5f219c15',
  'default_graph_version' => 'v2.10',
  //'default_access_token' => '{access-token}', // optional
]);

// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
//   $helper = $fb->getRedirectLoginHelper();
//   $helper = $fb->getJavaScriptHelper();
//   $helper = $fb->getCanvasHelper();
//   $helper = $fb->getPageTabHelper();

$oAuth2Client = $fb->getOAuth2Client();
$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken('EAAUpognFdwcBOZBdc8G6y1eDS2SIxzeCZCThpHYsHxQoq2IUTHl9IdMQYNmUyOxWHDtHMbLfKpchPMopwUnlZBmXxLF8EZCbEuUrVSvop63Jvb4Meahq24gY1GenKKBIg1tWDZBxZABVDvD9lgUytZBjNli0YilPMpUXXYTJt8hHxSQkZBZC2RlXq7k2fEwCCRAbG7Wi4mM1eVCBdgZCyQYOKnu7A4gLpJa5LeJQZDZD');

echo "<pre>";
print_r($longLivedAccessToken);
exit;
try {
  // Get the \Facebook\GraphNodes\GraphUser object for the current user.
  // If you provided a 'default_access_token', the '{access-token}' is optional.
  $response = $fb->get('/me', '{access-token}');
} catch(\Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$me = $response->getGraphUser();
echo 'Logged in as ' . $me->getName();


// // Your Facebook App ID and App Secret
// // $appId = '1453150808930055';
// // $appSecret = '2d468a4e90d951d79194786a5f219c15';
// // Your short-lived access token
// // $shortLivedAccessToken = 'EAAUpognFdwcBOZBdc8G6y1eDS2SIxzeCZCThpHYsHxQoq2IUTHl9IdMQYNmUyOxWHDtHMbLfKpchPMopwUnlZBmXxLF8EZCbEuUrVSvop63Jvb4Meahq24gY1GenKKBIg1tWDZBxZABVDvD9lgUytZBjNli0YilPMpUXXYTJt8hHxSQkZBZC2RlXq7k2fEwCCRAbG7Wi4mM1eVCBdgZCyQYOKnu7A4gLpJa5LeJQZDZD';

// // Endpoint to exchange short-lived token for long-lived token
// $endpoint = 'https://graph.facebook.com/oauth/access_token';
// $params = http_build_query([
//     'grant_type' => 'fb_exchange_token',
//     'client_id' => $appId,
//     'client_secret' => $appSecret,
//     'fb_exchange_token' => $access_token,
// ]);

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, "$endpoint?$params");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $response = curl_exec($ch);
// curl_close($ch);

// // Parse the response
// $data = json_decode($response, true);

// if (isset($data['access_token'])) {
//     $longLivedAccessToken = $data['access_token'];
//     echo "Long-lived access token: $longLivedAccessToken";
// } else {
//     echo "Error: Unable to exchange short-lived token for long-lived token";
// }