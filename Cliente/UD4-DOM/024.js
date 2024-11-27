/*024addCloseButton.html/.js: Agregar un botón de cierre: Hay una lista de mensajes.
Usa JavaScript para agregar un botón de cierre en la esquina superior derecha de cada
mensaje. El resultado debería verse algo así:*/
"use strict"
let messages = document.querySelectorAll('.message');

messages.forEach(message => {
    let closeButton = document.createElement('button');
    closeButton.textContent = 'Cerrar';
    message.appendChild(closeButton);
});