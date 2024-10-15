<?php

class Empleado {
    private string $nombre;
    private string $apellidos;
    private float $sueldo;

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
        return $this->sueldo > 3333;
    }
}

// Ejemplo:
$empleado = new Empleado("Andres", "López",);
echo $empleado->getNombreCompleto(); 
echo $empleado->debePagarImpuestos() ? ' Debe pagar impuestos' : ' No debe pagar impuestos'; // Debe pagar impuestos
?>
