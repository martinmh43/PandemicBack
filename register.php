<?php

header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Headers:*");
header("Content-Type: aplication/json");

$json = file_get_contents("php://login");

$usuario = json_decode($json);

$servername = "localhost";
$username = "root";
$dbpass = "";
$dbname = "pandemic";

$conn = new mysqli($servername, $username, $dbpass, $dbname);

if ($conn->connect_error) {
   echo "Error en la conexion manito";
   echo json_encode([
    "status"=>"failed",
    "message"=>"Error al realizar la conexion"
    ]);
}

$insertarAlumno = "INSERT INTO usuarios (nombre, contraseña, foto, email) VALUES ('$usuario->$nombre', '$usuario->$password', null, null)";

if ($conn->query($insertarAlumno) === TRUE) {
    echo json_encode([
        "status"=>"success",
        "message"=>"El user $usuario->$nombre se ha registrado PI:OLA"
    ]);
} else {echo json_encode([
    "status"=>"failure",
    "message"=>"Error al insertar al usuario: " . $usuario->$nombre
    ]);
}


$conn -> close();

?>