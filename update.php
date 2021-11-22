<?php
include("conexion.php");
$con=conectar();

$id_trabajador = $_POST['id_trabajador'];
$edad = $_POST['edad'];
$nombre = $_POST['nombre'];
$turno = $_POST['turno'];
$telefono = $_POST['telefono'];

$sql = "UPDATE `empleado` SET `edad`='$edad',`nombre`='$nombre',`turno`='$turno',`telefono`='$telefono' WHERE id_trabajador = $id_trabajador";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
} else {

}
?>