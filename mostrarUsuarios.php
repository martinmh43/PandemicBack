<?php

// Configurar conexion

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pandemic";

// Crear conexion

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	echo "Error manin";
}

$selectUser = "SELECT * FROM usuarios";

$resultado = $conn->query($selectUser);

?>





<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
	<title>Mostrar usuarios</title>
</head>

<body>

	<h1>Mostrar usuarios</h1>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>nombre</th>
				<th>contraseña</th>
                <th>partida</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($row = $resultado->fetch_assoc()) {
				echo "<tr>
						<td>" . $row['id'] . "</td>
						<td>" . $row['nombre'] . "</td>
						<td>" . $row['contraseña'] . "</td>
                        <td>" . $row['partida'] . "</td>
					</tr>";
			}
			?>
		</tbody>
	</table>

</body>

</html>
