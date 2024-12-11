<?php
$host = 'localhost'; // Cambia esto si tu base de datos está en otro servidor
$dbname = 'PasteleriaDB';
$username = 'root'; // Cambia a tu usuario de MySQL
$password = ''; // Cambia a tu contraseña de MySQL

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
    exit;
}
?>
