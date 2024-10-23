"use strict"
let usuario1 = {
    nombre: "Andrés",
    edad: 24,
    email: "andres@mail.com"
};
let usuarioClon = Object.assign({}, usuario1);
usuarioClon.edad = 49;
console.log(usuario1); 
console.log(usuarioClon); 
