"use strict";
function calcularFactorial() {
    let numero = 7;
    let factorial = 1;
    for (var i = 1; i <= numero; i++) {
        factorial *= i;
    }
    console.log("El factorial de " + numero + " es: " + factorial);
}
calcularFactorial()