/* Crea un objeto cuentaBancaria que tenga una propiedad saldo. Implementa el
método toString para que, al imprimir el objeto, se muestre el saldo de forma legible,
como "Saldo: 1000 EUR".*/
"use strict"
let cuentaBancaria = {
    saldo: 1000,
    toString: function() {
        return `Saldo: ${this.saldo} EUR`;
    }
};

console.log(cuentaBancaria.toString()); 