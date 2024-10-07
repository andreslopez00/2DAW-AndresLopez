"use strict";
function edadUsuario() {
    let edad = prompt("Por favor, ingresa tu edad:");
    if (edad < 18) {
        alert("No puedes ingresar");
    } else {
        alert("Bienvenido");
    }
}
