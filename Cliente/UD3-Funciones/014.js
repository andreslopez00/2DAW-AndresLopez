"use strict";
function contarCaracteres(cadena) {
    let contador = {};
    for (let char of cadena.replace(/\s/g, '')) {
      contador[char] = (contador[char] || 0) + 1;
    }
    return contador;
  }
  console.log(contarCaracteres('Pero y este tio?')); 
  