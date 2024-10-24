/*Modifica el objeto persona:
 Añade una nueva propiedad pais con el valor "España".
 Elimina la propiedad trabajo.
 Imprime el objeto completo */
"use strict"
let persona = {
    nombre: "Ana",
    edad: 28,
    trabajo: "Ingeniera"
};
persona.pais = "España"; 
delete persona.trabajo;

console.log(persona);
