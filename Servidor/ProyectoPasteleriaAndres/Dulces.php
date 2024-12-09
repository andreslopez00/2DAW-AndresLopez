<?php

class Dulce {
    private static float $IVA = 21.0; // Constante de IVA
    private string $nombre;
    private float $precio;

    public function __construct(string $nombre, float $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public static function getIVA(): float {
        return self::$IVA;
    }

    public function muestraResumen(): void {
        echo "Dulce: {$this->nombre}, Precio: {$this->precio} €, IVA: " . self::$IVA . "%\n";
    }
}

// Creación de un objeto Dulce y muestra de propiedades
$dulce = new Dulce("Caramelo", 1.50);
$dulce->muestraResumen();
