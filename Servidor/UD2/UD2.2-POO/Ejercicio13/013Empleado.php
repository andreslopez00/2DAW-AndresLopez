<?php
namespace Ejercicio13;
require_once '013Trabajador.php';
class Empleado extends Trabajador {
    private float $horasTrabajadas;
    private float $tarifaHora;
    public function __construct(string $nombre, string $apellidos, int $edad, float $horasTrabajadas, float $tarifaHora, array $telefonos = []) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->tarifaHora = $tarifaHora;
    }

    public function calcularSueldo(): float {
        return $this->horasTrabajadas * $this->tarifaHora;
    }
}
