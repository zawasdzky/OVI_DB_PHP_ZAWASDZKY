<?php 
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "usuarios";
	// Creando la conexión y almacenandola en la variable conn
	$conn = new mysqli($servername, $username, $password, $dbname);
	// si existe algun error mostrarlo
	if ($conn->connect_error) {
	    die("Error de Conexión: " . $conn->connect_error);
	} 
?>