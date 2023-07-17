<?php


if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $valores = array(
        "valor" => "hola get"
    );

    echo json_encode($valores);
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {




    $value = file_get_contents('php://input');
    print_r(json_decode($value, true));
    echo ("hola post");
}
