/* 019firstToUpper.js/.html: Escribe una función ucFirst(str) que devuelva el string str con
el primer carácter en mayúscula, por ejemplo:
ucFirst("john") == "John"*/
"use strict"
function ucFirst(str) {
    if (!str) return str;
    return str[0].toUpperCase() + str.slice(1);
}

alert(ucFirst("john")); 
