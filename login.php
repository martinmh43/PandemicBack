<?php

// Recoger datos

$nombre = $_POST['nombre'];
$password = $_POST['password'];

// Configurar conexion

$servername = "localhost";
$username = "root";
$dbpass = "";
$dbname = "pandemic";

$conn = new mysqli($servername, $username, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    if (password_verify($password, $row['contraseña'])) {
        echo "Inicio de sesión exitoso.";
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Nombre de usuario no encontrado.";
}

$conn->close();

?>
