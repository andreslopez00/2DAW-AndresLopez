"use strict";
function sumarNumeros() {
    let suma = 0;
    for (var i = 1; i <= 100; i++) {
        suma += i;
    }
    console.log("La suma de los números del 1 al 100 es: " + suma);
}
sumarNumeros()

//TODO: hay otra forma sumar los extremos y tardas la mitad, y no uses var! 