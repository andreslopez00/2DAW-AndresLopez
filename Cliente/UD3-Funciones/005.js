"use strict";
function contarVocales(cadena) {
    let vocales = 'aeiouAEIOU';
    let contador = 0;
    for (let char of cadena) {
      if (vocales.includes(char)) {
        contador++;
      }
    }
    return contador;
  }
  console.log(contarVocales('OC rinconero'));
  