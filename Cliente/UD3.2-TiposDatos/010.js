/* Gestión de objetos anidados
Crea un objeto que represente una empresa con las siguientes propiedades:
 nombre (string)
 ubicacion (objeto con pais, ciudad)
 empleados (array de objetos que representen empleados con propiedades
nombre y puesto)
Realiza las siguientes operaciones:
 Muestra la ciudad de la empresa.
 Añade un nuevo empleado al array.
 Muestra la lista de empleados en la consola */
"use strict"
let empresa = {
    nombre: "Nissan",
    ubicacion: {
      pais: "España",
      ciudad: "Barcelona"
    },
    empleados: [
      { nombre: "Juan", puesto: "Desarrollador" },
      { nombre: "Cristina", puesto: "Diseñadora" }
    ]
  };
  
  console.log("Ciudad de la empresa:", empresa.ubicacion.ciudad); 
  
  empresa.empleados.push({ nombre: "Ramon", puesto: "CEO" });
  
  console.log("Lista de empleados:");
  empresa.empleados.forEach(empleado => console.log(`Nombre: ${empleado.nombre}, Puesto: ${empleado.puesto}`));
  