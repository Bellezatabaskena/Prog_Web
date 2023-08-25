<?php 
//esto es exclusivo para probar recibimiento de datos del 
//print_r($_POST);

require('../connection/connection.php');

$nombres=$_POST['nombres'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

$query = "INSERT INTO usuarios (nombres,correo,telefono,asunto,mensaje) VALUES ('$nombres','$correo','$telefono','$asunto','$mensaje')";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

//print("<br> Nombre del Usuario: " . $nombre . "<br>email: " . $email . "<br>Tel: " . $Telefono);
//echo "<br> Nombre del usuario: {nombre} email: {$email} tel: {Telefono}";
?>