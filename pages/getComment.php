<?php

session_start();
require_once("../php/conection.php"); //$con

$username = $_SESSION['username'];

$query = "SELECT comment FROM comment where username = ? and id_video = ?";

$stmt = $con->prepare($query);

$stmt->bind_param("si", $username, $id_video);
$stmt->execute();
