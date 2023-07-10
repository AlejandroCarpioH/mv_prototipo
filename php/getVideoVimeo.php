<?php

//require('../vendor/autoload.php');
require __DIR__ . "/connectApiVimeo.php"; // <-- $client

$response = $client->request('/me/videos', array(), 'GET');
//$json  = json_decode($response['body'], true);

// echo ("<script> console.log('" . json_encode($response['body']['data'][0]['embed']['html']) . "')</script>");

foreach ($response['body']['data'] as $data) {
    print_r("{$data['embed']['html']}");
}
