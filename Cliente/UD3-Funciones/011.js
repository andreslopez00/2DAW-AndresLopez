"use strict";
function esPalindromo(cadena) {
    let procesada = cadena.toLowerCase().replace(/[\W_]/g, '');
    return procesada === procesada.split('').reverse().join('');
  }
  console.log(esPalindromo('Amor,roma'));
  