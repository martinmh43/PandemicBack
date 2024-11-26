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

$conn = new mysqli($servername, $username, $password, $mail,$dbname);

if ($conn->connect_error) {
	echo "No se logro registrar al usuario";
}

$insertarUsuario = "INSERT INTO usuarios (nombre, password, mail) VALUES ('$usuario -> nombre', '$usuario ->password', '$usuario -> email')";

$conn->query($insertarAlumno);

echo "Se inserto correctamente al usuario ".$usuario ->nombre;

?>