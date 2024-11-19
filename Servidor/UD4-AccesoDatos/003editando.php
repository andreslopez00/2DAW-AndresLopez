<?php
require_once('conexion.php');

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID de campeón no proporcionado.");
}

$id = (int)$_GET['id'];

$query = "SELECT * FROM champ WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("No se encontró el campeón con el ID proporcionado.");
}

$champion = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $rol = $_POST['rol'] ?? '';
    $difficulty = $_POST['difficulty'] ?? '';
    $description = $_POST['description'] ?? '';

    if (empty($name) || empty($rol) || empty($difficulty) || empty($description)) {
        $error = "Todos los campos son obligatorios.";
    } elseif (!is_numeric($difficulty) || $difficulty < 1 || $difficulty > 10) {
        $error = "La dificultad debe ser un número entre 1 y 10.";
    } else {
        $updateQuery = "UPDATE champ SET name = ?, rol = ?, difficulty = ?, description = ? WHERE id = ?";
        $updateStmt = $conn->prepare($updateQuery);
        $updateStmt->bind_param("ssisi", $name, $rol, $difficulty, $description, $id);

        if ($updateStmt->execute()) {
            header("Location: 002campeones.php?message=updated");
            exit;
        } else {
            $error = "Error al actualizar los datos: " . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Campeón</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1>Editar Campeón</h1>
    
    <?php if (isset($error)): ?>
        <div class="alert alert-danger">
            <?= htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($champion['name']) ?>" required>
            <div class="invalid-feedback">Por favor, ingresa el nombre del campeón.</div>
        </div>
        <div class="mb-3">
            <label for="rol" class="form-label">Rol</label>
            <input type="text" class="form-control" id="rol" name="rol" value="<?= htmlspecialchars($champion['rol']) ?>" required>
            <div class="invalid-feedback">Por favor, ingresa el rol del campeón.</div>
        </div>
        <div class="mb-3">
            <label for="difficulty" class="form-label">Dificultad</label>
            <input type="number" class="form-control" id="difficulty" name="difficulty" value="<?= htmlspecialchars($champion['difficulty']) ?>" required>
            <div class="invalid-feedback">Por favor, ingresa la dificultad del campeón (1-10).</div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?= htmlspecialchars($champion['description']) ?></textarea>
            <div class="invalid-feedback">Por favor, ingresa una descripción para el campeón.</div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="002campeones.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<script>
    (function () {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
</body>
</html>
