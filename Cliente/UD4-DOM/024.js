/*024addCloseButton.html/.js: Agregar un botón de cierre: Hay una lista de mensajes.
Usa JavaScript para agregar un botón de cierre en la esquina superior derecha de cada
mensaje. El resultado debería verse algo así:*/
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
