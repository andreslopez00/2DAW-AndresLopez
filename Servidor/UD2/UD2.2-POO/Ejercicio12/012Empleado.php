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

    // Implementación del método abstracto
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
                    <strong>Nombre Completo:</strong> " . htmlspecialchars($t->getNombreCompleto()) . "<br>
                    <strong>Edad:</strong> " . htmlspecialchars($t->getEdad()) . " años<br>
                    <strong>Sueldo:</strong> " . htmlspecialchars($t->calcularSueldo()) . "€<br>
                    <strong>Teléfonos:</strong> " . $telefonosHtml . "
                </p>
            ";
        }
    }
}
