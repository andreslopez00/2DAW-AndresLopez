"use strict";
function edadUsuario() {
    let edad = +prompt("Por favor, ingresa tu edad:");
    // TODO: Te falta el conversor a entero, 
    //te he puesto el símbolo + delante del prompt!
    //No te olvides de ese detalle
    if (edad < 18) {
        alert("No puedes ingresar");
    } else {
        alert("Bienvenido");
    }
}
