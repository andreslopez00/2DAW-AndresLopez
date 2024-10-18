<?php
namespace Ejercicio11;
require_once '011PersonaA.php';
class Empleado extends Persona {
    private float $sueldo;
    private array $telefonos;
    private static float $sueldoTope = 3333;

    public function __construct(string $nombre, string $apellidos, int $edad, float $sueldo = 1000, array $telefonos = []) {
        parent::__construct($nombre, $apellidos, $edad); 
        $this->sueldo = $sueldo;
        $this->telefonos = $telefonos;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }

    public function getTelefonos(): array {
        return $this->telefonos;
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function debePagarImpuestos(): bool {
        return $this->edad > 21 && $this->sueldo > self::$sueldoTope;
    }

    public static function setSueldoTope(float $nuevoTope): void {
        if ($nuevoTope < 0) {
            throw new Exception("El sueldo tope no puede ser negativo.");
        }
        self::$sueldoTope = $nuevoTope;
    }

    public static function getSueldoTope(): float {
        return self::$sueldoTope;
    }

    public static function toHtml(Persona $p): string {
        if ($p instanceof Empleado) {
            $telefonosHtml = "<ol>";
            foreach ($p->getTelefonos() as $telefono) {
                $telefonosHtml .= "<li>" . htmlspecialchars($telefono) . "</li>";
            }
            $telefonosHtml .= "</ol>";

            return "
                <p>
                    <strong>Nombre Completo:</strong> " . htmlspecialchars($p->getNombreCompleto()) . "<br>
                    <strong>Edad:</strong> " . htmlspecialchars($p->getEdad()) . " años<br>
                    <strong>Sueldo:</strong> " . htmlspecialchars($p->getSueldo()) . "€<br>
                    <strong>Teléfonos:</strong> " . $telefonosHtml . "
                </p>
            ";
        } else {
            return Persona::toHtml($p);
        }
    }

    public function __toString(): string {
        $telefonosStr = implode(", ", $this->telefonos);
        return parent::__toString() . 
               "Sueldo: " . $this->getSueldo() . "€\n" .
               "Teléfonos: " . $telefonosStr . "\n" .
               ($this->debePagarImpuestos() ? "Debe pagar impuestos\n" : "No debe pagar impuestos\n");
    }
}