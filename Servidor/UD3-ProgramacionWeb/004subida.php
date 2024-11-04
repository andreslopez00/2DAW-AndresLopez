<!--004subida.php: Crea un formulario que permita subir un archivo al servidor. Además
del fichero, debe pedir en el mismo formulario dos campos numéricos que soliciten la
anchura y la altura. Comprueba que tanto el fichero como los datos llegan
correctamente-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subida de Archivos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Formulario de subida de archivos</h2>
        <form action="" method="post" enctype="multipart/form-data" class="p-4 border rounded bg-white shadow-sm">
            <div class="mb-3">
                <label for="archivo" class="form-label">Selecciona un archivo</label>
                <input type="file" class="form-control" name="archivo" id="archivo" required>
            </div>

            <div class="mb-3">
                <label for="ancho" class="form-label">Anchura</label>
                <input type="number" class="form-control" name="ancho" id="ancho" required>
            </div>

            <div class="mb-3">
                <label for="alto" class="form-label">Altura</label>
                <input type="number" class="form-control" name="alto" id="alto" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Subir Archivo</button>
        </form>

        <div class="mt-4">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $archivo = $_FILES['archivo'];
                $ancho = $_POST['ancho'];
                $alto = $_POST['alto'];

                if ($archivo['error'] === UPLOAD_ERR_OK) {
                    $nombreArchivo = basename($archivo['name']);
                    $rutaDestino = __DIR__ . '/archivos/' . $nombreArchivo;

                    if (!is_dir(__DIR__ . '/archivos')) {
                        mkdir(__DIR__ . '/archivos', 0777, true);
                    }

                    if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
                        echo "<div class='alert alert-success'>Archivo subido exitosamente a 'archivos/$nombreArchivo'.</div>";
                        echo "<p>Anchura: <strong>$ancho px</strong>, Altura: <strong>$alto px</strong></p>";
                    } else {
                        echo "<div class='alert alert-danger'>Error al mover el archivo.</div>";
                    }
                } else {
                    echo "<div class='alert alert-warning'>Error en la subida del archivo. Código de error: " . $archivo['error'] . "</div>";
                }
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
