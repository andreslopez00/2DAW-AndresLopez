/*Para cada una de las siguientes preguntas, da al menos una forma de cómo acceder a
ellos:
¿El nodo <div> del DOM?
¿El nodo <ul> del DOM?
El segundo <li> (con Peter Parker)?*/
"use strict"
// Acceso al nodo <div>
let divNode = document.querySelector('div');
console.log(divNode);

// Acceso al nodo <ul>
let ulNode = document.querySelector('ul');
console.log(ulNode);

// Acceso al segundo <li> (con Peter Parker)
let secondLi = ulNode.querySelectorAll('li')[1];
console.log(secondLi);

