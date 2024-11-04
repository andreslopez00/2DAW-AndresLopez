<!--003validacion.php: A partir del formulario anterior, introduce validaciones en HTML
mediante el atributo required de los campos (uso los tipos adecuados para cada
campo), y en comprueba los tipos de los datos y que cumplen los valores esperados
(por ejemplo, en los checkboxes que los valores recogidos forman parte de todos los
posibles). Puedes probar a pasarle datos erróneos vía URL y comprobar su
comportamiento. Tip: Investiga el uso de la función filter_var.
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para validación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Formulario de registro con validación</h1>
        
        <form action="003validacion.php" method="post">
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
    </div>
</body>
</html>
