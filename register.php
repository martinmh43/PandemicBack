<?php

$nombre = $_POST['nombre'];
$password = $_POST['password'];



$servername = "localhost";
$username = "root";
$dbpass = "";
$dbname = "pandemic";

$conn = new mysqli($servername, $username, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$insertarAlumno = "INSERT INTO usuarios (nombre, contraseña, foto, email) VALUES ('$nombre', '$password', null, null)";

if ($conn->query($insertarAlumno) === TRUE) {
    echo "Se insertó correctamente al usuario " . $nombre;
} else {
    echo "Error al insertar al usuario: " . $conn->error;
}


$conn -> close();

?>