<?php

require_once 'Dulces.php';

class Bollo extends Dulce {
    private string $relleno;

    public function __construct(string $nombre, float $precio, string $relleno) {
        parent::__construct($nombre, $precio);
        $this->relleno = $relleno;
    }

    public function muestraResumen(): void {
        echo "Bollo: {$this->nombre}, Precio: {$this->precio} €, Relleno: {$this->relleno}\n";
    }
}
