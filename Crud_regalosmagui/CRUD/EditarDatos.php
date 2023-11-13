<?php

    include_once("../config/conexion.php");

    $id=$_POST['Id'];
    $Categoria=$_POST['Categoria'];
    $Marca=$_POST['Marca'];
    $Precio=$_POST['precio'];
    $Descripcion=$_POST['descripcion'];
    $Nombre=$_POST['nombre'];

    $sql= "UPDATE Prendas SET
        categoriaid='".$Categoria."',
        Marcaid='".$Marca."',
        Precio='".$Precio."',
        DescripcionProducto='".$Descripcion."',
        Nombre='".$Nombre."' WHERE IdPrenda='".$id."'";

if($resultado = $conexion->query($sql)){
    header("location:../index.php");
}