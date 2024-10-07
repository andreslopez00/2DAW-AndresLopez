<?php
$inicio = 32;
$fin = 64;
echo "<ul>";
for ($i = $inicio; $i <= $fin; $i++) {
    if ($i % 2 == 0) {
        echo "<li>$i</li>";
    }
}
echo "</ul>";
?>