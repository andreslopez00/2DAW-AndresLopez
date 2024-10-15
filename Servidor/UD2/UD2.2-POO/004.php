<?php

class Empleado {
    private string $nombre;
    private string $apellidos;
    private float $sueldo;

    const SUELDO_TOPE = 3333;

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
        return $this->sueldo > self::SUELDO_TOPE;
    }
}

// Ejemplo:
$empleado = new Empleado("Matito", "Utrerano", 4000);
echo $empleado->getNombreCompleto(); 
echo $empleado->debePagarImpuestos() ? ' Debe pagar impuestos' : ' No debe pagar impuestos'; 
?>
