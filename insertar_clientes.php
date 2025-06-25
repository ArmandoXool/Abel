<?php
include 'conecta.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO clientes (nombre, correo, telefono) VALUES ('$nombre', '$correo', '$telefono')";
    if ($conn->query($sql) === TRUE) {
        header("Location: lista_clientes.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
