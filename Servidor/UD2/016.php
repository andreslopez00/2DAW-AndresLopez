<?php
$array33 = [];
for ($i = 0; $i < 33; $i++) {
    $array33[] = rand(0, 100);
}
$mayor = max($array33);
$menor = min($array33);
$media = array_sum($array33) / count($array33);

echo "Mayor: $mayor<br>";
echo "Menor: $menor<br>";
echo "Media: $media";
?>

//TODO: siempre que muestres valores decimales, recuerda redondear a 2 ó 3 cifras.