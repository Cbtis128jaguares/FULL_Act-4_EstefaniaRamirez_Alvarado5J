<?php
include("conexion.php");
$con=conectar();

$id_trabajador = $_POST['id_trabajador'];
$edad = $_POST['edad'];
$nombre = $_POST['nombre'];
$turno = $_POST['turno'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO empleado VALUES ('$id_trabajador','$edad','$nombre','$turno', '$telefono')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
} else {

}
?>