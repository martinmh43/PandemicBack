<?php

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers:*');
header('Content-Type: aplication/json');
// Recoger datos
$json = file_get_contents('php://input');

$usuario = json_decode($json);

$hpass = password_hash($password, PASSWORD_DEFAULT);

// Configurar conexion

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pandemic";

// Crear conexion

$conn = new mysqli($servername, $username, $hpass, $dbname);

if ($conn->connect_error) {
	echo "No se logro registrar al usuario".$nombre;
}

$insertarUsuario = "INSERT INTO usuarios (nombre, password) VALUES ('$usuario -> nombre', '$usuario ->password')";

$resultado = $conn->query($insertarAlumno);

echo "Se inserto correctamente al usuario ".$nombre;

?>