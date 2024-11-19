<?php
require_once('conexion.php');

$id = intval($_GET['id'] ?? 0);

$query = "DELETE FROM champ WHERE id = $id";
if ($conn->query($query)) {
    header("Location: 002campeones.php");
    exit;
} else {
    echo "Error al borrar: " . $conn->error;
}
?>
