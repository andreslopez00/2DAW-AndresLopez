<?php
$conn = new mysqli('localhost', 'root', '', 'lol');
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
