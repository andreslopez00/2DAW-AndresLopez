/* 024usingArrayFruits.js/.html: Ejecuta sobre el siguiente array las operaciones pedidas:
var fruits = ["Banana", "Manzana", "Fresa"];
/Añadimos cereza al principio
/Añadimos melocotón al final
/Mostrar el array elemento a elemento con for clásico
/Eliminamos el primer elemento.
/Eliminamos el último elemento.
/Mostrar cada elemento con for of o for in, lo que considere más adecuado*/
"use strict"
var fruits = ["Banana", "Manzana", "Fresa"];

fruits.unshift("Cereza");
console.log("Añadimos Cereza:", fruits);

fruits.push("Melocotón");
console.log("Añadimos Melocotón:", fruits);

console.log("Elementos con for:");
for (let i = 0; i < fruits.length; i++) {
    console.log(fruits[i]);
}

fruits.shift();
console.log("Eliminamos el primer elemento:", fruits);

fruits.pop();
console.log("Eliminamos el último elemento:", fruits);

console.log("Elementos con for of:");
for (let fruit of fruits) {
    console.log(fruit);
}
