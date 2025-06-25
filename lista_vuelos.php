<?php
include 'conecta.php';

$sql = "SELECT v.id, v.origen, v.destino, v.fecha, v.hora, a.modelo, a.matricula 
        FROM vuelos v 
        JOIN aviones a ON v.id_avion = a.id";
$res = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Vuelos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Vuelos Registrados</h1>
    <a href="vuelos.html">Registrar nuevo vuelo</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Origen</th>
            <th>Destino</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Avión</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $res->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['origen'] ?></td>
            <td><?= $row['destino'] ?></td>
            <td><?= $row['fecha'] ?></td>
            <td><?= $row['hora'] ?></td>
            <td><?= $row['modelo'] ?> (<?= $row['matricula'] ?>)</td>
            <td class="acciones">
                <a href="vuelos_edit.php?id=<?= $row['id'] ?>" class="editar">Editar</a>
                <a href="vuelos_delete.php?id=<?= $row['id'] ?>" class="eliminar" onclick="return confirm('¿Eliminar este vuelo?')">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
