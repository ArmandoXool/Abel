<?php
$host = "localhost";
$user = "root";
$pass = "12345678";
$db = "compania_aerea";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
