<?php
namespace Ejercicio12;

require_once '012Trabajador.php';

class Empleado extends Trabajador {
    private int $horasTrabajadas;
    private float $sueldoPorHora;

    public function __construct(string $nombre, string $apellidos, int $edad, int $horasTrabajadas, float $sueldoPorHora, array $telefonos = []) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->sueldoPorHora = $sueldoPorHora;
    }

    public function calcularSueldo(): float {
        return $this->horasTrabajadas * $this->sueldoPorHora;
    }

    public static function toHtml(Trabajador $t): string {
        if ($t instanceof Empleado) {
            $telefonosHtml = "<ol>";
            foreach ($t->getTelefonos() as $telefono) {
                $telefonosHtml .= "<li>" . htmlspecialchars($telefono) . "</li>";
            }
            $telefonosHtml .= "</ol>";

            return "
                <p>
                    <a>Nombre Completo:</a> " . htmlspecialchars($t->getNombreCompleto()) . "<br>
                    <a>Edad:</a> " . htmlspecialchars($t->getEdad()) . " años<br>
                    <a>Sueldo:</a> " . htmlspecialchars($t->calcularSueldo()) . "€<br>
                    <a>Teléfonos:</a> " . $telefonosHtml . "
                </p>
            ";
        }
    }
}
