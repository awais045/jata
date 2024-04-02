<?php

require_once __DIR__ . '/config_tokens.php'; // change path as needed

use Facebook\Facebook;

$fb = new Facebook([
    'app_id' => $appId,
    'app_secret' => $appSecret,
    'default_graph_version' => 'v12.0',
]);

$comment_id = 436846248879065_940193657798708;
$recipient_id = 7420888131308581;


$fb->setDefaultAccessToken($access_token);

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
} catch (Facebook\Exceptions\FacebookResponseException $e) {
  // Error message in case of Facebook API error
  echo 'Graph returned an error: ' . $e->getMessage();
} catch (Facebook\Exceptions\FacebookSDKException $e) {
  // Error message in case of SDK error
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
}
?>


// try {
//     // Fetch the comment details
//     $response = $fb->get("/436846248879065_940193657798708", $access_token);
//     $comment = $response->getGraphNode();
//     // Extract comment message and commenter name
//     $comment_message = $comment['message'];
//     $commenter_name = $comment['from']['name'];

//     // Compose the message text
//     $message_text = "Hello {$commenter_name}! Thank you for your comment: {$comment_message}";

//     // Send a private message to the user
//     $response = $fb->post("/me/messages", [
//         'recipient' => ['id' => $user_id],
//         'message' => ['text' => $message_text],
//     ], $access_token);
// pr($response,1);
//     // Check if the message was sent successfully
//     if ($response->isSuccess()) {
//         echo "Message sent successfully!";
//     } else {
//         echo "Failed to send message. Error: " . $response->getDecodedBody()['error']['message'];
//     }
// } catch (\Facebook\Exceptions\FacebookResponseException $e) {
//     pr($e,1);
//     echo 'Graph returned an error: ' . $e->getMessage();
// } catch (\Facebook\Exceptions\FacebookSDKException $e) {
//     echo 'Facebook SDK returned an error: ' . $e->getMessage();
// }
?>
