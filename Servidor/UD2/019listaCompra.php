<?php
define('EURO_A_PESETAS', 166.386);
if (isset($_POST['productos'])) {
    $productos = $_POST['productos'];
} else {
    echo "No se han recibido productos.";
    exit;
}
include 'header.php'; 
?>
<h2>Lista de la compra</h2>
<ul>
    <?php
    $totalEuros = 0;
    foreach ($productos as $producto) {
        $nombre = $producto['nombre'];
        $precioEuros = floatval($producto['precio']);
        $precioPesetas = $precioEuros * EURO_A_PESETAS;
        $totalEuros += $precioEuros;
        echo "<li>$nombre: $precioEuros € (" . number_format($precioPesetas, 2) . " Pts)</li>";
    }
    ?>
</ul>
<p><strong>Total en euros:</strong> <?php echo $totalEuros; ?> €</p>
<p><strong>Total en pesetas:</strong> <?php echo number_format($totalEuros * EURO_A_PESETAS, 2); ?> Pts</p>
<?php include 'footer.php'; ?>

//TODO: esto no funciona y no lo entiendo.