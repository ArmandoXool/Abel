<?php
include 'conecta.php';
$id = $_GET['id'];

$sql = "DELETE FROM empleados WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: lista_empleados.php");
} else {
    echo "Error al eliminar: " . $conn->error;
}
?>
