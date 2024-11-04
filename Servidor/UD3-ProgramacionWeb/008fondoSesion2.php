<?php
session_start();
$color = isset($_SESSION['fondo']) ? $_SESSION['fondo'] : "white";

if (isset($_GET['action']) && $_GET['action'] == 'reset') {
    session_unset();
    header("Location: 008fondoSesion1.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Color de fondo guardado</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: <?php echo htmlspecialchars($color); ?>;" class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Color de fondo guardado</h2>
            <p>El color de fondo actual es <strong><?php echo ucfirst($color); ?></strong>.</p>
            <a href="008fondoSesion1.php" class="btn btn-secondary">Volver</a>
            <a href="008fondoSesion2.php?action=reset" class="btn btn-danger">Restablecer fondo</a>
        </div>
    </div>
</body>
</html>
