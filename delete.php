<?php

include("conexion.php");
$con=conectar();

$id_trabajador=$_GET['id'];

$sql="DELETE FROM `empleado` WHERE id_trabajador='$id_trabajador'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>