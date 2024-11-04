<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Resultado de la validación del formulario</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            $url = filter_var($_POST['url'], FILTER_VALIDATE_URL);
            $sexo = in_array($_POST['sexo'], ['Hombre', 'Mujer']) ? $_POST['sexo'] : null;
            $convivientes = filter_var($_POST['convivientes'], FILTER_VALIDATE_INT);
            $aficiones_validas = ['Futbol', 'Videojuegos', 'Peliculas', 'Series'];
            $aficiones = isset($_POST['aficiones']) ? array_intersect($_POST['aficiones'], $aficiones_validas) : [];
            $menu_valido = ['Kebab', 'Puchero', 'Burger King', 'Pizza'];
            $menu = isset($_POST['menu']) ? array_intersect($_POST['menu'], $menu_valido) : [];

            $errores = [];

            if (!$nombre) {
                $errores[] = "Nombre inválido.";
            }
            if (!$email) {
                $errores[] = "Email inválido.";
            }
            if ($url && !$url) {  
                $errores[] = "URL inválida.";
            }
            if (!$sexo) {
                $errores[] = "Sexo no seleccionado o inválido.";
            }
            if ($convivientes === false || $convivientes < 0) {
                $errores[] = "Número de convivientes inválido.";
            }
            if (count($aficiones) == 0) {
                $errores[] = "Selecciona al menos una afición válida.";
            }
            if (count($menu) == 0) {
                $errores[] = "Selecciona al menos un menú válido.";
            }

            if (count($errores) > 0) {
                echo "<div class='alert alert-danger'><h4>Errores en el formulario:</h4><ul>";
                foreach ($errores as $error) {
                    echo "<li>" . htmlspecialchars($error) . "</li>";
                }
                echo "</ul></div>";
                echo "<a href='003formulario_validacion.php' class='btn btn-primary'>Volver al formulario</a>";
            } else {
                echo "<h2 class='text-success'>Datos válidos recibidos:</h2>";
                echo "<table class='table table-striped table-bordered'>";
                echo "<tr><th>Nombre</th><td>" . htmlspecialchars($nombre) . "</td></tr>";
                echo "<tr><th>Email</th><td>" . htmlspecialchars($email) . "</td></tr>";
                echo "<tr><th>URL</th><td>" . htmlspecialchars($url) . "</td></tr>";
                echo "<tr><th>Sexo</th><td>" . htmlspecialchars($sexo) . "</td></tr>";
                echo "<tr><th>Convivientes</th><td>" . htmlspecialchars($convivientes) . "</td></tr>";
                echo "<tr><th>Aficiones</th><td>" . implode(", ", $aficiones) . "</td></tr>";
                echo "<tr><th>Menú Favorito</th><td>" . implode(", ", $menu) . "</td></tr>";
                echo "</table>";
                echo "<a href='003formulario_validacion.php' class='btn btn-success'>Enviar nuevos datos</a>";
            }
        }
        ?>
    </div>
</body>
</html>
