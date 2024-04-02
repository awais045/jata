<?php
require_once __DIR__ . '/config_tokens.php'; // change path as needed

$api_version = 'v12.0'; // Use the latest API version

// Video details
$video_path = 'fb1/istockphoto-1413207061-640_adpp_is.mp4'; // Path to your video file
$title = 'My Live Video';
$description = 'This is a live video uploaded via the Facebook Graph API';

// API endpoint for video upload
$url = "https://graph.facebook.com/{$api_version}/{$page_id}/live_videos";

// Data for the POST request
$data = array(
    'access_token' => $access_token,
    'source' => '@' . realpath($video_path),
    'title' => $title,
    'description' => $description,
    'is_published' => 'true', // Publish the video as live
);

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);
pr($response,1);
// Handle the response
if ($response) {
    $result = json_decode($response, true);
    // The result will contain information about the uploaded video
    print_r($result);
} else {
    echo "Error uploading video.";
}
?>
