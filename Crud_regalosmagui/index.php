<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body style="background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,38,235,1) 100%);">
    <br>
    <div class="container">
      <h1 class="text-center" style="background-color: #ff00e7; color:white">Regalos Maguito</h1>
    </div>
    <br>
    <div class="container">
  <a href="formularios/agregarform.php" class="btn btn-outline-danger">Agregar Producto</a>
</div>
<br>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Categoria</th>
      <th scope="col">Marca</th>
      <th scope="col">Precio</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    require("config/conexion.php");

    $sql = $conexion -> query("SELECT * FROM prendas
    INNER JOIN Categoria ON prendas.categoriaid = Categoria.Id
    INNER JOIN Marcas ON prendas.Marcaid = Marcas.Id
    ");

    while($resultado = $sql->fetch_assoc()){

      ?>
      <tr>
      <th scope="row"><?php echo $resultado['IdPrenda']?></th>
      <th scope="row"><?php echo $resultado['Nombrecategoria']?></th>
      <th scope="row"><?php echo $resultado['NombreMarca']?></th>
      <th scope="row"><?php echo $resultado['Precio']?></th>
      <th scope="row"><?php echo $resultado['DescripcionProducto']?></th>
      <th scope="row"><?php echo $resultado['Nombre']?></th>
      <th>
        <a href="formularios/editarform.php?Id=<?php echo $resultado['IdPrenda']?>" class="btn btn-warning">Editar</a>
        <a href="CRUD/EliminarDatos.php?Id=<?php echo $resultado['IdPrenda']?>" class="btn btn-danger">Eliminar</a>
      <th>
    </tr>
    
  <?php
  }
  ?>

    
  </tbody>
</table>

    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>