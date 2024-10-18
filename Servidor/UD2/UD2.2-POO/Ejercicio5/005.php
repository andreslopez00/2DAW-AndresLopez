<?php
class Empleado {
    private static float $sueldoTope = 3333;
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
}

// Ejemplo:
try {
    $empleado1 = new Empleado("Cristian", "Cateto", 5000);
    echo $empleado1->getNombreCompleto() . " tiene un sueldo de " . $empleado1->getSueldo() . "€";
    echo $empleado1->debePagarImpuestos() ? ' y debe pagar impuestos.' : ' y no debe pagar impuestos.';
    echo "<br>";
    // para cambiar el valor del sueldo tope
    Empleado::setSueldoTope(8000);
    echo "El nuevo sueldo tope para pagar impuestos es " . Empleado::getSueldoTope() . "€";
    echo "<br>";
    echo $empleado1->getNombreCompleto() . " ahora " . ($empleado1->debePagarImpuestos() ? 'debe' : 'no debe') . " pagar impuestos con el nuevo tope.";
    
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
