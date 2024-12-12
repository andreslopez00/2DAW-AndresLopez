<?php
session_start();

// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'PasteleriaDB');
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Control de login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    $stmt = $conn->prepare("SELECT id, contraseña FROM clientes WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if ($password === $user['contraseña']) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['id_cliente'] = $user['id'];
            $_SESSION['es_admin'] = ($usuario === 'admin');
            header('Location: index.php');
            exit;
        } else {
            $error = "Contraseña incorrecta.";
        }
    } else {
        $error = "Usuario no encontrado.";
    }
}

// Registro de nuevo usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registro'])) {
    $nombre = $_POST['nombre'] ?? '';
    $usuario = $_POST['nuevo_usuario'] ?? '';
    $password = $_POST['nueva_contraseña'] ?? '';

    if (empty($nombre) || empty($usuario) || empty($password)) {
        $registro_error = "Todos los campos son obligatorios.";
    } else {
        $stmt = $conn->prepare("SELECT id FROM clientes WHERE usuario = ?");
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $registro_error = "El nombre de usuario ya existe.";
        } else {
            $stmt = $conn->prepare("INSERT INTO clientes (nombre, usuario, contraseña) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nombre, $usuario, $password);
            if ($stmt->execute()) {
                $registro_exito = "Usuario registrado con éxito. Ahora puedes iniciar sesión.";
            } else {
                $registro_error = "Error al registrar el usuario.";
            }
        }
    }
}

// Obtener lista de clientes para el administrador
$clientes = [];
if (isset($_SESSION['es_admin']) && $_SESSION['es_admin']) {
    $resultado = $conn->query("SELECT nombre, usuario FROM clientes");
    if ($resultado) {
        while ($row = $resultado->fetch_assoc()) {
            $clientes[] = $row;
        }
    }
}

// Gestión de productos
if (isset($_SESSION['es_admin']) && $_SESSION['es_admin']) {
    // Añadir producto
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['añadir_producto'])) {
        $nombre = $_POST['nombre_producto'] ?? '';
        $precio = $_POST['precio_producto'] ?? 0;

        if (!empty($nombre) && $precio > 0) {
            $stmt = $conn->prepare("INSERT INTO productos (nombre, precio) VALUES (?, ?)");
            $stmt->bind_param("sd", $nombre, $precio);
            $stmt->execute();
        }
    }

    // Editar producto
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editar_producto'])) {
        $id = $_POST['id_producto'] ?? 0;
        $nombre = $_POST['nombre_producto'] ?? '';
        $precio = $_POST['precio_producto'] ?? 0;

        if ($id > 0 && !empty($nombre) && $precio > 0) {
            $stmt = $conn->prepare("UPDATE productos SET nombre = ?, precio = ? WHERE id = ?");
            $stmt->bind_param("sdi", $nombre, $precio, $id);
            $stmt->execute();
        }
    }

    // Eliminar producto
    if (isset($_GET['eliminar_producto'])) {
        $id = $_GET['eliminar_producto'];
        $stmt = $conn->prepare("DELETE FROM productos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}

// Obtener productos desde la base de datos
$productos = [];
$resultado = $conn->query("SELECT * FROM productos");
if ($resultado) {
    while ($row = $resultado->fetch_assoc()) {
        $productos[] = $row;
    }
}

// Cerrar sesión
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastelería</title>
    <link rel="stylesheet" href="css/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="js/carrito.js"></script>
</head>
<body >
<header >
    <div class="container d-flex align-items-center justify-content-center">
        <img src="img/logo.png" alt="Logo TorreWhite" class="logo" width="50" height="50">
        <h1 class="ms-3">Pastelería TorreWhite</h1>
    </div>
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
        <section id="registro" class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h2 class="mb-3">Regístrate</h2>
                <?php if (isset($registro_error)): ?>
                    <div class="alert alert-danger"><?= htmlspecialchars($registro_error); ?></div>
                <?php elseif (isset($registro_exito)): ?>
                    <div class="alert alert-success"><?= htmlspecialchars($registro_exito); ?></div>
                <?php endif; ?>
                <form method="POST" action="index.php">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nuevo_usuario" class="form-label">Usuario:</label>
                        <input type="text" id="nuevo_usuario" name="nuevo_usuario" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nueva_contraseña" class="form-label">Contraseña:</label>
                        <input type="password" id="nueva_contraseña" name="nueva_contraseña" class="form-control" required>
                    </div>
                    <button type="submit" name="registro" class="btn btn-success">Registrarse</button>
                </form>
            </div>
        </section>
    <?php else: ?>
        <?php if ($_SESSION['es_admin']): ?>
            <!-- Panel de Administración -->
            <section id="admin">
                <h2>Panel de Administración</h2>
                <!-- Gestión de Clientes -->
                <h3>Clientes Registrados</h3>
                <ul class="list-group">
                    <?php foreach ($clientes as $cliente): ?>
                        <li class="list-group-item"><?= htmlspecialchars($cliente['nombre']); ?> (<?= htmlspecialchars($cliente['usuario']); ?>)</li>
                    <?php endforeach; ?>
                </ul>

                <!-- Gestión de Productos -->
                <h3>Productos Disponibles</h3>
                <ul class="list-group mb-4">
                    <?php foreach ($productos as $producto): ?>
                        <li class="list-group-item">
                            <form method="POST" class="row g-2">
                                <div class="col-md-4">
                                    <input type="text" name="nombre_producto" class="form-control" value="<?= htmlspecialchars($producto['nombre']); ?>">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" name="precio_producto" class="form-control" value="<?= htmlspecialchars($producto['precio']); ?>" step="0.01">
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" name="editar_producto" class="btn btn-success">Guardar</button>
                                    <a href="?eliminar_producto=<?= $producto['id']; ?>" class="btn btn-danger">Eliminar</a>
                                </div>
                                <input type="hidden" name="id_producto" value="<?= $producto['id']; ?>">
                            </form>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <h3>Añadir Producto</h3>
                <form method="POST" class="row g-2">
                    <div class="col-md-4">
                        <input type="text" name="nombre_producto" class="form-control" placeholder="Nombre del producto" required>
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="precio_producto" class="form-control" placeholder="Precio" step="0.01" required>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" name="añadir_producto" class="btn btn-primary">Añadir</button>
                    </div>
                </form>
            </section>
        <?php else: ?>
            <!-- Vista de Usuario -->
            <section id="productos" class="mt-4">
    <h2>Productos</h2>
    <div class="row">
        <?php foreach ($productos as $producto): ?>
            <div class="col-md-3">
                <div class="card">
                    <!-- Mostrar imagen del producto -->
                    <?php if (!empty($producto['imagen'])): ?>
                        <img src="<?= htmlspecialchars($producto['imagen']); ?>" class="card-img-top" alt="<?= htmlspecialchars($producto['nombre']); ?>">
                    <?php else: ?>
                        <!-- Imagen predeterminada si no hay imagen -->
                        <img src="img/pasteles.jpg" class="card-img-top" alt="Imagen no disponible">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($producto['nombre']); ?></h5>
                        <p class="card-text">$<?= number_format($producto['precio'], 2); ?></p>
                        <button class="btn btn-primary" onclick="añadirAlCarrito(<?= $producto['id']; ?>, '<?= htmlspecialchars($producto['nombre']); ?>', <?= $producto['precio']; ?>)">Añadir al Carrito</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

            <section id="carrito" class="mt-5">
    <div class="card p-4 shadow-lg">
        <h2 class="card-title text-center mb-4">Carrito de Compras</h2>
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="lista-carrito">
                    <!-- Productos añadidos aparecerán aquí -->
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <p id="total" class="fs-4 fw-bold text-success">Total: $0.00</p>
            <div>
                <button id="vaciar-carrito" class="btn btn-danger btn-lg me-2">
                    <i class="fas fa-trash-alt"></i> Vaciar Carrito
                </button>
                <button id="realizar-pedido" class="btn  px-4"></button>
            </div>
        </div>
    </div>
</section>


        <?php endif; ?>
    <?php endif; ?>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>