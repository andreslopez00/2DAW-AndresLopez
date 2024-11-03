<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['archivo']) && isset($_POST['anchura']) && isset($_POST['altura'])) {
        $archivo = $_FILES['archivo'];
        $anchura = filter_var($_POST['anchura'], FILTER_VALIDATE_INT);
        $altura = filter_var($_POST['altura'], FILTER_VALIDATE_INT);

        if ($anchura && $altura && $archivo['error'] == 0) {
            $nombre_archivo = basename($archivo['name']);
            $destino = "uploads/" . $nombre_archivo;

            if (move_uploaded_file($archivo['tmp_name'], $destino)) {
                echo "<div class='alert alert-success'>Archivo subido correctamente.</div>";
                echo "<p><strong>Archivo:</strong> $nombre_archivo</p>";
                echo "<p><strong>Anchura:</strong> $anchura px</p>";
                echo "<p><strong>Altura:</strong> $altura px</p>";
            } else {
                echo "<div class='alert alert-danger'>Error al mover el archivo.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Por favor, proporciona una anchura y altura válidas y selecciona un archivo válido.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Faltan datos. Por favor, completa todos los campos.</div>";
    }
}
?>
