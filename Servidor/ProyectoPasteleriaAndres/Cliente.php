<?php

require_once 'Dulces.php';

class Cliente {
    private string $nombre;
    private string $numero;
    private int $numPedidosEfectuados;
    private array $dulcesComprados = [];

    public function __construct(string $nombre, string $numero, int $numPedidosEfectuados = 0) {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->numPedidosEfectuados = $numPedidosEfectuados;
    }

    // Getters
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getNumero(): string {
        return $this->numero;
    }

    public function getNumPedidosEfectuados(): int {
        return $this->numPedidosEfectuados;
    }

    // Setters
    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setNumero(string $numero): void {
        $this->numero = $numero;
    }

    // Métodos
    public function muestraResumen(): void {
        echo "Cliente: {$this->nombre}, Pedidos efectuados: {$this->numPedidosEfectuados}\n";
    }

    public function listaDeDulces(Dulce $d): bool {
        foreach ($this->dulcesComprados as $dulce) {
            if ($dulce === $d) {
                return true;
            }
        }
        return false;
    }

    public function comprar(Dulce $d): bool {
        $this->dulcesComprados[] = $d;
        $this->numPedidosEfectuados++;
        echo "El dulce '{$d->getNombre()}' ha sido comprado correctamente.\n";
        return true;
    }

    public function valorar(Dulce $d, string $comentario): void {
        if ($this->listaDeDulces($d)) {
            echo "Comentario sobre '{$d->getNombre()}': {$comentario}\n";
        } else {
            echo "No se puede valorar el dulce '{$d->getNombre()}' porque no ha sido comprado.\n";
        }
    }

    public function listarPedidos(): void {
        echo "El cliente '{$this->nombre}' ha realizado {$this->numPedidosEfectuados} pedidos:\n";
        foreach ($this->dulcesComprados as $dulce) {
            echo "- {$dulce->getNombre()}\n";
        }
    }
}
