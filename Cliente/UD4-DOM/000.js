/*000*/
"use strict"
// 1. Usando childNodes, selecciona y muestra en la consola todos los nodos hijos del div con id "contenedor".
let contenedor = document.getElementById('contenedor');
console.log('1. childNodes:', contenedor.childNodes);

// 2. Usando firstChild, selecciona y muestra en la consola el primer hijo del div con id "contenedor".
console.log('2. firstChild:', contenedor.firstChild);

// 3. Usando lastChild, selecciona y muestra en la consola el último hijo del div con id "contenedor".
console.log('3. lastChild:', contenedor.lastChild);

// 4. Usando parentElement, selecciona y muestra en la consola el elemento padre del h1.
let tituloPrincipal = document.querySelector('h1');
console.log('4. parentElement:', tituloPrincipal.parentElement);

// 5. Usando children, selecciona y muestra en la consola todos los elementos hijos de la lista desordenada (ul).
let lista = document.querySelector('ul');
console.log('5. children:', lista.children);

// 6. Usando firstElementChild, selecciona y muestra en la consola el primer elemento hijo del div con id "contenedor".
console.log('6. firstElementChild:', contenedor.firstElementChild);

// 7. Usando lastElementChild, selecciona y muestra en la consola el último elemento hijo del div con id "contenedor".
console.log('7. lastElementChild:', contenedor.lastElementChild);

// 8. Usando previousElementSibling, selecciona y muestra en la consola el elemento anterior al párrafo con clase "parrafo".
let parrafo = document.querySelector('.parrafo');
console.log('8. previousElementSibling:', parrafo.previousElementSibling);

// 9. Usando nextElementSibling, selecciona y muestra en la consola el elemento siguiente al párrafo con clase "parrafo".
console.log('9. nextElementSibling:', parrafo.nextElementSibling);

// 10. Usando JavaScript, selecciona el primer elemento li dentro de la lista y muestra en la consola su nodeType, nodeName y tagName.
let primerLi = lista.firstElementChild;
console.log('10. nodeType:', primerLi.nodeType);
console.log('10. nodeName:', primerLi.nodeName);
console.log('10. tagName:', primerLi.tagName);

// 11. Usando JavaScript, selecciona el enlace (<a>) y muestra en la consola su innerHTML y outerHTML.
let enlace = document.querySelector('a');
console.log('11. innerHTML:', enlace.innerHTML);
console.log('11. outerHTML:', enlace.outerHTML);

// 12. Usando JavaScript, selecciona el párrafo con clase "parrafo" y muestra en la consola su nodeValue y textContent.
console.log('12. nodeValue:', parrafo.nodeValue); // Será null porque los nodos de tipo elemento no tienen nodeValue.
console.log('12. textContent:', parrafo.textContent);

// 13. Usando JavaScript, selecciona el div con id "contenedor" y verifica si tiene el atributo hidden.
if (contenedor.hasAttribute('hidden')) {
    console.log('13. El elemento está oculto');
} else {
    console.log('13. El elemento no está oculto');
}
