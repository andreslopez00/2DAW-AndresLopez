"use strict";
function comprobarVocal() {
    let letra = 'a'; 
    if ('aeiou'.includes(letra.toLowerCase())) {
        alert("Es una vocal");
    } else {
        alert("No es una vocal");
    }
}
comprobarVocal()

//mejor 
//OJO con las llamadas dobles 