/*Comprueba si la propiedad nombre existe en el objeto persona usando el
operador "in". Luego, verifica si existe la propiedad apellido. */
"use strict"
let persona = {
    nombre: "Ana",
    edad: 28,
    pais: "España"
};
console.log("nombre" in persona); 

console.log("apellido" in persona);
