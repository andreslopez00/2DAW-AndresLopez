<?php
namespace Ejercicio10;
require_once '010PersonaS.php';
require_once '010EmpleadoS.php';
try {
$persona = new Persona("JC", "Reyes", 56);
$empleado = new Empleado("Manolito", "Martínez", 21, 5421, [765564434, 987654321]);
echo $persona;
echo $empleado;
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}