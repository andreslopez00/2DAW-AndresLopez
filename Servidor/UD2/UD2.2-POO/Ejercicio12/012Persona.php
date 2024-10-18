<?php
namespace Ejercicio12;

abstract class Persona {
    protected string $nombre;
    protected string $apellidos;
    protected int $edad;

    public function __construct(string $nombre, string $apellidos, int $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function setEdad(int $edad): void {
        if ($edad < 0) {
            throw new \InvalidArgumentException("La edad no puede ser negativa.");
        }
        $this->edad = $edad;
    }

    public function __toString(): string {
        return "Nombre Completo: " . $this->getNombreCompleto() . "\n" .
               "Edad: " . $this->getEdad() . " años\n";
    }

    // Método abstracto que deberá ser implementado por las clases que heredan
    public abstract static function toHtml(Persona $p): string;
}
