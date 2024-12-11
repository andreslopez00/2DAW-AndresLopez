<?php

require_once 'Dulce.php';

class Cliente {
    private string $nombre;
    private string $usuario;
    private string $contraseña;
    private int $numPedidosEfectuados;
    private array $dulcesComprados;

    public function __construct(string $nombre, string $usuario, string $contraseña, int $numPedidosEfectuados = 0) {
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->contraseña = password_hash($contraseña, PASSWORD_DEFAULT);
        $this->numPedidosEfectuados = $numPedidosEfectuados;
        $this->dulcesComprados = [];
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getUsuario(): string {
        return $this->usuario;
    }

    public function verifyPassword(string $contraseña): bool {
        return password_verify($contraseña, $this->contraseña);
    }

    public function getNumPedidosEfectuados(): int {
        return $this->numPedidosEfectuados;
    }

    public function incrementarPedidos(): void {
        $this->numPedidosEfectuados++;
    }

    public function getDulcesComprados(): array {
        return $this->dulcesComprados;
    }

    public function comprarDulce(Dulce $dulce): void {
        $this->dulcesComprados[] = $dulce;
        $this->incrementarPedidos();
    }
}
