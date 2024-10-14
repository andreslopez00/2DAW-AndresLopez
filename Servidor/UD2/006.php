<?php
$edad = 7;
if ($edad < 3) {
    echo "Bebe";
} elseif ($edad >= 3 && $edad <= 12) {
    echo "Niño";
} elseif ($edad >= 13 && $edad <= 17) {
    echo "Adolescente";
} elseif ($edad >= 18 && $edad <= 66) {
    echo "Adulto";
} else {
    echo "Jubilado";
}
?>

//TODO: un switch case es mejor opción que esto, ya hay que tener más madurez a la hora de programar