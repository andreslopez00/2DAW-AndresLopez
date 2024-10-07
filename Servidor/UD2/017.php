<?php
function digitos(int $num): int {
    return strlen((string)$num); 
}

function digitoN(int $num, int $pos): int {
    $numStr = (string)$num; 
    if ($pos > 0 && $pos <= strlen($numStr)) {
        return (int)$numStr[$pos - 1]; 
    } else {
        return -1; 
    }
}

function quitaPorDetras(int $num, int $cant): int {
    return (int)(substr((string)$num, 0, -$cant)); 
}
function quitaPorDelante(int $num, int $cant): int {
    return (int)(substr((string)$num, $cant)); 
}

//PRUEBA

$num1 = 654542412611;
echo "Número: $num1<br>";
echo "Dígitos: " . digitos($num1) . "<br>";
echo "Dígito en la posición 5: " . digitoN($num1, 5) . "<br>"; 
echo "Dígito en la posición 11: " . digitoN($num1, 11) . "<br>"; 
echo "Quitar 3 dígitos por detrás: " . quitaPorDetras($num1, 3) . "<br>"; 
echo "Quitar 1 dígitos por delante: " . quitaPorDelante($num1, 1) . "<br>"; 


