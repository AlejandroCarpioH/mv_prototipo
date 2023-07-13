<?php
session_start();

require("./conection.php"); // $con

$user = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT password, type FROM users WHERE username = ?";

$stmt = $con->prepare($query);

if ($stmt === false) {
    die("sentencia mal realizada");
}

$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $results = $result->fetch_assoc();
    $con->close();
    if ($results["password"] == $password) {
        $_SESSION["username"] = $user;
        $_SESSION["type"] = $results["type"];
        // echo "<script>alert('" . $results['type'] . "')</script>";
        header("Location: ../pages/adminPanel.php");
    } else {
        echo ("<script>alert(' usuario o contrasena incorrecta')</script>");
        echo '<script>window.location.href = "../index.php"</script>';
    }
} else {
    echo ("<script>alert(' usuario o contrasena incorrecta')</script>");
    echo '<script>window.location.href = "../index.php"</script>';
    $con->close();
}
