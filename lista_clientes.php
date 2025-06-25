<?php
include 'conecta.php';
$resultado = $conn->query("SELECT * FROM clientes");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes Registrados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Clientes Registrados</h1>
    <a href="clientes.html">Registrar nuevo cliente</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['correo'] ?></td>
            <td><?= $row['telefono'] ?></td>
            <td>
                <a href="clientes_edit.php?id=<?= $row['id'] ?>">Editar</a> |
                <a href="clientes_delete.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Eliminar cliente?')">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
