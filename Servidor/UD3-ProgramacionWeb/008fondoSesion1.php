<?php
/*008fondoSesion1.php: Modifica el ejercicio anterior para almacenar el color de fondo
en la sesión y no emplear cookies. Además, debe contener un enlace al siguiente
archivo. 008fondoSesion2.php: Debe mostrar el color y dar la posibilidad de:
Volver a la página anterior mediante un enlace, y mediante otro enlace, vaciar la
sesión y volver a la página anterior.
Haciendo uso de la sesión, vamos a dividir el formulario del ejercicio
002formulario.php en 2 subformularios (no modificar el 002): */
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['fondo'] = $_POST['color'];
}
$color = isset($_SESSION['fondo']) ? $_SESSION['fondo'] : "white";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seleccionar color de fondo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: <?php echo htmlspecialchars($color); ?>;" class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Selecciona un color de fondo</h2>
            <form method="post">
                <div class="form-group">
                    <label for="color">Color de fondo:</label>
                    <select name="color" id="color" class="form-control">
                        <option value="white" <?php if ($color == "white") echo "selected"; ?>>Blanco</option>
                        <option value="red" <?php if ($color == "red") echo "selected"; ?>>Rojo</option>
                        <option value="blue" <?php if ($color == "blue") echo "selected"; ?>>Azul</option>
                        <option value="green" <?php if ($color == "green") echo "selected"; ?>>Verde</option>
                        <option value="yellow" <?php if ($color == "yellow") echo "selected"; ?>>Amarillo</option>
                        <option value="purple" <?php if ($color == "purple") echo "selected"; ?>>Morado</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar color</button>
            </form>
            <div class="mt-3">
                <a href="008fondoSesion2.php" class="btn btn-secondary">Ir a la página de fondo guardado</a>
            </div>
        </div>
    </div>
</body>
</html>

