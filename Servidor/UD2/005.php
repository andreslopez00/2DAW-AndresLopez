<?php
$dinero = 345;
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
