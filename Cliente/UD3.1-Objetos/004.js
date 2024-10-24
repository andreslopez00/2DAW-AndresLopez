/*Crea un objeto carrito que almacene productos en una tienda online. Cada
producto tendrá un nombre como clave y un valor que indique la cantidad. Usa una
propiedad calculada para añadir dinámicamente un producto introducido por el
usuario. Por ejemplo:
let producto = "manzanas";
let carrito = {
[producto]: 10
}; */
"use strict"
let producto = "manzanas";
let carrito = {
    [producto]: 10
};

let añadirProducto = "naranjas";
carrito[añadirProducto] = 5;

console.log(carrito); 
