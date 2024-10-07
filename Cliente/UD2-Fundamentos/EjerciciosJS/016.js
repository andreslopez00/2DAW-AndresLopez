"use strict";
function adivinarNumero() {
    let numeroAleatorio = Math.floor(Math.random() * 10) + 1;
    let intento;
    do {
        intento = prompt("Adivine el número entre el 1 y el 10:");
        if (intento == numeroAleatorio) {
            alert("Enhorabuena crack");
        } else {
            alert("Agua compañero");
        }
    } while (intento != numeroAleatorio);
}
//TODO: la conversión del prompt otra vez