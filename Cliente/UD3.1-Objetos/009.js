/*Añade un método llamado saludar al objeto persona, que imprima un saludo
como "Hola, soy Ana y tengo 28 años". Utiliza la palabra clave this dentro del método. */
"use strict"
let persona = {
    nombre: "Ana",
    edad: 28,
    pais: "España"
};
persona.saludar = function() {
    console.log(`Hola, soy ${this.nombre} y tengo ${this.edad} años.`);
};
persona.saludar(); 
