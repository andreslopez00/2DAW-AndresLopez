<?php 
/*009formulario1.php envía los datos (nombre y apellidos, email, url y sexo) a
009formulario2.php.
009formulario2.php lee los datos y los mete en la sesión. A continuación, muestra el
resto de los campos del formulario a rellenar (convivientes, aficiones y menú). Envía
estos datos a 009formulario3.php.
009formulario3.php recoge los datos enviados en el paso anterior y junto a los que ya
estaban en la sesión, se muestran todos los datos en una tabla/lista desordenada. */
session_start(); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario 1</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <form action="009formulario2.php" method="post">
        <div class="form-group">
            <label for="nombre">Nombre y apellidos:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="url">URL página personal:</label>
            <input type="url" name="url" id="url" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Sexo:</label><br>
            <div class="form-check form-check-inline">
                <input type="radio" name="sexo" value="Hombre" class="form-check-input" required>
                <label class="form-check-label">Hombre</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="sexo" value="Mujer" class="form-check-input" required>
                <label class="form-check-label">Mujer</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Siguiente</button>
    </form>
</body>
</html>
