"use strict";
function combinaciones(cadena) {
    let resultados = [];
    let generarCombinaciones = (prefijo, resto) => {
      resultados.push(prefijo);
      for (let i = 0; i < resto.length; i++) {
        generarCombinaciones(prefijo + resto[i], resto.slice(i + 1));
      }
    };
    generarCombinaciones('', cadena);
    return resultados;
  }
  console.log(combinaciones('oc'));