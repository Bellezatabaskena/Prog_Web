<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "Prog_Web_Formulario";

$connection = mysqli_connect($host, $user, $pass, $db);

if (!$connection){
    die("Conexión fallida: " . mysqli_connect_error());
} 
?>