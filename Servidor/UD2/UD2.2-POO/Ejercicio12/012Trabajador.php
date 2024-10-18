<?php
namespace Ejercicio12;

abstract class Trabajador {
    protected string $nombre;
    protected string $apellidos;
    protected int $edad;
    protected array $telefonos;

    public function __construct(string $nombre, string $apellidos, int $edad, array $telefonos = []) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->telefonos = $telefonos;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function getTelefonos(): array {
        return $this->telefonos;
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    // Método abstracto
    public abstract function calcularSueldo(): float;

    // Método abstracto para representación en HTML
    public abstract static function toHtml(Trabajador $t): string;

    public function __toString(): string {
        return "Nombre Completo: " . $this->getNombreCompleto() . "\n" .
               "Edad: " . $this->getEdad() . " años\n";
    }
}
