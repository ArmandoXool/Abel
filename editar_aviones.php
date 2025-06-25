<?php
include 'conecta.php';
$id = $_GET['id'];
$sql = "SELECT * FROM aviones WHERE id=$id";
$resultado = $conn->query($sql);
$avion = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Avión</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Editar Avión</h1>
    <form action="update_aviones.php" method="POST">
        <input type="hidden" name="id" value="<?= $avion['id'] ?>">

        <label>Modelo:</label>
        <input type="text" name="modelo" value="<?= $avion['modelo'] ?>" required>

        <label>Capacidad:</label>
        <input type="number" name="capacidad" value="<?= $avion['capacidad'] ?>" required>

        <label>Matrícula:</label>
        <input type="text" name="matricula" value="<?= $avion['matricula'] ?>" required>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
