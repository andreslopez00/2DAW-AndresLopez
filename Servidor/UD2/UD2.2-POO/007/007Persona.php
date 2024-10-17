<?php
class Persona {
    public function __construct(
        protected string $nombre,
        protected string $apellidos
    ) {}

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
