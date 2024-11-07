/* 022extractMoney.js/.html: Tenemos un coste en forma de “$120”. Es decir: el signo de
dólar va primero y luego el número. Crea una función extractCurrencyValue(str) que
extraiga el valor numérico de dicho string y lo devuelva. Por ejemplo:
alert( extractCurrencyValue('$120') === 120 ); // true*/
"use strict"
function extractCurrencyValue(str) {
    return +str.slice(1);
}
console.log(extractCurrencyValue('$120') === 120);
