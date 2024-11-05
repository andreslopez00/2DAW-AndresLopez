/* Manipulación de objetos
Crea un objeto que represente un estudiante con las siguientes propiedades: nombre,
edad, carrera. Agrega un método al objeto que muestre la información del estudiante
en la consola. Luego, cambia la propiedad edad y vuelve a mostrar la información*/
"use strict"
let estudiante = {
    nombre: "Alberto",
    edad: 45,
    carrera: "Medicina",
    mostrarInfo: function() {
      console.log(`Nombre: ${this.nombre}, Edad: ${this.edad}, Carrera: ${this.carrera}`);
    }
  };
  
  estudiante.mostrarInfo(); 
  
  estudiante.edad = 29;
  estudiante.mostrarInfo(); 
  