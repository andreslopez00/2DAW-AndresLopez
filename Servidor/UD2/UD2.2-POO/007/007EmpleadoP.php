<?php
class Empleado extends Persona {
    private static float $sueldoTope = 3333;

    private array $telefonos;

    public function __construct(
        string $nombre,
        string $apellidos,
        private float $sueldo = 1000,
        array $telefonos = []
    ) {
        parent::__construct($nombre, $apellidos);
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
        return $this->sueldo > self::$sueldoTope;
    }

    public static function getSueldoTope(): float {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(float $nuevoTope): void {
        if ($nuevoTope < 0) {
            throw new Exception("El sueldo tope no puede ser negativo.");
        }
        self::$sueldoTope = $nuevoTope;
    }

    // HTML
    public static function toHtml(Empleado $emp): string {
        $telefonosHtml = "<ol>";
        foreach ($emp->getTelefonos() as $telefono) {
            $telefonosHtml .= "<li>" . htmlspecialchars($telefono) . "</li>";
        }
        $telefonosHtml .= "</ol>";

        return "
            <p>
                <a>Nombre Completo:</a> " . htmlspecialchars($emp->getNombreCompleto()) . "<br>
                <a>Sueldo:</a> " . htmlspecialchars($emp->getSueldo()) . "€<br>
                <a>Teléfonos:</a> " . $telefonosHtml . "
            </p>
        ";
    }
}