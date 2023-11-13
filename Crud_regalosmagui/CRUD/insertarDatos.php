<?php
include("../config/conexion.php");

    $categoria=$_POST['Categoriap'];
    $marca=$_POST['Marcap'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $nombre=$_POST['nombre'];

$sql = "INSERT INTO Prendas(categoriaid,Marcaid,Precio,DescripcionProducto,Nombre) VALUES('$categoria','$marca','$precio','$descripcion','$nombre')";

$resultado=mysqli_query($conexion,$sql);

if ($resultado===TRUE) {
    header("location:../index.php");
} else {
    echo "datos no insertados";
}
