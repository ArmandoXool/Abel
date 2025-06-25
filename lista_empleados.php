<?php
include 'conecta.php';
$res = $conn->query("SELECT * FROM empleados");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Empleados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Empleados Registrados</h1>
    <a href="empleados.html">Registrar nuevo empleado</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Puesto</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $res->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['puesto'] ?></td>
            <td><?= $row['correo'] ?></td>
            <td><?= $row['telefono'] ?></td>
            <td class="acciones">
                <a href="editar_empleados.php?id=<?= $row['id'] ?>" class="editar">Editar</a>
                <a href="delete_empleados.php?id=<?= $row['id'] ?>" class="eliminar" onclick="return confirm('¿Eliminar este empleado?')">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
