<?php 
//esto es exclusivo para probar recibimiento de datos del 
//print_r($_POST);

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$Telefono=$_POST['Telefono'];

print("<br> Nombre del Usuario: " . $nombre . "<br>email: " . $email . "<br>Tel: " . $Telefono);

?>