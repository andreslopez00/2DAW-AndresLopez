"use strict"
let persona = {
    nombre: "Ana",
    edad: 28,
    pais: "España"
};
for (let clave in persona) {
    console.log(`${clave}: ${persona[clave]}`);
}