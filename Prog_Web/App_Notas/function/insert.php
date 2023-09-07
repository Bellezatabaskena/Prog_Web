<?php 

require('../connection/connection.php');

$nota=$_POST['nota'];


$query = "INSERT INTO notas (nota) VALUES ('$nota')";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>