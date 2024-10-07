<?php
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$email = $_POST['email'];
$anoNacimiento = $_POST['anoNacimiento'];
$movil = $_POST['movil'];
echo "<table border='1'>
        <tr>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Email</th>
            <th>Año de Nacimiento</th>
            <th>Móvil</th>
        </tr>
        <tr>
            <td>$nombre</td>
            <td>$apellido1</td>
            <td>$apellido2</td>
            <td>$email</td>
            <td>$anoNacimiento</td>
            <td>$movil</td>
        </tr>
      </table>";
?>
