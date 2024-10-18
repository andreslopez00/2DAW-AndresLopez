<?php
namespace Ejercicio7;
class Persona {
    protected string $nombre;
    protected string $apellidos;

    public function __construct(string $nombre, string $apellidos) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }
}
