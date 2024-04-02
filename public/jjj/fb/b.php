<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Stream</title>
</head>
<body>
    <video id="videoElement" width="640" height="480" autoplay></video>
    <button id="startButton">Start Streaming</button>
    <script>
        const videoElement = document.getElementById('videoElement');
        const startButton = document.getElementById('startButton');

        // Get user media (camera)
        navigator.mediaDevices.getUserMedia({ video: true })
            .then((stream) => {
                videoElement.srcObject = stream;
            })
            .catch((error) => {
                console.error('Error accessing camera:', error);
            });

        startButton.addEventListener('click', () => {
            // Send video stream to Facebook Live using stream URL
            fetch('a.php')
                .then(response => response.text())
                .then(streamUrl => {
                    const mediaRecorder = new MediaRecorder(videoElement.srcObject);
                    const formData = new FormData();

                    mediaRecorder.ondataavailable = (event) => {
                        formData.append('file', event.data);
                    };

                    mediaRecorder.onstop = () => {
                        fetch(streamUrl, {
                            method: 'POST',
                            body: formData,
                        })
                        .then(response => {
                            console.log('Live stream response:', response);
                        })
                        .catch(error => {
                            console.error('Error streaming:', error);
                        });
                    };

                    mediaRecorder.start();
                })
                .catch(error => {
                    console.error('Error obtaining Facebook stream URL:', error);
                });
        });
    </script>
</body>
</html>
