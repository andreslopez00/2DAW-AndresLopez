<?php

class Empleado {
    private string $nombre;
    private string $apellidos;
    private float $sueldo;

    private static float $sueldoTope = 3333;

    public function __construct(string $nombre, string $apellidos, float $sueldo = 1000) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

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

    public static function setSueldoTope(float $nuevoSueldoTope): void {
        self::$sueldoTope = $nuevoSueldoTope;
    }
}

// Ejemplo:
$empleado = new Empleado("Luis", "Fabiano", 3600);
echo $empleado->getNombreCompleto(); 
echo $empleado->debePagarImpuestos() ? ' Debe pagar impuestos' : ' No debe pagar impuestos'; 
Empleado::setSueldoTope(7200);
echo Empleado::getSueldoTope();
?>
