<?php
define('EURO_A_PESETAS', 166.386);
if (isset($_POST['productos'])) {
    $productos = $_POST['productos'];
} else {
    echo "No se han recibido productos.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tique de Compra</title>
</head>
<body>
    <h1>Tique de Compra</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>Producto</th>
            <th>Precio (€)</th>
            <th>Precio (Pesetas)</th>
        </tr>
        <?php
        $totalEuros = 0;
        foreach ($productos as $producto) {
            $nombre = $producto['nombre'];
            $precioEuros = floatval($producto['precio']);
            $precioPesetas = $precioEuros * EURO_A_PESETAS;
            $totalEuros += $precioEuros;
            echo "<tr><td>$nombre</td><td>$precioEuros €</td><td>" . number_format($precioPesetas, 2) . " Pts</td></tr>";
        }
        ?>
        <tr>
            <td><strong>Total</strong></td>
            <td><strong><?php echo $totalEuros; ?> €</strong></td>
            <td><strong><?php echo number_format($totalEuros * EURO_A_PESETAS, 2); ?> Pts</strong></td>
        </tr>
    </table>
</body>
</html>

//TODO: esto no funciona y no lo entiendo.