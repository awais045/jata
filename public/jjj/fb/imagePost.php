<?php

require_once __DIR__ . '/config_tokens.php'; // change path as needed

/* PHP SDK v5.0.0 */
/* make the API call */
try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->post(
      '/'.$page_id.'/photos',
      array (
        'url' => 'https://fastly.picsum.photos/id/0/5000/3333.jpg?hmac=_j6ghY5fCfSD6tvtcV74zXivkJSPIfR9B8w34XeQmvU',
      ),
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
  echo "<pre>";
  print_r($graphNode);