<?php
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'admin') {
    header('Location: index.php');
    exit;
}

$clientes = $_SESSION['clientes'];
$dulces = $_SESSION['dulces'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Pastelería</title>
    <link rel="stylesheet" href="styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Bienvenido, Administrador</h1>
        <a href="logout.php" class="btn btn-danger mt-3">Cerrar sesión</a>
        
        <h2 class="mt-4">Listado de Clientes</h2>
        <ul class="list-group">
            <?php foreach ($clientes as $cliente): ?>
                <li class="list-group-item"><?php echo htmlspecialchars($cliente->getNombre() . ' (' . $cliente->getUsuario() . ')'); ?></li>
            <?php endforeach; ?>
        </ul>

        <h2 class="mt-4">Listado de Dulces</h2>
        <ul class="list-group">
            <?php foreach ($dulces as $dulce): ?>
                <li class="list-group-item"><?php echo htmlspecialchars($dulce->muestraResumen()); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
