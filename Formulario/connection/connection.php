<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "prog_web_formulario";

$connection = mysqli_connect($host, $user, $pass, $db);

if (!$connection){
    die("Conexión fallida: " . mysqli_connect_error());
} 
?>