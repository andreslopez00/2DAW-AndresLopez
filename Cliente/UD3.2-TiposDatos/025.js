/* 025usingArrayDisney.js/.html: Ejecuta sobre el siguiente array las operaciones pedidas:
let disney = [
{ nombre: "Hércules", pelicula: "Hércules" },
{ nombre: "Megana", pelicula: "Hércules" },
{ nombre: "Hades", pelicula: "Hércules" },
{ nombre: "Campanilla", pelicula: "Peter Pan" },
{ nombre: "Wendy", pelicula: "Peter Pan" }
];
/Meter a Peter Pan al final del array disney.
/Pintar el array
/Meter a El capitán Garfio al principio del array, no olvides la película
/Meter al cocodrilo detrás del capitán, no olvides la película
/Obtener los personajes de la película de "Peter Pan"; y mostrarlos uno a uno.
/Encontrar el índice de Campanilla.
/Buscar al cocodrilo.
/Escribe la función shuffle(array) que baraje (reordene de forma aleatoria) los
elementos del array.*/
"use strict"
let disney = [
    { nombre: "Hércules", pelicula: "Hércules" },
    { nombre: "Megana", pelicula: "Hércules" },
    { nombre: "Hades", pelicula: "Hércules" },
    { nombre: "Campanilla", pelicula: "Peter Pan" },
    { nombre: "Wendy", pelicula: "Peter Pan" }
];

disney.push({ nombre: "Peter Pan", pelicula: "Peter Pan" });
console.log("Añadimos Peter Pan:", disney);

console.log("Array completo:", disney);

disney.unshift({ nombre: "El Capitán Garfio", pelicula: "Peter Pan" });
console.log("Añadimos Capitán Garfio al principio:", disney);

disney.splice(1, 0, { nombre: "Cocodrilo", pelicula: "Peter Pan" });
console.log("Añadimos Cocodrilo después del Capitán:", disney);

console.log("Personajes de 'Peter Pan':");
disney.filter(personaje => personaje.pelicula === "Peter Pan").forEach(personaje => console.log(personaje));

console.log("Índice de Campanilla:", disney.findIndex(personaje => personaje.nombre === "Campanilla"));

console.log("Buscar Cocodrilo:", disney.find(personaje => personaje.nombre === "Cocodrilo"));

function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        let j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}

console.log("Array barajado:", shuffle(disney));
