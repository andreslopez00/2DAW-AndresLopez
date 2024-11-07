/* 023modifyThor.js/.html: Contesta los siguientes comentarios con respecto a la cadena
que contiene la variable thor:
let thor = "Thor es el hijo de Odín";
 Largo de la cadena
/Encontrar la letra o
/Encontrar el carácter que ocupa la posición 3
/¿Qué carácter ocupa la posición 1?
/Trocea la cadena usando los espacios en blanco
/Reemplaza Thor por Loki
/Recorta la cadena para que devuelva la palabra Odín
/¿Puedes encontrar la letra a? Demuéstralo
/Pon la mitad de la cadena en minúsculas (Sin usar las posiciones de 0 a 11)*/
"use strict"
let thor = "Thor es el hijo de Odín";

// Largo de la cadena
console.log("Largo de la cadena:", thor.length);

// Encontrar la letra "o"
console.log("Primera aparición de 'o':", thor.indexOf("o"));

// Encontrar el carácter en la posición 3
console.log("Carácter en la posición 3:", thor.charAt(3));

// ¿Qué carácter ocupa la posición 1?
console.log("Carácter en la posición 1:", thor.charAt(1));

// Trocea la cadena usando espacios en blanco
console.log("Array de palabras:", thor.split(" "));

// Reemplaza "Thor" por "Loki"
console.log("Reemplazo de Thor por Loki:", thor.replace("Thor", "Loki"));

// Recorta la cadena para que devuelva "Odín"
console.log("Recorte para obtener 'Odín':", thor.slice(-4));

// ¿Puedes encontrar la letra "a"?
console.log("Contiene 'a':", thor.includes("a"));

// Pon la mitad de la cadena en minúsculas (sin usar posiciones de 0 a 11)
let halfIndex = Math.floor(thor.length / 2);
console.log("Mitad en minúsculas:", thor.slice(0, halfIndex) + thor.slice(halfIndex).toLowerCase());
