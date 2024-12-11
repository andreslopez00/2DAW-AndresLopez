<?php
session_start();

$usuariosValidos = [
    'admin' => 'admin',
    'usuario' => 'usuario'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    if (isset($usuariosValidos[$usuario]) && $usuariosValidos[$usuario] === $contraseña) {
        $_SESSION['usuario'] = $usuario;

        if ($usuario === 'admin') {
            // Cargar datos ficticios para el administrador
            $_SESSION['clientes'] = [
                new Cliente('Juan', 'juan', '1234'),
                new Cliente('Maria', 'maria', '5678'),
            ];
            $_SESSION['dulces'] = [
                new Bollo('Bollo de crema', 2.5, 'Crema'),
                new Chocolate('Tableta de chocolate', 3.0, 70, 200),
                new Tarta('Tarta de boda', 50.0, ['Chocolate', 'Frutas'], 2, 10),
            ];
            header('Location: mainAdmin.php');
        } else {
            header('Location: main.php');
        }
    } else {
        $_SESSION['error'] = 'Usuario o contraseña incorrectos.';
        header('Location: index.php');
    }
    exit;
}
