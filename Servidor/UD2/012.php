<?php
$filas = $_POST['filas'];
$columnas = $_POST['columnas'];
echo "<table border='4'>";
for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $columnas; $j++) {
        echo "<td>($i, $j)</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
