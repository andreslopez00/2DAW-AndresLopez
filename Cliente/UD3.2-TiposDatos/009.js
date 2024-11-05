/* Reducción de arrays
Dado el siguiente array de números [10, 20, 30, 40, 50], utiliza el método reduce() para
obtener la suma total de los elementos. Después, modifica el código para obtener el
producto de todos los números*/
"use strict"
let numerosArray = [10, 20, 30, 40, 50];

let sumaTotal = numerosArray.reduce((acumulador, valor) => acumulador + valor, 0);
console.log("Suma total:", sumaTotal); 

let productoTotal = numerosArray.reduce((acumulador, valor) => acumulador * valor, 1);
console.log("Producto total:", productoTotal); 
