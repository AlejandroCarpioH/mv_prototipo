<?php
require("../connection.php");
require("../commentClass.php");
$con = new connection();

if ($_SERVER['REQUEST_METHOD'] == "GET") {

    $id_video = $_GET["id_video"];

    $comment = new comment($con::getConnection(), "", $id_video);

    echo json_encode($comment::getComment());
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $data =  json_decode(file_get_contents("php://input"));

    echo json_encode($data);

    comment::setComment($con::getConnection(), $data->comment, $data->username, $data->id_video);
}
