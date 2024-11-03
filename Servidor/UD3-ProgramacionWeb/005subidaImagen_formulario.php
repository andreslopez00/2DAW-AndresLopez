<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Subir una Imagen</h1>
        <form action="005subidaImagen.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="archivo">Selecciona una imagen:</label>
                <input type="file" class="form-control" id="archivo" name="archivo" required>
            </div>
            <div class="form-group">
                <label for="anchura">Anchura:</label>
                <input type="number" class="form-control" id="anchura" name="anchura" required>
            </div>
            <div class="form-group">
                <label for="altura">Altura:</label>
                <input type="number" class="form-control" id="altura" name="altura" required>
            </div>
            <button type="submit" class="btn btn-primary">Subir Imagen</button>
        </form>
    </div>
</body>
</html>
