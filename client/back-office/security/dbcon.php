<?php
$host = "localhost";
$username = "u741634386_PISAproto";
$password = "Pisaproto2023";
$database = "u741634386_PISA";
 
$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>