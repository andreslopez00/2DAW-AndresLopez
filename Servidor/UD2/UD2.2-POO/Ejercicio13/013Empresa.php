<?php
namespace Ejercicio13;
require_once '013Empleado.php';
require_once '013Gerente.php';
class Empresa {
    private string $nombre;
    private string $direccion;
    private array $trabajadores;

    public function __construct(string $nombre, string $direccion) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->trabajadores = [];
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getDireccion(): string {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): void {
        $this->direccion = $direccion;
    }

    // Método para añadir un trabajador
    public function anyadirTrabajador(Trabajador $t): void {
        $this->trabajadores[] = $t;
    }

    public function listarTrabajadoresHtml(): string {
        $html = "<h2>Lista de Trabajadores</h2>";
        foreach ($this->trabajadores as $trabajador) {
            $html .= Trabajador::toHtml($trabajador) . "<hr>";
        }
        return $html;
    }

    // calcular el coste total de las nóminas
    public function getCosteNominas(): float {
        $costeTotal = 0.0;
        foreach ($this->trabajadores as $trabajador) {
            $costeTotal += $trabajador->calcularSueldo();
        }
        return $costeTotal;
    }

    public function __toString(): string {
        return "Empresa: " . $this->getNombre() . "\n" .
               "Dirección: " . $this->getDireccion() . "\n" .
               "Total Trabajadores: " . count($this->trabajadores) . "\n" .
               "Coste total de nóminas: " . $this->getCosteNominas() . "€\n";
    }
}
