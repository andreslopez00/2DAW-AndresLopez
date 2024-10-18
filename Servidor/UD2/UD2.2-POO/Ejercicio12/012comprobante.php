<?php
namespace Ejercicio12;

require_once '012Empleado.php';
require_once '012Gerente.php';
try {
$empleado = new Empleado("Oc", "Rinconero", 83, 123, 7, [673264876324]);
$gerente = new Gerente("Charo", "Charez", 23, 834, [89732874683]);

echo Empleado::toHtml($empleado);
echo Gerente::toHtml($gerente);
echo $empleado;
echo $gerente;
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}