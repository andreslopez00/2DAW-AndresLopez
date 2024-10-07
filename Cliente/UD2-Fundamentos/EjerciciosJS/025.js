"use strict";
function palabraLarga() {
    let texto = "OC rinconero y betico";
    let palabras = texto.split(" ");
    let palabraLarga = palabras.reduce(function(larga, palabra) {
        return palabra.length > larga.length ? palabra : larga;
    }, "");
    console.log("La palabra más larga es: " + palabraLarga);
}
palabraLarga()

//TODO: Jolín los parámetros!!! y la función no hace lo que debe.
/* function detectarLapalabraLarga(cadena){
 let palabra="";
 let arrayPalabras=cadena.split(" ");
 arratPalabras
return palabra;
}*/