<?php
include 'conecta.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$puesto = $_POST['puesto'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "UPDATE empleados SET 
            nombre='$nombre',
            puesto='$puesto',
            correo='$correo',
            telefono='$telefono'
        WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: lista_empleados.php");
} else {
    echo "Error al actualizar: " . $conn->error;
}
?>
