/*Enunciado: Crea una clase base llamada Animal que tenga las siguientes
características:
 Un constructor que reciba un parámetro nombre para inicializar la propiedad
del mismo nombre.
 Un método llamado hacerSonido() que imprima un mensaje genérico:
"[nombre] está haciendo un sonido.".
Luego, crea una clase hija llamada Perro que extienda de Animal con las siguientes
características:
 Un constructor que reciba nombre y raza, y que invoque al constructor de la
clase base.
 Sobrescribe el método hacerSonido() para que en lugar del mensaje genérico,
imprima "[nombre] está ladrando.".
 Un método adicional info() que imprima el nombre y la raza del perro.
Tarea:
1. Crea un objeto Perro llamado miPerro con nombre "Rex" y raza "Pastor
Alemán".
2. Llama al método hacerSonido() y al método info() desde el objeto miPerro. */
"use strict"
class Animal {
    constructor(nombre) {
        this.nombre = nombre;
    }
    
    hacerSonido() {
        console.log(`${this.nombre} está haciendo un sonido.`);
    }
}

class Perro extends Animal {
    constructor(nombre, raza) {
        super(nombre);
        this.raza = raza;
    }

    hacerSonido() {
        console.log(`${this.nombre} está ladrando.`);
    }

    info() {
        console.log(`${this.nombre} es un ${this.raza}.`);
    }
}

let miPerro = new Perro("Rex", "Pastor Alemán");

miPerro.hacerSonido(); 
miPerro.info(); 
