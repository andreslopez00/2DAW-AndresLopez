"use strict";
function resolverEcuacionCuadratica(a, b, c) {
    let ecuacion = Math.pow(b, 2) - 4 * a * c; //b^2−4ac
  
    if (ecuacion < 0) {
      return 'No hay raices reales';
    }
  
    let raizMas = (-b + Math.sqrt(ecuacion)) / (2 * a); // (−b+sqrt(b^2−4ac))/2a
    let raizMenos = (-b - Math.sqrt(ecuacion)) / (2 * a);// (−b-sqrt(b^2−4ac))/2a
  
    return ecuacion === 0 ? [raizMas] : [raizMas, raizMenos]; //Si el resultado es 0 solo hay una solucion y si es mayor que 0 hay 2 soluciones.
  }
  
  console.log(resolverEcuacionCuadratica(3, -6, 5));
  console.log(resolverEcuacionCuadratica(9, 2, 7)); 
  