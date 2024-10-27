<?php
class Empleado {
    private static float $sueldoTope = 3333;//TODO: esto qué hace aquí????
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
        return $this->sueldo > 3333;
    }
}

// Ejemplo:
try {
    $empleado1 = new Empleado("Oc", "Rinconero");
    echo $empleado1->getNombreCompleto() . " tiene un sueldo de " . $empleado1->getSueldo() . "€";
    echo $empleado1->debePagarImpuestos() ? ' y debe pagar impuestos.' : ' y no debe pagar impuestos.';

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
