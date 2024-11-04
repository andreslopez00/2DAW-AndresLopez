<?php
session_start();

$_SESSION['convivientes'] = $_POST['convivientes'];
$_SESSION['aficiones'] = $_POST['aficiones'];
$_SESSION['menu'] = $_POST['menu'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resumen de Datos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Resumen de datos</h3>
            <ul class="list-group">
                <li class="list-group-item"><strong>Nombre y Apellidos:</strong> <?php echo $_SESSION['nombre']; ?></li>
                <li class="list-group-item"><strong>Email:</strong> <?php echo $_SESSION['email']; ?></li>
                <li class="list-group-item"><strong>URL Página Personal:</strong> <?php echo $_SESSION['url']; ?></li>
                <li class="list-group-item"><strong>Sexo:</strong> <?php echo $_SESSION['sexo']; ?></li>
                <li class="list-group-item"><strong>Número de Convivientes:</strong> <?php echo $_SESSION['convivientes']; ?></li>
                <li class="list-group-item"><strong>Aficiones:</strong> <?php echo implode(", ", $_SESSION['aficiones']); ?></li>
                <li class="list-group-item"><strong>Menú Favorito:</strong> <?php echo implode(", ", $_SESSION['menu']); ?></li>
            </ul>
        </div>
    </div>
</body>
</html>
