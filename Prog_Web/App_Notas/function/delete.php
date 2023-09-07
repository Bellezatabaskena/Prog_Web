<?php 

require('../connection/connection.php');

$id =$_GET['id'];

$query = "DELETE FROM notas WHERE id_notas = $id ";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>