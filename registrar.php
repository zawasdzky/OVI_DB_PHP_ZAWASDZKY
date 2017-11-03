<?php 
  ini_set('error_reporting', E_ALL); // Esta line apermite mostrar errores o advertencias si hay
  include("conexion.php"); // incluimos el archivo de conexión que permite la conexión a la base de datos

  //se crean las variables que llegan mediante el metodo POST desde registro.php
  $nombre= $_POST['nombre'];
  $email= $_POST['email'];
  $telefono= $_POST['telefono'];

  // Se crea el insert y se almacena en la variable insertar
  $insertar = "INSERT INTO `usuarios`.`usuarios` ( `nombre`, `email`, `telefono`) VALUES ('$nombre', 'email', '$telefono');"; 
  // se ejecuta el metodo query para realizar la actualizacion
  $conn->query($insertar); 
  //cerramos la conexion 
  $conn->close();
  // se redirecciona al listado de usuarios
  header("Location: consultar.php"); 
  die();
?>
