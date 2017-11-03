<?php 
  ini_set('error_reporting', E_ALL); // Esta line apermite mostrar errores o advertencias si hay
  include("conexion.php"); // incluimos el archivo de conexión que permite la conexión a la base de datos

  //se crean las variables que llegan mediante el metodo POST desde edicion.php
  $id= $_POST['id'];
  $nombre= $_POST['nombre'];
  $email= $_POST['email'];
  $telefono= $_POST['telefono'];
  // Se crea el updatey se almacena en la variable actualizar 
  $actualizar = "UPDATE `usuarios`.`usuarios` SET `nombre` = '$nombre', `email` = '$email', `telefono` = '$telefono' WHERE `usuarios`.`id` = '$id'"; 
  // se ejecuta el metodo query para realizar la actualizacion
  $conn->query($actualizar); 
  //cerramos la conexion 
  $conn->close();
  // se redirecciona al listado de usuarios
  header("Location: consultar.php"); 
  die();
?>


