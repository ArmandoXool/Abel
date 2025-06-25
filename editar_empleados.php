<?php
include 'conecta.php';
$id = $_GET['id'];
$e = $conn->query("SELECT * FROM empleados WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Empleado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Editar Empleado</h1>
    <form action="update_empleados.php" method="POST">
        <input type="hidden" name="id" value="<?= $e['id'] ?>">

        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $e['nombre'] ?>" required>

        <label>Puesto:</label>
        <input type="text" name="puesto" value="<?= $e['puesto'] ?>" required>

        <label>Correo:</label>
        <input type="email" name="correo" value="<?= $e['correo'] ?>" required>

        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?= $e['telefono'] ?>" required>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
