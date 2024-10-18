<?php
namespace Ejercicio12;

require_once '012Trabajador.php';

class Gerente extends Trabajador {
    private float $salarioBase;

    public function __construct(string $nombre, string $apellidos, int $edad, float $salarioBase, array $telefonos = []) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
        $this->salarioBase = $salarioBase;
    }

    // Implementación del método abstracto
    public function calcularSueldo(): float {
        return $this->salarioBase + ($this->salarioBase * $this->edad / 100);
    }

    public static function toHtml(Trabajador $t): string {
        if ($t instanceof Gerente) {
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
