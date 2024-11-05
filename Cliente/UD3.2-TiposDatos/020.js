/* 020checkSpan.js/.html: Escribe una función checkSpam(str) que devuelva true si str
contiene ‘viagra’ o ‘XXX’, de lo contrario false. La función debe ser insensible a
mayúsculas y minúsculas:
checkSpam('compra ViAgRA ahora') == true
checkSpam('xxxxx gratis') == true
checkSpam("coneja inocente") == false*/
"use strict"
function checkSpam(str) {
    let lowerStr = str.toLowerCase();
    return lowerStr.includes("viagra") || lowerStr.includes("xxx");
}

console.log(checkSpam('compra ViAgRA ahora')); 
console.log(checkSpam('xxxxx gratis')); 
console.log(checkSpam("coneja inocente")); 