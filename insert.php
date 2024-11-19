<?php

// Recoger datos

$nombre = $_POST['nombre'];
$password = $_POST['password'];


// Configurar conexion

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pandemic";

// Crear conexion

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	echo "No se logro registrar al usuario".$nombre;
}

$insertarAlumno = "INSERT INTO usuarios (nombre, contraseña, foto, partida) VALUES ('$nombre', '$password', null, null)";

$resultado = $conn->query($insertarAlumno);

echo "Se inserto correctamente al usuario ".$nombre;

?>