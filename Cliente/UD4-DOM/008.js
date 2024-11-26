/*008whereIsDocument.html/.js: ¿Dónde está el "document" en la jerarquía?
¿A qué clase pertenece el document?
¿Cuál es su lugar en la jerarquía DOM?
¿Hereda de Node o Element, o tal vez HTMLElement?*/
"use strict"
console.log(document.constructor.name); // Clase a la que pertenece el document
console.log(Object.getPrototypeOf(document)); // Lugar en la jerarquía DOM
console.log(document instanceof Node); // Verifica si hereda de Node
console.log(document instanceof HTMLElement); // Verifica si hereda de HTMLElement
