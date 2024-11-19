<?php
require_once('conexion.php');

$orderBy = $_GET['orderBy'] ?? 'id'; 
$orderDir = $_GET['orderDir'] ?? 'ASC'; 

$allowedFields = ['id', 'name', 'rol', 'difficulty', 'description'];
$allowedDirections = ['ASC', 'DESC'];

if (!in_array($orderBy, $allowedFields)) {
    $orderBy = 'id';
}
if (!in_array($orderDir, $allowedDirections)) {
    $orderDir = 'ASC';
}

$query = "SELECT * FROM champ ORDER BY $orderBy $orderDir";
$result = $conn->query($query);
if (!$result) {
    die("Error en la consulta: " . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Campeones Ordenados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="container mt-4">
    <h1>Lista de Campeones</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    <a href="?orderBy=id&orderDir=ASC">ID ↑</a>
                    <a href="?orderBy=id&orderDir=DESC">↓</a>
                </th>
                <th>
                    <a href="?orderBy=name&orderDir=ASC">Nombre ↑</a>
                    <a href="?orderBy=name&orderDir=DESC">↓</a>
                </th>
                <th>
                    <a href="?orderBy=rol&orderDir=ASC">Rol ↑</a>
                    <a href="?orderBy=rol&orderDir=DESC">↓</a>
                </th>
                <th>
                    <a href="?orderBy=difficulty&orderDir=ASC">Dificultad ↑</a>
                    <a href="?orderBy=difficulty&orderDir=DESC">↓</a>
                </th>
                <th>
                    <a href="?orderBy=description&orderDir=ASC">Descripción ↑</a>
                    <a href="?orderBy=description&orderDir=DESC">↓</a>
                </th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['rol']) ?></td>
                    <td><?= htmlspecialchars($row['difficulty']) ?></td>
                    <td><?= htmlspecialchars($row['description']) ?></td>
                    <td>
                        <a href="003editando.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">
                            <i class="fas fa-pencil-alt"></i> Editar
                        </a>
                        <a href="borrar.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de borrar a <?= htmlspecialchars($row['name']) ?>?');">
                            <i class="fas fa-trash-alt"></i> Borrar
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
