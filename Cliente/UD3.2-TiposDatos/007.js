/* Fechas y horas
Crea una variable que almacene la fecha y hora actual usando el constructor Date().
Luego, realiza las siguientes acciones:
Muestra el año actual.
Extrae y muestra el día de la semana (como texto, no número). */
"use strict"
let fechaActual = new Date();

console.log("Año actual:", fechaActual.getFullYear()); 

let diasSemana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
console.log("Día de la semana:", diasSemana[fechaActual.getDay()]); 
