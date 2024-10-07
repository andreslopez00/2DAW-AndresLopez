<?php
// Función ucwords: Convierte a mayúscula el primer carácter de cada palabra de una cadena.
$cadena = "betiii wenooo";
$resultado = ucwords($cadena);
echo "Ejemplo ucwords: $resultado <br>";

// Función strrev: Invierte una cadena, es decir, el primer carácter pasa a ser el último y viceversa.
$cadena = "Matitooo";
$resultado = strrev($cadena);
echo "Ejemplo strrev: $resultado <br>";

// Función str_repeat: Repite una cadena un número específico de veces.
$cadena = "OC ";
$veces = 3;
$resultado = str_repeat($cadena, $veces);
echo "Ejemplo str_repeat: $resultado <br>";

// Función md5: Calcula el hash MD5 de una cadena. Es comúnmente utilizada para almacenar contraseñas en una forma encriptada (aunque hoy en día se recomienda usar funciones más seguras como password_hash).
$cadena = "contraseña1234";
$hash = md5($cadena);
echo "Ejemplo md5: $hash <br>";
?>
