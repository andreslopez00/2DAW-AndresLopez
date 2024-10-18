<?php
class EmpleadoTelefonos {
    private $nombre;
    private $apellidos;
    private $sueldo;
    private $telefonos = [];

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
            throw new Exception("El nombre no puede estar vacío.");
        }
        $this->nombre = $nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        if (empty($apellidos)) {
            throw new Exception("Los apellidos no pueden estar vacíos.");
        }
        $this->apellidos = $apellidos;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function setSueldo($sueldo) {
        if (!is_numeric($sueldo) || $sueldo < 0) {
            throw new Exception("El sueldo debe ser un número positivo.");
        }
        $this->sueldo = $sueldo;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > 3333;
    }

    public function anyadirTelefono(int $telefono): void {
        if (!is_numeric($telefono) || strlen((string)$telefono) < 7) {
            throw new Exception("El número de teléfono debe ser válido y tener al menos 7 dígitos.");
        }
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }
}

// Ejemplo:
try {
    $empleado = new EmpleadoTelefonos("Charo", "Charez", 234322);
    $empleado->anyadirTelefono(678932211);
    echo $empleado->getNombreCompleto() . " tiene los siguientes teléfonos: ";
    echo $empleado->listarTelefonos(); 
    $empleado->vaciarTelefonos();
    $empleado->anyadirTelefono(654321124);
    echo "<br>"." Teléfonos después de vaciar: " .$empleado->listarTelefonos();
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
