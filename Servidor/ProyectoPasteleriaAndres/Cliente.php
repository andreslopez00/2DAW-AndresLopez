<?php

require_once 'DulceNoCompradoException.php';
require_once 'DulceNoEncontradoException.php';

class Cliente {
    private string $nombre;
    private string $numero;
    private int $numPedidosEfectuados;
    private array $dulcesComprados;

    public function __construct(string $nombre, string $numero, int $numPedidosEfectuados = 0) {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->numPedidosEfectuados = $numPedidosEfectuados;
        $this->dulcesComprados = [];
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getNumPedidosEfectuados(): int {
        return $this->numPedidosEfectuados;
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
        if ($this->listaDeDulces($d)) {
            throw new DulceNoEncontradoException("El dulce ya está en la lista de compras.");
        }
        $this->numPedidosEfectuados++;
        $this->dulcesComprados[] = $d;
        echo "Dulce comprado con éxito.\n";
        return true;
    }

    public function valorar(Dulce $d, string $comentario): void {
        if (!$this->listaDeDulces($d)) {
            throw new DulceNoCompradoException("No puedes valorar un dulce que no has comprado.");
        }
        echo "Has valorado el dulce '{$d->getNombre()}' con el comentario: $comentario\n";
    }

    public function listarPedidos(): void {
        echo "Total de pedidos: {$this->numPedidosEfectuados}\n";
        foreach ($this->dulcesComprados as $dulce) {
            echo "- {$dulce->getNombre()}\n";
        }
    }
}
