<?php
class Empleado {
    private static float $sueldoTope = 3333;
    public function __construct(
        private string $nombre,
        private string $apellidos,
        private float $sueldo = 1000,
        private array $telefonos = [] 
    ) {}

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
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

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
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
                <a>Nombre:</a> " . htmlspecialchars($emp->getNombreCompleto()) . "<br>
                <a>Sueldo:</a> " . htmlspecialchars($emp->getSueldo()) . "€<br>
                <a>Teléfonos:</a> " . $telefonosHtml . "
            </p>
        ";
    }
}
// Ejemplo:
try {
    $empleado = new Empleado("Ana", "Martínez", 3450, [654236655, 678905512]);
    echo Empleado::toHtml($empleado);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
