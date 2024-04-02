<?php
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed
require_once __DIR__ . '/functions.php'; // change path as needed

$client_token = '505bf66a834c4e189781e663efd766a7';
 
$appId = '1453150808930055';
$appSecret = '2d468a4e90d951d79194786a5f219c15';
$user_token = 'EAAUpognFdwcBO77Pvs8An66SsWvnsYnEBAsFSArgiuLxwV7CAYs5xED1SHecN5BMUiBFzy7OD1iq1Wn3KChspBZB5GM7QnFZA8sHWlUHtvsH35kRlpbuirGijeepSXPCCZBwaEkEZBYoWZBEB7fier0nGhy1JH0J60kIpQzwW5616dPIFpNcV8Ygg7eZAX3ZCeurdXWu9QULgZDZD';
// $access_token = 'EAAUpognFdwcBO6vl9uDlwUkyvq4KzymLWZA41rcsIpr0wil84zr4ZCvxUo7nsrD1dB6d48uAumAh7TeeVWZB6blGkcksERgWKd7k8R6F90OQIbYEasE9QxcHvtsRCZAWjqOxDMeG7dgElF6wx33gnpQa2o5QrokCDqMKPnZAOUKRGKO9TGU1jEhRZCxPim0YnFw4lV1wgD3R2NQA1Q5GMTeKQgIi7aQyXMS5KzZBHcZD';
$access_token = 'EAAUpognFdwcBO4D78KXDISYqZChS46ohu5xOlr0KPi81ldYEX9K4xdAJpIYZBcE62dG0w0q4hScvIEgBcCf0zx9SHYEuuX5m7ovkTzCfKkcc5Gn4Ja0trMD0NVsMJXzaJFhDwZClCjNDZArkZAZBcNQd7p0PFDntLT2PlxrvFikZC7OrNFh4lMivpOWGBOPi9eehndBzmyiDJ5lEasZD';
$AppToken = '1453150808930055|EkBQD8pNfjnTBeZEHpq1Elk11-o';
$page_id = '102504132303710';

$fb = new \Facebook\Facebook([
  'app_id' => $appId,
  'app_secret' => $appSecret,
  'default_graph_version' => 'v2.10',
  //'default_access_token' => '{access-token}', // optional
]);



$stream_key ='FB-437667765463580-0-AbyCVyE_jq-asUfb';
$backup_stream_key ='FB-437667765463580-1-Aby6LFuBPjvNYZ31';
$server_url ='rtmps://live-api-s.facebook.com:443/rtmp/';