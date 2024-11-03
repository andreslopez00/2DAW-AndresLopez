<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['archivo']) && isset($_POST['anchura']) && isset($_POST['altura'])) {
        $archivo = $_FILES['archivo'];
        $anchura = filter_var($_POST['anchura'], FILTER_VALIDATE_INT);
        $altura = filter_var($_POST['altura'], FILTER_VALIDATE_INT);
        $tipo_archivo = mime_content_type($archivo['tmp_name']);
        $tipos_permitidos = ['image/jpeg', 'image/png', 'image/gif'];

        if ($anchura && $altura && $archivo['error'] == 0 && in_array($tipo_archivo, $tipos_permitidos)) {
            $nombre_archivo = basename($archivo['name']);
            $destino = "uploads/" . $nombre_archivo;

            if (move_uploaded_file($archivo['tmp_name'], $destino)) {
                echo "<div class='alert alert-success'>Imagen subida correctamente.</div>";
                echo "<p><strong>Imagen:</strong> $nombre_archivo</p>";
                echo "<p><strong>Dimensiones:</strong> $anchura px x $altura px</p>";
                echo "<img src='$destino' width='$anchura' height='$altura' class='img-thumbnail mt-3'>";
            } else {
                echo "<div class='alert alert-danger'>Error al mover la imagen.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>El archivo debe ser una imagen en formato JPEG, PNG o GIF y tener dimensiones válidas.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Faltan datos. Por favor, completa todos los campos.</div>";
    }
}
?>
