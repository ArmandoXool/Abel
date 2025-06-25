<?php
include 'conecta.php';

$id = $_POST['id'];
$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$id_avion = $_POST['id_avion'];

$sql = "UPDATE vuelos SET 
            origen='$origen', 
            destino='$destino', 
            fecha='$fecha', 
            hora='$hora', 
            id_avion=$id_avion 
        WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: lista_vuelos.php");
} else {
    echo "Error al actualizar: " . $conn->error;
}
?>
