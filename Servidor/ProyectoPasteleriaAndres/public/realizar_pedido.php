<?php
// Configuración de la base de datos
include 'config.php';

// Leer los datos enviados desde el frontend
$data = json_decode(file_get_contents('php://input'), true);

if (!$data || !isset($data['clienteId']) || !isset($data['productos'])) {
    http_response_code(400);
    echo json_encode(['message' => 'Datos inválidos.']);
    exit;
}

$clienteId = $data['clienteId'];
$productos = $data['productos'];

try {
    // Insertar cada producto como parte del pedido
    $conn->beginTransaction();

    foreach ($productos as $producto) {
        $stmt = $conn->prepare("INSERT INTO pedidos (cliente_id, producto_id, cantidad) VALUES (?, ?, ?)");
        $stmt->execute([$clienteId, $producto['id'], 1]); // La cantidad es fija en este ejemplo
    }

    $conn->commit();
    echo json_encode(['message' => 'Pedido realizado con éxito.']);
} catch (Exception $e) {
    $conn->rollBack();
    http_response_code(500);
    echo json_encode(['message' => 'Error al procesar el pedido.', 'error' => $e->getMessage()]);
}
?>
