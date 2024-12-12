<?php

interface Resumible {
    public function muestraResumen(): void;
}

/**
 * Clase abstracta Dulce.
 * 
 * - Al hacer `Dulce` abstracta, evitamos que se puedan instanciar objetos directamente de esta clase,
 *   ya que solo tiene sentido instanciar sus clases hijas (Bollo, Chocolate, Tarta).
 * - Esto refuerza la idea de que `Dulce` es una base conceptual, no un objeto funcional por sí mismo.
 */
abstract class Dulce implements Resumible {
    protected string $nombre;
    protected float $precio;
    private static float $IVA = 21.0;

    public function __construct(string $nombre, float $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    // Getters
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    // Método abstracto
    public abstract function muestraResumen(): void;

    public static function getIVA(): float {
        return self::$IVA;
    }
}
