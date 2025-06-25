<?php
include 'conecta.php';
$id = $_GET['id'];

$v = $conn->query("SELECT * FROM vuelos WHERE id=$id")->fetch_assoc();
$aviones = $conn->query("SELECT id, modelo, matricula FROM aviones");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Vuelo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Editar Vuelo</h1>
    <form action="update_vuelos.php" method="POST">
        <input type="hidden" name="id" value="<?= $v['id'] ?>">

        <label>Origen:</label>
        <input type="text" name="origen" value="<?= $v['origen'] ?>" required>

        <label>Destino:</label>
        <input type="text" name="destino" value="<?= $v['destino'] ?>" required>

        <label>Fecha:</label>
        <input type="date" name="fecha" value="<?= $v['fecha'] ?>" required>

        <label>Hora:</label>
        <input type="time" name="hora" value="<?= $v['hora'] ?>" required>

        <label>Avión:</label>
        <select name="id_avion" required>
            <?php while ($a = $aviones->fetch_assoc()): ?>
                <option value="<?= $a['id'] ?>" <?= $a['id'] == $v['id_avion'] ? 'selected' : '' ?>>
                    <?= $a['modelo'] ?> (<?= $a['matricula'] ?>)
                </option>
            <?php endwhile; ?>
        </select>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
