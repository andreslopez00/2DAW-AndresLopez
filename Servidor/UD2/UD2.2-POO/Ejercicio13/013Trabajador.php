<?php
namespace Ejercicio13;

require_once '013Persona.php';

abstract class Trabajador extends Persona {
    protected array $telefonos;

    public function __construct(string $nombre, string $apellidos, int $edad, array $telefonos = []) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->telefonos = $telefonos;
    }

    public function getTelefonos(): array {
        return $this->telefonos;
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public static function toHtml(Persona $p): string {
        if ($p instanceof Trabajador) {
            $telefonosHtml = "<ol>";
            foreach ($p->getTelefonos() as $telefono) {
                $telefonosHtml .= "<li>" . htmlspecialchars($telefono) . "</li>";
            }
            $telefonosHtml .= "</ol>";

            return "
                <p>
                    <a>Nombre Completo:</a> " . htmlspecialchars($p->getNombreCompleto()) . "<br>
                    <a>Edad:</a> " . htmlspecialchars($p->getEdad()) . " años<br>
                    <a>Teléfonos:</a> " . $telefonosHtml . "
                </p>";
        }
        return "";
    }
    public abstract function calcularSueldo(): float;
}
