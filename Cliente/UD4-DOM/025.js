/*025hideMessajeAfterClose.html/.js: Dale funcionalidad al botón de cierre que has
creado para la lista de mensajes del ejercicio anterior. Es decir, haz que funcionen.*/
"use strict"
let messages = document.getElementById("messages");

// Agregar un botón de cierre a cada mensaje
let messageDivs = messages.querySelectorAll(".message");

messageDivs.forEach(message => {
    let closeButton = document.createElement("span");
    closeButton.textContent = "[x]";
    closeButton.classList.add("close-button");

    closeButton.addEventListener("click", function () {
        message.remove();
    });

    message.appendChild(closeButton);
});
