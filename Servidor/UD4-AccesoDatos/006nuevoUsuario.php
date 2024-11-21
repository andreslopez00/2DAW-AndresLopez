<?php
require_once('conexionPDO.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Acceso no permitido.");
}

$name = $_POST['name'] ?? '';
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$email = $_POST['email'] ?? '';

if (empty($name) || empty($username) || empty($password) || empty($email)) {
    die("Todos los campos son obligatorios.");
}

try {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user (name, username, password, email) VALUES (:name, :username, :password, :email)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        echo "El usuario <strong>" . htmlspecialchars($username) . "</strong> ha sido introducido en el sistema con la contraseña <strong>" . htmlspecialchars($password) . "</strong>.";
    } else {
        echo "Hubo un error al registrar el usuario.";
    }
} catch (PDOException $e) {
    if ($e->getCode() === '23000') {
        echo "El nombre de usuario o correo electrónico ya está en uso.";
    } else {
        echo "Error: " . $e->getMessage();
    }
}
?>