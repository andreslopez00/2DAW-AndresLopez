<?php
namespace Ejercicio8;
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
    public static function toHtml(Persona $p): string {
        return "
            <p>
                <a>Nombre Completo:</a> " . htmlspecialchars($p->getNombreCompleto()) . "<br>
            </p>
        ";
    }
}
