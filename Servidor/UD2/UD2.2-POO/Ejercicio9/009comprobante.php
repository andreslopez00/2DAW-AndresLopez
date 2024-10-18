<?php
namespace Ejercicio9;
require_once '009PersonaE.php';
require_once '009EmpleadoE.php';
try {
$persona = new Persona("JC", "Reyes", 56);
$empleado = new Empleado("Manolito", "Martínez", 21, 5421, [765564434, 987654321]);
echo Persona::toHtml($persona);
echo Empleado::toHtml($empleado);
echo $empleado->debePagarImpuestos() ? "Debe pagar impuestos" : "No debe pagar impuestos";
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}