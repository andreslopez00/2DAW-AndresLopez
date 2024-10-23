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