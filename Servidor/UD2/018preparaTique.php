<?php
// Comprobamos via URL http://localhost/Actividad2.0PHP/018preparaTique.php?cantidad=5
if (isset($_GET['cantidad'])) {
    $cantidad = intval($_GET['cantidad']);
} else {
    echo "Por favor, ingrese la cantidad de productos.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Preparar Tique</title>
</head>
<body>
    <h1>Ingrese los productos</h1>
    <form action="018imprimeTique.php" method="post">
        <?php for ($i = 1; $i <= $cantidad; $i++): ?>
            Producto <?php echo $i; ?>: 
            <input type="text" name="productos[<?php echo $i; ?>][nombre]" placeholder="Nombre" required>
            Precio (€): 
            <input type="number" name="productos[<?php echo $i; ?>][precio]" step="0.01" required>
            <br><br>
        <?php endfor; ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
//TODO: esto no funciona y no lo entiendo.
