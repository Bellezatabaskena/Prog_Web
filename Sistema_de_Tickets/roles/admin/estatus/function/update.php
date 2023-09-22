<?php
require ('../../../../Includes/db.php');

$id = $_GET['id'];
$nombre = $_POST['nombre'];


$query = "UPDATE estatus SET nombre_estatus = '$nombre'  WHERE id_estatus = $id";

$ejecutar = mysqli_query($connection, $query);
header("Location: ../index.php");
?>