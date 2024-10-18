<?php
namespace Ejercicio12;

require_once '012Empleado.php';
require_once '012Gerente.php';

$empleado = new Empleado("Ana", "Martínez", 25, 160, 20, [123456789, 987654321]);
$gerente = new Gerente("Carlos", "Pérez", 50, 5000, [1122334455]);

echo Empleado::toHtml($empleado);
echo Gerente::toHtml($gerente);
echo $empleado;
echo $gerente;
