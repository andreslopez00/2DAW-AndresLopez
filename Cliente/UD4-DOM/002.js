/*002siblings.html/.js: Si elem – es un elemento nodo arbitrario del DOM…
¿Es cierto que elem.lastChild.nextSibling siempre es null?
¿Es cierto que elem.children[0].previousSibling siempre es null ?
Demúestralo*/
"use strict"
let elem = document.getElementById("test");

// ¿Es cierto que elem.lastChild.nextSibling siempre es null?
let lastChild = elem.lastChild;
console.log("lastChild:", lastChild);
console.log("lastChild.nextSibling:", lastChild.nextSibling); // Esto será siempre null, ya que es el último nodo .

// ¿Es cierto que elem.children[0].previousSibling siempre es null?
let firstChildElement = elem.children[0];
console.log("firstChildElement:", firstChildElement);
console.log("firstChildElement.previousSibling:", firstChildElement.previousSibling);
// Esto puede no ser null, ya que puede haber un nodo de texto o comentario antes del primer hijo elemento.