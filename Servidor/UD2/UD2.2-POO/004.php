<?php
class Empleado {
    public const SUELDO_TOPE = 3333;
    public function __construct(
        private string $nombre,
        private string $apellidos,
        private float $sueldo = 1000,
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

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > self::SUELDO_TOPE;
    }
}

// Ejemplo:
try {
    echo "El sueldo tope para pagar impuestos es " . Empleado::SUELDO_TOPE . "€.";

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
