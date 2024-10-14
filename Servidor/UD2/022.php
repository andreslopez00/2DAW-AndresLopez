<?php
function generaPass($longitud) {
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $longitudCaracteres = strlen($caracteres);
    $password = '';
    for ($i = 0; $i < $longitud; $i++) {
        $password .= $caracteres[rand(0, $longitudCaracteres - 1)];
    }
    return $password;
}
// Prueba
$tamaño = 39; 
$contraseña = generaPass($tamaño);
echo "Contraseña generada: $contraseña";
?>

//TODO: no has tenido en cuenta que tiene que tener tanto letras como dígitos siempre.