<?php 

require('../connection/connection.php');

$id =$_GET['id'];

$query = "DELETE FROM usuarios WHERE id_usuarios = $id ";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>