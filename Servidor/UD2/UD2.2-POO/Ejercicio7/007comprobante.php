<?php
namespace Ejercicio7;
require_once '007Persona.php';
require_once '007EmpleadoP.php';
try {
    $empleado = new Empleado("Joan", "Jordan", 3463, [56546453443]);
    $empleado->anyadirTelefono(654321987);
    echo Empleado::toHtml($empleado);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}