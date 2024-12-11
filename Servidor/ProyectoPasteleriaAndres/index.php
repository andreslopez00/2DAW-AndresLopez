<?php
session_start();

// Usuarios disponibles
$usuarios = [
    'admin' => 'admin',
    'usuario' => 'usuario',
];

// Control de login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $password) {
        $_SESSION['usuario'] = $usuario;
        if ($usuario === 'admin') {
            $_SESSION['es_admin'] = true;
        } else {
            $_SESSION['es_admin'] = false;
        }
        header('Location: index.php');
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}

// Cerrar sesión
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}

// Lista de productos
$productos = [
    ['id' => 1, 'nombre' => 'Tarta de Chocolate', 'precio' => 15.99],
    ['id' => 2, 'nombre' => 'Bollo de Crema', 'precio' => 3.99],
    ['id' => 3, 'nombre' => 'Chocolate con Avellanas', 'precio' => 6.99],
    ['id' => 4, 'nombre' => 'Dulce de Leche', 'precio' => 4.50],
];

// Página principal
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastelería</title>
    <link rel="stylesheet" href="styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="carrito.js"></script>
</head>
<body>
<header class="bg-primary text-white py-3">
    <div class="container">
        <h1 class="h3">Pastelería Online</h1>
        <?php if (isset($_SESSION['usuario'])): ?>
            <p>Bienvenido, <?= htmlspecialchars($_SESSION['usuario']); ?> | 
                <a href="?logout=1" class="text-white">Cerrar sesión</a>
            </p>
        <?php else: ?>
            <p><a href="#login" class="text-white">Iniciar sesión</a></p>
        <?php endif; ?>
    </div>
</header>

<main class="container my-4">
    <?php if (!isset($_SESSION['usuario'])): ?>
        <!-- Formulario de Login -->
        <section id="login" class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h2 class="mb-3">Inicia Sesión</h2>
                <?php if (isset($error)): ?>
                    <div class="alert alert-danger"><?= htmlspecialchars($error); ?></div>
                <?php endif; ?>
                <form method="POST" action="index.php">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario:</label>
                        <input type="text" id="usuario" name="usuario" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Ingresar</button>
                </form>
            </div>
        </section>
    
    <?php else: ?>
        <?php if ($_SESSION['es_admin']): ?>
            <!-- Vista de Administrador -->
            <section id="admin">
                <h2>Panel de Administración</h2>
                <h3>Clientes Registrados</h3>
                <ul class="list-group">
                    <li class="list-group-item">Cliente: admin, Usuario: admin</li>
                    <li class="list-group-item">Cliente: usuario, Usuario: usuario</li>
                </ul>
                <h3>Productos Disponibles</h3>
                <ul class="list-group">
                    <?php foreach ($productos as $producto): ?>
                        <li class="list-group-item"><?= htmlspecialchars($producto['nombre']); ?> - $<?= number_format($producto['precio'], 2); ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>
        <?php else: ?>
            <!-- Vista de Usuario -->
            <section id="productos" class="mt-4">
                <h2>Productos</h2>
                <div id="lista-productos" class="row">
                    <!-- Los productos se cargarán dinámicamente -->
                </div>
            </section>
            <section id="carrito" class="mt-4">
                <h2>Carrito de Compras</h2>
                <ul id="lista-carrito" class="list-group">
                    <!-- Los productos añadidos aparecerán aquí -->
                </ul>
                <p id="total" class="mt-3">Total: $0</p>
                <button id="vaciar-carrito" class="btn btn-danger">Vaciar Carrito</button>
            </section>
        <?php endif; ?>
    <?php endif; ?>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
