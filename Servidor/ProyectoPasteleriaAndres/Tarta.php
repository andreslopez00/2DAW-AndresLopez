<?php

require_once 'Dulces.php';

class Tarta extends Dulce {
    private array $relleno;
    private int $numPisos;
    private int $minNumComensales;
    private int $maxNumComensales;

    public function __construct(
        string $nombre,
        float $precio,
        array $relleno,
        int $numPisos,
        int $minNumComensales = 2,
        int $maxNumComensales = 10
    ) {
        parent::__construct($nombre, $precio);
        $this->relleno = $relleno;
        $this->numPisos = $numPisos;
        $this->minNumComensales = $minNumComensales;
        $this->maxNumComensales = $maxNumComensales;
    }

    public function muestraComensalesPosibles(): void {
        if ($this->minNumComensales === $this->maxNumComensales) {
            echo "Para {$this->minNumComensales} comensales.\n";
        } elseif ($this->minNumComensales < $this->maxNumComensales) {
            echo "De {$this->minNumComensales} a {$this->maxNumComensales} comensales.\n";
        } else {
            echo "Configuración de comensales inválida.\n";
        }
    }

    public function muestraResumen(): void {
        $relleno = implode(", ", $this->relleno);
        echo "Tarta: {$this->getNombre()}, Precio: {$this->getPrecio()} €, Pisos: {$this->numPisos}, Rellenos: {$relleno}, IVA: " . self::getIVA() . "%\n";
    }
}
