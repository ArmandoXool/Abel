<?php
include 'conecta.php';

$id = $_POST['id'];
$modelo = $_POST['modelo'];
$capacidad = $_POST['capacidad'];
$matricula = $_POST['matricula'];

$sql = "UPDATE aviones SET modelo='$modelo', capacidad=$capacidad, matricula='$matricula' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    //header("Location: lista_aviones.php");
} else {
    echo "Error al actualizar: " . $conn->error;
}
?>
