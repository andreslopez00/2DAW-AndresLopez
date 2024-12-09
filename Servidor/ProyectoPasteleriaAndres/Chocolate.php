<?php

require_once 'Dulces.php';

class Chocolate extends Dulce {
    private float $porcentajeCacao;
    private float $peso;

    public function __construct(string $nombre, float $precio, float $porcentajeCacao, float $peso) {
        parent::__construct($nombre, $precio);
        $this->porcentajeCacao = $porcentajeCacao;
        $this->peso = $peso;
    }

    public function muestraResumen(): void {
        echo "Chocolate: {$this->getNombre()}, Precio: {$this->getPrecio()} €, Porcentaje de Cacao: {$this->porcentajeCacao}%, Peso: {$this->peso} g, IVA: " . self::getIVA() . "%\n";
    }
}
