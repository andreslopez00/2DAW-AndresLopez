/*Crea un objeto usuario1 con las propiedades nombre, edad y email. Luego, crea
una variable usuario2 y haz que sea una copia por referencia de usuario1. Modifica
alguna propiedad de usuario2 y observa cómo cambia el objeto usuario1. */
"use strict"
let usuario1 = {
    nombre: "Andrés",
    edad: 24,
    email: "andres@mail.com"
};

let usuario2 = usuario1;

usuario2.edad = 30;

console.log(usuario1); 
console.log(usuario2);