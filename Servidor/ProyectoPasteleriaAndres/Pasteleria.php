<?php

require_once 'Dulces.php';
require_once 'Cliente.php';

class Pasteleria {
    private array $productos = [];
    private array $clientes = [];

    // Métodos
    public function incluirProducto(Dulce $d): void {
        $this->productos[] = $d;
        echo "El producto '{$d->getNombre()}' ha sido añadido a la pastelería.\n";
    }

    public function registrarCliente(Cliente $c): void {
        $this->clientes[] = $c;
        echo "El cliente '{$c->getNombre()}' ha sido registrado en la pastelería.\n";
    }

    public function listarProductos(): void {
        echo "Productos disponibles en la pastelería:\n";
        foreach ($this->productos as $producto) {
            echo "- {$producto->getNombre()} (Precio: {$producto->getPrecio()} €)\n";
        }
    }

    public function listarClientes(): void {
        echo "Clientes registrados en la pastelería:\n";
        foreach ($this->clientes as $cliente) {
            echo "- {$cliente->getNombre()} (Pedidos: {$cliente->getNumPedidosEfectuados()})\n";
        }
    }
}
