<?php
    $numero = 12;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>A</th>
            <th>*</th>
            <th>B</th>
            <th>=</th>
            <th>A*B</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$numero</td>";
            echo "<td>*</td>";
            echo "<td>$i</td>";
            echo "<td>=</td>";
            echo "<td>" . ($numero * $i) . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
</body>
</html>