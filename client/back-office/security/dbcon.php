<?php
$host = "localhost";
$username = "u741634386_lmsproto";
$password = "d9|4QftMf5T";
$database = "u741634386_pisaproto";
 
$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
