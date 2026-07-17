<?php

header("Content-Type: application/json");

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

    die(json_encode([
        "success" => false
    ]));

}

$data = json_decode(
    file_get_contents("php://input"),
    true
);

$sql = "INSERT INTO ppm (

    empleado,
    nombre,
    area,
    fecha,

    procesoAfectado,
    deliveryTO,

    codigo,
    titulo,

    supervisorOriginador,

    empleadoReporta,
    turnoReporta,

    descripcion

) VALUES (

    ?,?,?,?,?,?,?,?,?,?,?,?

)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(

    "ssssssssssss",

    $data["empleado"],
    $data["nombre"],
    $data["area"],
    $data["fecha"],

    $data["procesoAfectado"],
    $data["deliveryTO"],

    $data["codigo"],
    $data["titulo"],

    $data["supervisorOriginador"],

    $data["empleadoReporta"],
    $data["turnoReporta"],

    $data["descripcion"]

);

$stmt->execute();

echo json_encode([

    "success" => true,
    "id" => $conn->insert_id

]);

?>
