<?php
include 'conecta.php';

$id = $_GET['id'];
$sql = "DELETE FROM clientes WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: lista_clientes.php");
} else {
    echo "Error al eliminar: " . $conn->error;
}
?>
