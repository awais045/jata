<?php

require_once __DIR__ . '/config_tokens.php'; // change path as needed

use Facebook\Facebook;

$fb = new Facebook([
    'app_id' => $appId,
    'app_secret' => $appSecret,
    'default_graph_version' => 'v12.0',
]);


try {
    // Get Page posts
    $response = $fb->get("/102504132303710_436846248879065/comments", $access_token);
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
?>
