<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Subir un Archivo</h1>
        <form action="004subida.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="archivo">Selecciona un archivo:</label>
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
            <button type="submit" class="btn btn-primary">Subir</button>
        </form>
    </div>
</body>
</html>
