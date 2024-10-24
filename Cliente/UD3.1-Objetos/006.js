/*Utiliza un bucle "for...in" para recorrer todas las propiedades del objeto
persona e imprime tanto las claves como los valores.
*/
"use strict"
let persona = {
    nombre: "Ana",
    edad: 28,
    pais: "España"
};
for (let clave in persona) {
    console.log(`${clave}: ${persona[clave]}`);
}