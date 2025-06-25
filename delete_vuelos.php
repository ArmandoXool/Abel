<?php
include 'conecta.php';
$id = $_GET['id'];

$sql = "DELETE FROM vuelos WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: lista_vuelos.php");
} else {
    echo "Error al eliminar: " . $conn->error;
}
?>
