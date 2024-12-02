<?php

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers:*');
header('Content-Type: aplication/json');

// Recoger datos
$json = file_get_contents('php://input');

$usuario = json_decode($json);


// Configurar conexion

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pandemic";

// Crear conexion

$conn = new mysqli($servername, $username, "", $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$insertarAlumno = "INSERT INTO usuarios (nombre, contraseña, foto, email) VALUES ('$nombre', '$hpass', null, null)";


if ($conn->query($insertarAlumno) === TRUE) {
    echo "Se insertó correctamente al usuario " . $nombre;
} else {
    echo "Error al insertar al usuario: " . $conn->error;
}


$conn -> close();

?>