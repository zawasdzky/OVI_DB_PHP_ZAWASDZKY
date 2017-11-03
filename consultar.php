<?php 
  ini_set('error_reporting', E_ALL); // Esta linea permite mostrar errores o advertencias si hay
  include("conexion.php"); // incluimos el archivo de conexión que permite la conexión a la base de datos
  $consulta = "SELECT * FROM usuarios"; // Se hace la consulta a la base de datos y se almacena en la variable consultaa
  $resultado = $conn->query($consulta); // se almacena la consulta en la variable resulta usando la función query  ya la conexción
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>OVI Ejemplo</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h2>Usuarios</h2>
  <p>Listado de usuarios consultado  en la base de datos:</p>            
  <table class="table table-striped">
    <thead>
      <tr class="success">
        <th>#</th>
        <th>Nombre</th>
        <th>email</th>
        <th>Teléfono</th>
        <th>Editar</th>
        <th>Borrar</th>
      </tr>
    </thead>
    <tbody>
      <?php while($columna = $resultado->fetch_assoc()) { // este ciclo permite mostrar el listado de usuaros mediante el metodo fecth_assoc
        $id=$columna['id']; // se crea la variable id para que almacene el identificador de cada registro y se pueda usar en los botones de editar y borrar
        ?>
      <tr>
        <td><?php echo $columna['id']; //Imprimiendo el Consecutivo o id ?></td>
        <td><?php echo $columna['nombre']; //Imprimiendo el nombre ?></td>
        <td><?php echo $columna['email']; //Imprimiendo el email ?></td>
        <td><?php echo $columna['telefono']; //Imprimiendo el telefono ?></td>
        <td><a href="edicion.php?id=<?php echo $id ?>" type="button" class="btn btn-warning btn-sm ">Editar</a></td>
        <td><a href="confirma_borrar.php?id=<?php echo $id ?>" type="button" class="btn btn-danger btn-sm">Borrar</a></td>
      </tr>
        <?php } ?>
    </tbody>
  </table>
  <div class="text-center"><a href="registro.php" type="button" class="btn btn-success">Registrar Nuevo Usuario</a></div>
</div>
<?php $conn->close(); ?>
</body>
</html>
