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
    $response = $fb->get("/{$page_id}/feed", $access_token);
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
?>
