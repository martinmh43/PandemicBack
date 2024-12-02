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
    echo "No se logro registrar al usuario" . $nombre;
}

if ($nombre && password_verify($password, $nombre['password'])) {
    echo "Inicio de sesión exitoso.";
} else {
    echo "Nombre de usuario o contraseña incorrectos.";
}

echo "Se inserto correctamente al usuario " . $nombre;

?>