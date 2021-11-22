<?php 
include("conexion.php");
$con=conectar();

$sql= "SELECT * FROM empleado";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Pagina de Empleados</title>
</head>
<body>
        <div class="container mt-5">
                <div class="row">
                    <div class="col-nd-3">
                        <h1>Datos del Trabajador</h1>
                        <form action="insertar.php" method="POST">

                            <input type="text" class="form-control mb-3" name="edad" placeholder="Edad del Trabajador">
                            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre Completo">
                            <input type="text" class="form-control mb-3" name="turno" placeholder="Turno">
                            <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">

                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>

                    <div class="col-nd-8">
                        <h1>Tabla De Empleados</h1>
                        <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Edad del Trabajador</th>
                                        <th>Nombre Completo</th>
                                        <th>Turno</th>
                                        <th>Telefono</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_trabajador']?></th>
                                                <th><?php  echo $row['edad']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['turno']?></th>
                                                <th><?php  echo $row['telefono']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['id_trabajador'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_trabajador'] ?>" class="btn btn-danger">Eliminar</a></th>
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                    </div>
                </div>
        </div>
</body>
</html>