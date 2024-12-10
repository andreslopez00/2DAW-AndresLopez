<?php

require_once 'ClienteNoEncontradoException.php';

class Pasteleria {
    private array $productos; // Array de Dulces
    private array $clientes;  // Array de Clientes

    public function __construct() {
        $this->productos = [];
        $this->clientes = [];
    }

    public function incluirProducto(Dulce $d): void {
        $this->productos[] = $d;
        echo "Producto incluido en el catálogo: {$d->getNombre()}\n";
    }

    public function incluirCliente(Cliente $c): void {
        $this->clientes[] = $c;
        echo "Cliente incluido: {$c->getNombre()}\n";
    }

    public function gestionarCompra(string $nombreCliente, Dulce $d): void {
        try {
            $cliente = $this->buscarCliente($nombreCliente);
            $cliente->comprar($d);
        } catch (ClienteNoEncontradoException $e) {
            echo "Error: Cliente no encontrado. {$e->getMessage()}\n";
        } catch (DulceNoEncontradoException $e) {
            echo "Error: {$e->getMessage()}\n";
        }
    }

    private function buscarCliente(string $nombreCliente): Cliente {
        foreach ($this->clientes as $cliente) {
            if ($cliente->getNombre() === $nombreCliente) {
                return $cliente;
            }
        }
        throw new ClienteNoEncontradoException("No se encontró un cliente con el nombre '$nombreCliente'.");
    }
}
