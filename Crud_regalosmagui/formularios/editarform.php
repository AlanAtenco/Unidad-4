<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body  style="background-color: #ffc8dd">
  <br>
    <h1 class="text-center" style="color:white">Editar producto</h1>
    <br>
   
    <form class="container" action="../CRUD/EditarDatos.php" method="POST"> 
    <?php    
    include_once('../config/conexion.php');
    
    
    $sql ="SELECT * FROM Prendas WHERE IdPrenda=".$_REQUEST['Id'];
    $resultado= $conexion->query($sql);

    $row = $resultado->fetch_assoc();
    ?>


    <input type="Hidden" class="form-control" name="Id" value="<?php echo $row['IdPrenda'];?>">


    <label for="">Categorias</label>
    <select class="form-select mb-3" name="Categoria">
      <option selected disabled>Selecciona Una Categoria</option>
    
    <?php 
      include("../config/conexion.php");

      $sql1= "SELECT * FROM Categoria WHERE Id=".$row['categoriaid'];
      $resultado1=$conexion->query($sql1);

      $row1=$resultado1->fetch_assoc();

      echo "<option selected value='".$row1['Id']."'>".$row1['Nombrecategoria']."</option>";
      $sql2="SELECT * FROM Categoria";
      $resultado2=$conexion->query($sql2);

      while ($fila = $resultado2->fetch_assoc()) {
        echo "<option value='".$fila['Id']."'>".$fila['Nombrecategoria']."</option>";
      }
    ?>
    </select>

    <label for="">Marcas</label>
    <select class="form-select mb-3" name="Marca">
      <option selected disabled>Selecciona Marcas</option>
      <?php 
      include("../config/conexion.php");

      $sql3= "SELECT * FROM Marcas WHERE Id=".$row['Marcaid'];
      $resultado3=$conexion->query($sql3);

      $row3=$resultado3->fetch_assoc();

      echo "<option selected value='".$row3['Id']."'>".$row3['NombreMarca']."</option>";
      $sql4="SELECT * FROM Marcas";
      $resultado4=$conexion->query($sql4);

      while ($fila = $resultado4->fetch_assoc()) {
        echo "<option value='".$fila['Id']."'>".$fila['NombreMarca']."</option>";
      }
      
      ?>
    </select>


  <div class="mb-3">
    <label class="form-label">Precio</label>
    <input type="text" class="form-control" name="precio" value="<?php echo $row['Precio'];?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" value="<?php echo $row['DescripcionProducto'];?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo $row['Nombre'];?>">
  </div>
  <div class="text-center"><button type="submit" class="btn btn-danger">enviar</button>
  <a href="../index.php" class="btn btn-info">regresar</a>
  </div>
  
</form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>