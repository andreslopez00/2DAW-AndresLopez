<?php
 /*014series.php: Añade una nueva vista similar a 012peliculas.php que muestra un
"Listado de Series" con una lista desordenada con tres series. Tanto 012peliculas.php
como la vista recién creada, deben tener un pequeño menú que permita pasar de un
listado a otro. Comprueba que, si se accede directamente a cualquiera de las vistas sin
tener un usuario logado vía URL del navegador, no se muestra el listado.
Modifica tanto el controlador como las vistas para que:
los datos los obtenga el controlador (almacena en la sesión un array de películas y otro
de series) coloque los datos en la sesión. 1,5 pt
En las vistas, los datos se recuperan de la sesión y se pintan en la lista desordenada
recorriendo el array correspondiente. */
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: 010index.php");
    exit();
}

$series = $_SESSION['series'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de series</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Listado de series</h2>
            <ul class="list-group">
                <?php foreach ($series as $serie): ?>
                    <li class="list-group-item"><?php echo $serie; ?></li>
                <?php endforeach; ?>
            </ul>
            <div class="mt-3">
                <a href="012peliculas.php" class="btn btn-secondary">Ver películas</a>
                <a href="013logout.php" class="btn btn-danger">Cerrar sesión</a>
            </div>
        </div>
    </div>
</body>
</html>
