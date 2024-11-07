/* 029practiceWithBands.js/.html: Ejecuta sobre el siguiente array las operaciones
pedidas:
var grupos = [
{nombre: "ACDC", genero: "Rock"},
{nombre: "Cold Play", genero: "Pop"},
{nombre: "NCT Dream", genero: "K-Pop"},
{nombre: "Metallica", genero: "Heavy Metal"}
];
/filtra los grupos por género obtenido aquellos que son de Heavy Metal.
/Busca en los grupos usando “find” el grupo con Nombre “Cold Play”.
/¿En qué posición del array se encuenta “Cold Play”?*/
"use strict"
var grupos = [
    { nombre: "ACDC", genero: "Rock" },
    { nombre: "Cold Play", genero: "Pop" },
    { nombre: "NCT Dream", genero: "K-Pop" },
    { nombre: "Metallica", genero: "Heavy Metal" }
];

let heavyMetalGroups = grupos.filter(grupo => grupo.genero === "Heavy Metal");
console.log("Grupos de Heavy Metal:", heavyMetalGroups);

let coldPlay = grupos.find(grupo => grupo.nombre === "Cold Play");
console.log("Grupo Cold Play:", coldPlay);

let coldPlayIndex = grupos.findIndex(grupo => grupo.nombre === "Cold Play");
console.log("Índice de Cold Play:", coldPlayIndex);
