<?php
function normalaCani($cadena) {
    $resultado = '';
    $mayuscula = true; 
    for ($i = 0; $i < strlen($cadena); $i++) {
        $letra = $cadena[$i];       
        if (ctype_alpha($letra)) {
            if ($mayuscula) {
                $resultado .= strtoupper($letra);
            } else {
                $resultado .= strtolower($letra);
            }
            $mayuscula = !$mayuscula; 
        } else {
            $resultado .= $letra;
        }
    }
    return $resultado;
}
// Prueba
$textoOriginal = "Pero y este pavo??";
$textoCani =normalaCani($textoOriginal);
echo "Texto original: $textoOriginal <br>";
echo "Texto en formato cani: $textoCani";
?>