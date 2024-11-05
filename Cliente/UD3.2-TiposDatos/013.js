/* 013sumVisitorNumbers.js/.html: Crea un script que pida al visitante que ingrese dos
números y muestre su suma. P.D. Hay una trampa con los tipos de valores */
"use strict"
let num1 = prompt("Ingresa el primer número:", "0");
let num2 = prompt("Ingresa el segundo número:", "0");

let suma = Number(num1) + Number(num2);
alert("La suma es: " + suma);
