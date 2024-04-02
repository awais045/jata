<?php

require_once __DIR__ . '/config_tokens.php'; // change path as needed

use Facebook\Facebook;

$fb = new Facebook([
    'app_id' => $appId,
    'app_secret' => $appSecret,
    'default_graph_version' => 'v12.0',
]);


try {
    $response = $fb->get("/436846248879065_940193657798708", $access_token);
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
?>
