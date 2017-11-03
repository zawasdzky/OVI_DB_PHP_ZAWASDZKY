<?php 
  ini_set('error_reporting', E_ALL); // Esta line apermite mostrar errores o advertencias si hay
  include("conexion.php"); // incluimos el archivo de conexión que permite la conexión a la base de datos
  $id= $_GET['id'];
  $consulta = "SELECT * FROM `usuarios` WHERE `id`='$id' LIMIT 0,1"; // Se hace la consulta a la base de datos y se almacena en la variable consultaa
  $resultado = $conn->query($consulta); // se almacena la consulta en la variable resulta usando la función query  ya la conexción
  while($columna = $resultado->fetch_assoc()) { 
  $nombre = $columna['nombre'];
  $email = $columna['email'];
  $telefono = $columna['telefono'];
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>OVI Ejemplo</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="col-md-6 col-md-offset-3">
    <h2>¿Realmente desea borrar el usuario <?php echo $nombre; ?> ?</h2>   
      <form action="borrar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" disabled>
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $email; ?> " disabled
        <label>Teléfono</label>
        <input type="text" name="telefono" class="form-control" value="<?php echo $telefono; ?> " disabled>
        <br>
        <div class="text-center">
        <input type="submit" name="guardar" value="Borrar" class="btn btn-danger">
        </div>
      </form> 
  </div>   
</div>
<?php $conn->close(); ?>
</body>
</html>
