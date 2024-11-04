<?php
 /*012peliculas.php: vista que muestra como título "Listado de Películas", y una lista
desordenada con tres películas. 0,25pts*/
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: 010index.php");
    exit();
}

$peliculas = $_SESSION['peliculas'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de películas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Listado de películas</h2>
            <ul class="list-group">
                <?php foreach ($peliculas as $pelicula): ?>
                    <li class="list-group-item"><?php echo $pelicula; ?></li>
                <?php endforeach; ?>
            </ul>
            <div class="mt-3">
                <a href="014series.php" class="btn btn-secondary">Ver series</a>
                <a href="013logout.php" class="btn btn-danger">Cerrar sesión</a>
            </div>
        </div>
    </div>
</body>
</html>
