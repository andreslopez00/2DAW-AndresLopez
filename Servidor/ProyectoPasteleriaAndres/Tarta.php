<?php

require_once 'Dulces.php';

class Tarta extends Dulce {
    private array $rellenos;
    private int $numPisos;
    private int $minNumComensales;
    private int $maxNumComensales;

    public function __construct(
        string $nombre,
        float $precio,
        array $rellenos,
        int $numPisos,
        int $minNumComensales = 2,
        int $maxNumComensales = 10
    ) {
        parent::__construct($nombre, $precio);
        $this->rellenos = $rellenos;
        $this->numPisos = $numPisos;
        $this->minNumComensales = $minNumComensales;
        $this->maxNumComensales = $maxNumComensales;
    }

    public function muestraComensalesPosibles(): void {
        if ($this->minNumComensales === $this->maxNumComensales) {
            echo "Para {$this->minNumComensales} comensales.\n";
        } else {
            echo "De {$this->minNumComensales} a {$this->maxNumComensales} comensales.\n";
        }
    }

    public function muestraResumen(): void {
        $rellenos = implode(", ", $this->rellenos);
        echo "Tarta: {$this->nombre}, Precio: {$this->precio} €, Rellenos: {$rellenos}, Pisos: {$this->numPisos}\n";
    }
}
