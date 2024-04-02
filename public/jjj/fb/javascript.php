<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Video Streaming to Facebook</title>
</head>
<body>
    <video id="liveVideo" width="640" height="480" autoplay></video>
    <button id="startStreamBtn">Start Streaming</button>

    <script>
        // Initialize Facebook SDK
        window.fbAsyncInit = function() {
            FB.init({
                appId: '1453150808930055',
                version: 'v12.0',
                xfbml: true
            });
        };

        // Load the SDK asynchronously
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        // Function to start streaming
        function startStreamingToFacebook() {
            // Get reference to video element
            const videoElement = document.getElementById('liveVideo');

            // Request access to camera and microphone
            navigator.mediaDevices.getUserMedia({ video: true, audio: true })
                .then(function(stream) {
                    // Attach stream to video element
                    videoElement.srcObject = stream;

                    // Step 1: Create Live Video Session on Facebook
                    FB.api('/102504132303710/live_videos', 'POST', {
                        access_token: 'EAAUpognFdwcBO4D78KXDISYqZChS46ohu5xOlr0KPi81ldYEX9K4xdAJpIYZBcE62dG0w0q4hScvIEgBcCf0zx9SHYEuuX5m7ovkTzCfKkcc5Gn4Ja0trMD0NVsMJXzaJFhDwZClCjNDZArkZAZBcNQd7p0PFDntLT2PlxrvFikZC7OrNFh4lMivpOWGBOPi9eehndBzmyiDJ5lEasZD',
                        status: 'LIVE_NOW',
                        title: 'My Live Video'
                    }, function(response) {
                        if (!response || response.error) {
                            console.error('Error creating live video session:', response.error);
                            return;
                        }
                        
                        // Step 2: Start MediaRecorder with the RTMP URL
                        const streamKey = response.stream_url.split('/').pop();
                        const rtmpsURL = `rtmps://live-api-s.facebook.com:443/rtmp/${streamKey}`;

                        // Start MediaRecorder with RTMP URL
                        const mediaRecorder = new MediaRecorder(videoElement.captureStream(), {
                            mimeType: 'video/webm'
                        });

                        // Configure MediaRecorder to stream to the RTMP server
                        mediaRecorder.ondataavailable = function(event) {
                            sendDataToFacebook(response.id, event.data);
                        };

                        // Start recording
                        mediaRecorder.start();
                    });
                })
                .catch(function(error) {
                    console.error('Error accessing camera and microphone:', error);
                });
        }

        // Function to send data to Facebook
        function sendDataToFacebook(videoID, data) {
            // Implement this function as shown in the previous example
            console.log(videoID)
            console.log(data)
        }

        // Button click event listener to start streaming
        document.getElementById('startStreamBtn').addEventListener('click', startStreamingToFacebook);
    </script>
</body>
</html>
