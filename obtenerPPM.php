<?php

$result = $conn->query(
    "SELECT * FROM ppm ORDER BY id DESC"
);

$datos = [];

while($row = $result->fetch_assoc()){

    $datos[] = $row;

}

echo json_encode($datos);

?>
