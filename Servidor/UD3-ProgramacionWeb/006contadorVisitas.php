<!--006contadorVisitas.php: Mediante el uso de cookies, informa al usuario de si es su
primera visita, o si no lo es, muestre su valor (valor de un contador). Además, debes
permitir que el usuario reinicialice su contador de visitas.
-->
<?php
if (isset($_GET['reiniciar'])) {
    setcookie("contadorVisitas", "", time() - 3600);
    header("Location: 006contadorVisitas.php");
    exit();
}

$visitas = 1;

if (isset($_COOKIE['contadorVisitas'])) {
    $visitas = $_COOKIE['contadorVisitas'] + 1;
}

setcookie("contadorVisitas", $visitas, time() + 3600 * 24 * 30); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contador de visitas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card">
        <div class="card-body">
            <?php if ($visitas == 1): ?>
                <p class="alert alert-info">Bienvenido, esta es tu primera visita.</p>
            <?php else: ?>
                <p class="alert alert-success">Has visitado esta página <?php echo $visitas; ?> veces.</p>
            <?php endif; ?>
            <a href="006contadorVisitas.php?reiniciar=true" class="btn btn-danger">Reiniciar contador de visitas</a>
        </div>
    </div>
</body>
</html>
