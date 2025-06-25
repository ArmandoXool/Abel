<?php
include 'conecta.php';

$nombre = $_POST['nombre'];
$puesto = $_POST['puesto'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO empleados (nombre, puesto, correo, telefono)
        VALUES ('$nombre', '$puesto', '$correo', '$telefono')";

if ($conn->query($sql) === TRUE) {
    header("Location: lista_empleados.php");
} else {
    echo "Error: " . $conn->error;
}
?>
