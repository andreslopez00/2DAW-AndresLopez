<?php
$arrayMoF = [];
for ($i = 0; $i < 100; $i++) {
    $arrayMoF[] = rand(0, 1) == 0 ? "M" : "F";
}
$conteo = array_count_values($arrayMoF);
echo "M: " . ($conteo['M'] ?? 0) . "<br>";
echo "F: " . ($conteo['F'] ?? 0);
?>
