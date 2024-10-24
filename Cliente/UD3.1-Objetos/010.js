/*Crea un constructor llamado Coche que reciba las propiedades marca, modelo y
año. Utiliza this dentro del constructor para asignar esas propiedades a los objetos
creados con new. */
"use strict"
function Coche(marca, modelo, año) {
    this.marca = marca;
    this.modelo = modelo;
    this.año = año;
}

let miCoche = new Coche("Peugeot", "Matitoneta", 2008);
console.log(miCoche);