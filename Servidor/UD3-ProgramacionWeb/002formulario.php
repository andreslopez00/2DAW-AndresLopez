<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Formulario de registro</h1>
        
        <form action="002formulario.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre y Apellidos</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="url">URL página personal</label>
                <input type="url" class="form-control" id="url" name="url">
            </div>
            <div class="form-group">
                <label>Sexo</label><br>
                <input type="radio" id="hombre" name="sexo" value="Hombre" required> Hombre
                <input type="radio" id="mujer" name="sexo" value="Mujer" required> Mujer
            </div>
            <div class="form-group">
                <label for="convivientes">Número de convivientes en el domicilio</label>
                <input type="number" class="form-control" id="convivientes" name="convivientes" required>
            </div>
            <div class="form-group">
                <label>Aficiones</label><br>
                <input type="checkbox" name="aficiones[]" value="Futbol"> Futbol
                <input type="checkbox" name="aficiones[]" value="Videojuegos"> Videojuegos
                <input type="checkbox" name="aficiones[]" value="Peliculas"> Peliculas
                <input type="checkbox" name="aficiones[]" value="Series"> Series
            </div>
            <div class="form-group">
                <label for="menu">Menú favorito</label>
                <select multiple class="form-control" name="menu[]" id="menu" required>
                    <option value="Kebab">Kebab</option>
                    <option value="Puchero">Puchero</option>
                    <option value="Burger King">Burger King</option>
                    <option value="Pizza">Pizza</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <h2 class="mt-5">Resumen de Datos</h2>
            <table class="table table-bordered">
                <tr><th>Nombre</th><td><?= htmlspecialchars($_POST['nombre']) ?></td></tr>
                <tr><th>Email</th><td><?= htmlspecialchars($_POST['email']) ?></td></tr>
                <tr><th>URL</th><td><?= htmlspecialchars($_POST['url']) ?></td></tr>
                <tr><th>Sexo</th><td><?= htmlspecialchars($_POST['sexo']) ?></td></tr>
                <tr><th>Convivientes</th><td><?= htmlspecialchars($_POST['convivientes']) ?></td></tr>
                <tr><th>Aficiones</th><td><?= implode(', ', $_POST['aficiones']) ?></td></tr>
                <tr><th>Menú Favorito</th><td><?= implode(', ', $_POST['menu']) ?></td></tr>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>
