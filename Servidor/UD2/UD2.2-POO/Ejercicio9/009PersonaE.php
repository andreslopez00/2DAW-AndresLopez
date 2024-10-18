<?php
namespace Ejercicio9;
class Persona {
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
            throw new Exception("Debe de ser un numero positivo");
        }
        $this->edad = $edad;
    }

    public static function toHtml(Persona $p): string {
        return "
            <p>
                <a>Nombre Completo:</a> " . htmlspecialchars($p->getNombreCompleto()) . "<br>
                <a>Edad:</a> " . htmlspecialchars($p->getEdad()) . " años<br>
            </p>
        ";
    }
}
