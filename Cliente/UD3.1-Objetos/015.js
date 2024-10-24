/*Enunciado: Crea una clase base llamada Vehiculo que contenga:
 Un constructor que reciba el parámetro marca y lo almacene como una
propiedad.
 Un método arrancar() que imprima: "El vehículo de marca [marca] está
arrancando.".
Luego, crea una clase hija llamada Coche que herede de Vehiculo con las siguientes
características:
 Un constructor que reciba marca y modelo. Llama al constructor de Vehiculo
para inicializar marca.
 Sobrescribe el método arrancar() para que imprima: "El coche [marca]
[modelo] está arrancando.".
 Un método adicional detener() que imprima: "El coche [marca] [modelo] se ha
detenido.".
Tarea:
1. Crea un objeto Coche con marca "Toyota" y modelo "Corolla".
2. Llama al método arrancar() y luego al método detener().
Estos enunciados permiten a los estudiantes desarrollar soluciones utilizando clases,
herencia, sobrecarga de métodos y encapsulación en un entorno de programación
orientada a objetos.*/
"use strict"
class Vehiculo {
    constructor(marca) {
        this.marca = marca;
    }

    arrancar() {
        console.log(`El vehículo de marca ${this.marca} está arrancando.`);
    }
}

class Coche extends Vehiculo {
    constructor(marca, modelo) {
        super(marca);
        this.modelo = modelo;
    }

    arrancar() {
        console.log(`El coche ${this.marca} ${this.modelo} está arrancando.`);
    }

    detener() {
        console.log(`El coche ${this.marca} ${this.modelo} se ha detenido.`);
    }
}

let miCoche = new Coche("Toyota", "Corolla");

miCoche.arrancar();
miCoche.detener(); 
