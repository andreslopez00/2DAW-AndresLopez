<?php
namespace Ejercicio11;
require_once '011PersonaA.php';
require_once '011EmpleadoA.php';
$empleado = new Empleado("Oc", "Rinconero", 34, 250, [4857435435, 23094893274]);
echo Empleado::toHtml($empleado);
echo $empleado;
?>
