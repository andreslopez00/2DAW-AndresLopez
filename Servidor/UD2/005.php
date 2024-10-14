<?php
$dinero = 999;
$billetes = [500, 200, 100, 50, 20, 10, 5];
$monedas = [2, 1];
foreach ($billetes as $billete) {
    $numBilletes = intdiv($dinero, $billete);
    echo "$numBilletes billete(s) de $billete<br>";
    $dinero = $dinero % $billete;
}
foreach ($monedas as $moneda) {
    $numMonedas = intdiv($dinero, $moneda);
    echo "$numMonedas moneda(s) de $moneda<br>";
    $dinero = $dinero % $moneda;
}
?>

//TODO: esta no es una buena forma de hacerlo.
/* Primero debes meter todo en el mismo array, y luego comprobar qué tipo es 
 para mostrar un mensaje u otro. Esto no tiene sentido así, tarda el doble.
*/
