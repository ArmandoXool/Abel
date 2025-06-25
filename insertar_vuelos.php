<?php
include 'conecta.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $id_avion = $_POST['id_avion'];

    $sql = "INSERT INTO vuelos (origen, destino, fecha, hora, id_avion)
            VALUES ('$origen', '$destino', '$fecha', '$hora', $id_avion)";

    if ($conn->query($sql) === TRUE) {
        header("Location: lista_vuelos.php");
    } else {
        echo "Error al guardar: " . $conn->error;
    }
}
?>
