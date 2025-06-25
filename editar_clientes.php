<?php
include 'conecta.php';
$id = $_GET['id'];
$sql = "SELECT * FROM clientes WHERE id=$id";
$resultado = $conn->query($sql);
$cliente = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="clientes_update.php" method="POST">
        <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $cliente['nombre'] ?>" required>

        <label>Correo:</label>
        <input type="email" name="correo" value="<?= $cliente['correo'] ?>" required>

        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?= $cliente['telefono'] ?>" required>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
