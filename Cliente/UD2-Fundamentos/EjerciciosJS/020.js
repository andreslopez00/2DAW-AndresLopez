"use strict";
function cambiarColor() {
    let colores = ["white","red", "blue","black", "green", "yellow", "purple", "orange",];
    let colorAleatorio = colores[Math.floor(Math.random() * colores.length)];
    document.body.style.backgroundColor = colorAleatorio;
}
