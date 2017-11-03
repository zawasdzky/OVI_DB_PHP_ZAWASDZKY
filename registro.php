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
    <h2>Registrar un nuevo  usuario</h2>   
      <form action="registrar.php" method="POST">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" >
        <label>Email</label>
        <input type="email" name="email" class="form-control" >
        <label>Teléfono</label>
        <input type="number" name="telefono" class="form-control" >
        <br>
        <div class="text-center">
        <input type="submit" name="guardar" value="Crear Usuario" class="btn btn-success">
        </div>
      </form> 
  </div>   
</div>
</body>
</html>
