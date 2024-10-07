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