<?php
require("../userRegistrationClass.php");
require("../connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data =  json_decode(file_get_contents("php://input"));
    $username = $data->username;
    $password = $data->password;
    $email = $data->email;

    $con = new connection();
    $login = new registration($con::getConnection(), $username, $password, $email);

    $result = array(
        "value" => false
    );

    echo json_encode($login::getRegistration());
    // echo json_encode($result);
}
