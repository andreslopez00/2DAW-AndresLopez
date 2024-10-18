<?php
namespace Ejercicio13;

require_once '013Empleado.php';
require_once '013Gerente.php';
require_once '013Persona.php';
require_once '013Empresa.php';
require_once '013Trabajador.php';
try {
$empresa = new Empresa("Ilerna Sevilla", "Calle Masoneria 33");
$empleado1 = new Empleado("Oc", "Rinconero", 83, 123, 7, [673264876324]);
$gerente1 = new Gerente("Charo", "Charez", 23, 834, [89732874683]);
$empresa->anyadirTrabajador($empleado1);
$empresa->anyadirTrabajador($gerente1);

// lista de trabajadores
echo $empresa->listarTrabajadoresHtml();

// Información de la empresa y nóminas
echo $empresa;
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}