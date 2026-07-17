<?php

$host = "sql301.infinityfree.com";
$user = "if0_42434526";
$pass = "iSefEauuURAL";
$db   = "if0_42434526_if0_42434526_ppm";

$conn = new mysqli(
    $host,
    $user,
    $pass,
    $db
);

if($conn->connect_error){

    die(
        "Error de conexión: " .
        $conn->connect_error
    );

}

?>
