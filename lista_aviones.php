<?php
include 'conecta.php';
$resultado = $conn->query("SELECT * FROM aviones");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Aviones</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Aviones Registrados</h1>
    <a href="aviones.html">Registrar nuevo avión</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Capacidad</th>
            <th>Matrícula</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['modelo'] ?></td>
            <td><?= $row['capacidad'] ?></td>
            <td><?= $row['matricula'] ?></td>
            <td class="acciones">
                <a href="editar_aviones.php?id=<?= $row['id'] ?>" class="editar">Editar</a>
                <a href="delete_aviones.php?id=<?= $row['id'] ?>" class="eliminar" onclick="return confirm('¿Eliminar este avión?')">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <?php include 'footer.php'; ?>
</body>
</html>
