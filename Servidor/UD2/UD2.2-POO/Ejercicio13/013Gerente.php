<?php
namespace Ejercicio13;

require_once '013Trabajador.php';

class Gerente extends Trabajador {
    private float $salarioBase;

    public function __construct(string $nombre, string $apellidos, int $edad, float $salarioBase, array $telefonos = []) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->salarioBase = $salarioBase;
    }

    public function calcularSueldo(): float {
        return $this->salarioBase + ($this->salarioBase * $this->edad / 100);
    }
}
