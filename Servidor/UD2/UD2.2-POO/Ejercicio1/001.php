<?php
class Empleado {
    private string $nombre;
    private string $apellidos;
    private float $sueldo;

    public function __construct($nombre, $apellidos, $sueldo) {
        $this->setNombre($nombre);
        $this->setApellidos($apellidos);
        $this->setSueldo($sueldo);
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        if (empty($nombre)) {
            throw new InvalidArgumentException("El nombre no puede estar vacío.");  //excepcion para verificar que no esté vacio
        }
        $this->nombre = $nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        if (empty($apellidos)) {
            throw new Exception("Los apellidos no pueden estar vacíos."); //excepcion para verificar que no esté vacio
        }
        $this->apellidos = $apellidos;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function setSueldo($sueldo) {
        if (!is_numeric($sueldo) || $sueldo < 0) {
            throw new Exception("El sueldo debe ser un número positivo."); //excepcion para verificar que sea un número positivo
        }
        $this->sueldo = $sueldo;
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
    $empleado = new Empleado("Manolo", "Manolez", 876);
    echo $empleado->getNombreCompleto(); 
    echo $empleado->debePagarImpuestos() ? ' debe pagar impuestos' : ' no debe pagar impuestos';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
