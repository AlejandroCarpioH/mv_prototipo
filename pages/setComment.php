<?php
session_start();
require_once("../php/conection.php"); // $con

$comment = $_POST['comment'];
$username = $_SESSION['username'];
$id_video = $_POST['id_video'];
$date = date('Y-m-d');

// echo ("$comment $id_video $date");
$query = "INSERT INTO comment (username, id_video, comment, date_comment) VALUES (?,?,?,?)";

$stmt = $con->prepare($query);
$stmt->bind_param("siss", $username, $id_video, $comment, $date);

if ($stmt->execute()) {
    echo ("se inserto correctamente");
}
