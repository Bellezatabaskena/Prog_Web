<?php 
//esto es exclusivo para probar recibimiento de datos del 
//print_r($_POST);

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$Telefono=$_POST['Telefono'];

$query = "INSERT INTO usuario (nombre,email,tel) VALUES ('$nombre'.'$email','$Telefono')";

$ejecutar = mysqli_query($connection, $query);
//print("<br> Nombre del Usuario: " . $nombre . "<br>email: " . $email . "<br>Tel: " . $Telefono);

?>