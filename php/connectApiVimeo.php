<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Vimeo\Vimeo;

$idclient = "f330767daa4d996fa762ecd782fd6690b2499362";
$clientSecret = "ivLFqQnQdayHcUL8gWFQzGuWAJaHO33Ss+1LiVSJS7MqWH4UshjHrDPYLjlmxfb/5Xu8vxl7/nBCxUMlDQw4rbwM4kY98X8HPx+ojWK8M/6nD/FgmN6OSjwL+Z384L5J";
$accessToken = "c3f7f163af7c0c6e551889353efd682f";

$client = new Vimeo($idclient, $clientSecret, $accessToken);
