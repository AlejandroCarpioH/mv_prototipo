<?php



require("./connectApiVimeo.php"); // <-- $client

// upload video
$file_name = $_FILES["file_video"]["tmp_name"];
$uri = $client->upload($file_name, array(
    "name" => "Vprueba",
    "description" => "Descripcion de prueba"
));

echo "Your video URI is: " . $uri;

// status 
$response = $client->request($uri . '?fields=transcode.status');
if ($response['body']['transcode']['status'] === 'complete') {
    print 'Your video finished transcoding.';
} elseif ($response['body']['transcode']['status'] === 'in_progress') {
    print 'Your video is still transcoding.';
} else {
    print 'Your video encountered an error during transcoding.';
}


// get link uploaded video

$response = $client->request($uri . '?fields=link');
echo "Your video link is: " . $response['body']['link'];
