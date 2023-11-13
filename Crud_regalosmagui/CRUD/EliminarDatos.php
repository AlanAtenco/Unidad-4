<?php
    include("../config/conexion.php");

    $Id = $_GET['Id'];
    $sql = "DELETE FROM Prendas WHERE IdPrenda ='$Id'";

    $query=mysqli_query($conexion,$sql);
    if($query=== TRUE){
        header("Location: ../index.php");
    }

?>