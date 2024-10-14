<?php
$a = 2;  
$b = 0;  
$c = 1; 
if ($a != 0) {
    $discriminante = $b * $b - 4 * $a * $c;
    if ($discriminante > 0) {
        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
        echo "<p>La ecuación tiene dos soluciones reales: x1 = $x1 y x2 = $x2.</p>";
    } elseif ($discriminante == 0) {
        $x = -$b / (2 * $a);
        echo "<p>La ecuación tiene solo una solucion real: x = $x.</p>";
    } else {
        echo "<p>La ecuación no tiene soluciones reales.</p>";
    }
} else {
    echo "<p>Error:El valor de a no puede ser 0, ya que no sería una ecuación de segundo grado.</p>";
}
?>