/*Crea un símbolo id para usarlo como clave en un objeto empleado. Añade la
propiedad id utilizando el símbolo como clave y luego intenta acceder a ella con un
bucle for...in (debería ser ignorada en la iteración) */
"use strict"
let id = Symbol('id');
let empleado = {
    nombre: "Andres",
    puesto: "Desarrollador",
    [id]: 2408
};

for (let clave in empleado) {
    console.log(clave); 
}
console.log(empleado[id]); 
