<?php
/* 
La instrucción match() en PHP 8 es una mejora sobre switch(), que permite realizar
comparaciones más estrictas (usando igualdad estricta ===) y devolver un valor directamente. 
A diferencia de switch, no requiere las declaraciones de break para evitar la continuación
involuntaria y puede devolver resultados.
*/
$edad = 89;
$etapa = match (true) {
    $edad < 3 => 'Bebe',
    $edad >= 3 && $edad <= 12 => 'Niño',
    $edad >= 13 && $edad <= 17 => 'Adolescente',
    $edad >= 18 && $edad <= 66 => 'Adulto',
    default => 'Jubilado',
};
echo "La persona es: $etapa";
?>
