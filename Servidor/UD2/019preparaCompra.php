<?php
// Comprobamos via URL http://localhost/Actividad2.0PHP/019preparaCompra.php?cantidad=4
if (isset($_GET['cantidad'])) {
    $cantidad = intval($_GET['cantidad']);
} else {
    echo "Por favor, ingrese la cantidad de productos.";
    exit;
}
include 'header.php'; 
?>
<h2>Ingrese los productos</h2>
<form action="019listaCompra.php" method="post">
    <?php for ($i = 1; $i <= $cantidad; $i++): ?>
        Producto <?php echo $i; ?>: 
        <input type="text" name="productos[<?php echo $i; ?>][nombre]" placeholder="Nombre" required>
        Precio (€): 
        <input type="number" name="productos[<?php echo $i; ?>][precio]" step="0.01" required>
        <br><br>
    <?php endfor; ?>
    <input type="submit" value="Enviar">
</form>
<?php include 'footer.php'; ?>