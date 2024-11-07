/* Manipulación de cadenas de texto
Declara una cadena de texto que contenga tu nombre completo. Usa los métodos
apropiados para:
Convertir todo el texto a mayúsculas.
Obtener la cantidad de caracteres.
Extraer tu apellido usando substring() o slice().*/
"use strict"
let nombreCompleto = "Ever Banega";

console.log("Mayúsculas:", nombreCompleto.toUpperCase()); 
console.log("Cantidad de caracteres:", nombreCompleto.length); 
console.log("Apellido:", nombreCompleto.slice(nombreCompleto.indexOf(" ") + 1));
