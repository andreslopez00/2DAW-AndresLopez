/* Conversión de tipos primitivos
Declara una variable que almacene un número. A continuación, convierte este número
a tipo string y muestra ambos valores en la consola utilizando console.log(). También
convierte el string de nuevo a tipo numérico y muestra el resultado */
"use strict"
let numero = 23;
let numeroComoString = String(numero);

console.log("Número:", numero); 
console.log("Número como string:", numeroComoString);

let stringAEntero = Number(numeroComoString);
console.log("String de nuevo a número:", stringAEntero); 
