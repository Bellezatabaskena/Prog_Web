<?php
    $hostname = "Localhost";
    $username = "root";
    $password = "";
    $database = "prog_web_tickets";

    $connection = mysqli_connect($hostname, $username, $password, $database);

    if(!$connection){
        die("Database connection failed: " . mysqli_connect_error());
    }
?>