<?php 
//esto es exclusivo para probar recibimiento de datos del 
//print_r($_POST);

require('../../../../../Includes/db.php');

$nombre=$_POST['nombre'];


$query = "INSERT INTO estatus (nombre_estatus) VALUES ('$nombre')";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>