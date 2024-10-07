<?php
$edad = $_GET['edad'];
$edadFutura = $edad + 10;
$edadPasada = $edad - 10;
$añoActual = date("Y");
$añoFuturo = $añoActual + 10;
$añoPasado = $añoActual - 10;
$añoJubilacion = $añoActual + (67 - $edad);
echo "<p>Edad actual: $edad</p>";
echo "<p>Dentro de 10 años tendrás: $edadFutura años, y será el año $añoFuturo.</p>";
echo "<p>Hace 10 años tenías: $edadPasada años, y era el año $añoPasado.</p>";
echo "<p>Te jubilarás en el año: $añoJubilacion.</p>";
?>
