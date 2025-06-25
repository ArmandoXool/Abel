<?php
include 'conecta.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "UPDATE clientes SET nombre='$nombre', correo='$correo', telefono='$telefono' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: lista_clientes.php");
} else {
    echo "Error al actualizar: " . $conn->error;
}
?>
