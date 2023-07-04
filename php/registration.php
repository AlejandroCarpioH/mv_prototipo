<?php

use Illuminate\Support\Facades\Date;

require_once("./conection.php");

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$date = date('Y-m-d');


$query_1 = "SELECT * FROM users WHERE username = ?";

$stmt_1 = $con->prepare($query_1);

if ($stmt_1 === false) {
    die("sentencia mal realizada");
}

$stmt_1->bind_param("s", $username);
$stmt_1->execute();
$result = $stmt_1->get_result();

if ($result->num_rows > 0) {
    echo ("<script>alert('nombre de usuario ya existe')</script>");
    echo '<script>window.location.href = "../index.php"</script>';
    $con->close();
}

$query = "INSERT INTO users VALUES(?,?,?,?)";
$stmt = $con->prepare($query);

$stmt->bind_param("ssss", $username, $password, $email, $date);

if ($stmt->execute()) {
    echo ("<script>alert('se registro correctamente')</script>");
    echo '<script>window.location.href = "../index.php"</script>';
}
