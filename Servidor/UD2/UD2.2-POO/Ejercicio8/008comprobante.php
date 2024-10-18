<?php
namespace Ejercicio8;
require_once '008PersonaH.php';
require_once '008EmpleadoH.php';
try {
$persona = new Persona("Luis", "Fabiano");
$empleado = new Empleado("Frederick", "Kanoute", 2000, [123456789, 987654321]);
echo Persona::toHtml($persona);
echo Empleado::toHtml($empleado);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}