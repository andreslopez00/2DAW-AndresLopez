/* 030arrayToObjetct.js/.html: Crea un objeto a partir de un array Supongamos que
recibimos un array de personajes con la forma {id:..., nombre:..., pelicula:... }.
Crea una función groupById(arr) que cree un objeto, con id como clave (key) y los
elementos del array como valores. Dicha función es realmente útil cuando trabajamos
con información del servidor.
Para esta actividad asumimos que cada id es único. No existen dos elementos del array
con el mismo id.
Usa el método de array .reduce en la solución*/
"use strict"
function groupById(arr) {
    return arr.reduce((obj, elementos) => {
        obj[elementos.id] = elementos;
        return obj;
    }, {});
}

let personajes = [
    { id: "1", nombre: "Michael Corleone", pelicula: "El Padrino" },
    { id: "3", nombre: "Jack Sparrow", pelicula: "Piratas del Caribe" },
    { id: "2", nombre: "Grinch", pelicula: "El Grinch" }
];

console.log(groupById(personajes));
