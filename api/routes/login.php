<?php

require("../connection.php");
require("../loginclass.php");
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data =  json_decode(file_get_contents("php://input"));
    $username = $data->username;
    $password = $data->password;

    $con = new connection();
    $login = new login($con::getConnection(), $username, $password);

    $result = array(
        "value" => false
    );

    $response = json_encode($login::getLogin());
    echo $response;
}
