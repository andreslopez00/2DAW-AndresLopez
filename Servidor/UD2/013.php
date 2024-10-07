<?php
$filas = $_POST['filas'];
$columnas = $_POST['columnas'];
echo "<table border='5'>";
for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $columnas; $j++) {
        if ($i == 0 || $i == $filas - 1 || $j == 0 || $j == $columnas - 1) {
            echo "<td>($i, $j)</td>";
        } else {
            echo "<td></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>