<?php
session_start();

$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['url'] = $_POST['url'];
$_SESSION['sexo'] = $_POST['sexo'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario 2</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <form action="009formulario3.php" method="post">
        <div class="form-group">
            <label for="convivientes">Número de convivientes:</label>
            <input type="number" name="convivientes" id="convivientes" class="form-control" required>
        </div>
        <div class="form-group">
        <label>Aficiones</label><br>
                <input type="checkbox" name="aficiones[]" value="Futbol"> Futbol
                <input type="checkbox" name="aficiones[]" value="Videojuegos"> Videojuegos
                <input type="checkbox" name="aficiones[]" value="Peliculas"> Peliculas
                <input type="checkbox" name="aficiones[]" value="Series"> Series
        </div>
        <div class="form-group">
            <label>Menú Favorito:</label>
            <select name="menu[]" multiple class="form-control" required>
                    <option value="Kebab">Kebab</option>
                    <option value="Puchero">Puchero</option>
                    <option value="Burger King">Burger King</option>
                    <option value="Pizza">Pizza</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>
</html>
