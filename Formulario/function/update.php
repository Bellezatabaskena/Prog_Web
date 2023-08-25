<?php
require ('../connection/connection.php');

$id = $_GET['id'];
$nombres = $_POST['nombres'];
$correo = $_POST['correo'];
$telefono=$_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$query = "UPDATE usuarios SET nombres = '$nombres', correo = '$correo', telefono = '$telefono', asunto = '$asunto', mensaje = '$mensaje' WHERE id_usuarios = $id";

$ejecutar = mysqli_query($connection, $query);
header("Location: ../index.php");
?>