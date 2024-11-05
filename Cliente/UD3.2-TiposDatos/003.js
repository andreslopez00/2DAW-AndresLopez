/* Uso básico de arrays
Crea un array que contenga tres nombres de frutas. Realiza las siguientes operaciones:
Añade una fruta al final del array.
Elimina el primer elemento del array.
Muestra el array resultante y el número de elementos que contiene */
"use strict"
let frutas = ["Uva", "Mandarina", "Limon"];

frutas.push("Naranja"); 
frutas.shift(); 

console.log("Array de frutas:", frutas); 
console.log("Número de elementos:", frutas.length); 
