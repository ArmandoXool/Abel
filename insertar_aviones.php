<?php
include 'conecta.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modelo = $_POST['modelo'];
    $capacidad = $_POST['capacidad'];
    $matricula = $_POST['matricula'];

    $sql = "INSERT INTO aviones (modelo, capacidad, matricula) VALUES ('$modelo', $capacidad, '$matricula')";
    if ($conn->query($sql) === TRUE) {
        header("Location: lista_aviones.php");
    } else {
        echo "Error al guardar: " . $conn->error;
    }
}
?>
