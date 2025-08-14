<?php
function loadEnv($path) {
    if (!file_exists($path)) return;
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($name, $value) = array_map('trim', explode('=', $line, 2));
        $_ENV[$name] = $value;
    }
}

// Load .env from project root
loadEnv(__DIR__ . '/../../../.env');


$host = "localhost";
$username = "root";
$password = $_ENV['SQL_PASS'] ?? '';
$database = "u741634386_pisaproto";
 
$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
