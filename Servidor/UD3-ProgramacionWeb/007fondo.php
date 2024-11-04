<?php
/*007fondo.php: Mediante el uso de cookies, crea una página con un desplegable con
varios colores, de manera que el usuario pueda cambiar el color de fondo de la página.
Al cerrar la página, ésta debe recordar, al menos durante 24h, el color elegido y la
próxima vez que se cargue la página, lo haga con el último color seleccionado */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = $_POST['color'];
    setcookie("fondo", $color, time() + 86400); // Cookie dura 24 horas
} else {
    $color = isset($_COOKIE['fondo']) ? $_COOKIE['fondo'] : "white";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seleccionar Color de Fondo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: <?php echo htmlspecialchars($color); ?>;" class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Selecciona un Color de Fondo</h2>
            <form method="post">
                <div class="form-group">
                    <label for="color">Color de Fondo:</label>
                    <select name="color" id="color" class="form-control">
                        <option value="white" <?php if ($color == "white") echo "selected"; ?>>Blanco</option>
                        <option value="red" <?php if ($color == "red") echo "selected"; ?>>Rojo</option>
                        <option value="blue" <?php if ($color == "blue") echo "selected"; ?>>Azul</option>
                        <option value="green" <?php if ($color == "green") echo "selected"; ?>>Verde</option>
                        <option value="yellow" <?php if ($color == "yellow") echo "selected"; ?>>Amarillo</option>
                        <option value="purple" <?php if ($color == "purple") echo "selected"; ?>>Morado</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Color</button>
            </form>
        </div>
    </div>
</body>
</html>


