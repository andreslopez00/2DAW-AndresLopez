/*032editDiv.html/.js: Crea un <div> que se vuelva <textarea> cuando es clicado.
El textarea permite editar HTML en <div>. Cuando el usuario presiona Enter o se pierde
el foco, el <textarea> se vuelve <div> de nuevo, y su contenido se vuelve el HTML del
<div>.*/
"use strict"
let showPromptButton = document.getElementById("showPromptButton");
let modalOverlay = document.getElementById("modalOverlay");
let modalForm = document.getElementById("modalForm");
let modalMessage = document.getElementById("modalMessage");
let modalInput = document.getElementById("modalInput");
let okButton = document.getElementById("ok");
let cancelButton = document.getElementById("cancel");

function showPrompt(html, callback) {
    modalOverlay.style.display = "block";
    modalMessage.innerHTML = html;
    modalInput.value = ""; 
    modalInput.focus(); 

    // Función para cerrar el modal y limpiar
    function closeModal(result) {
        modalOverlay.style.display = "none";
        callback(result);
        okButton.onclick = null;
        cancelButton.onclick = null;
        document.onkeydown = null;
    }

    okButton.onclick = () => {
        let value = modalInput.value.trim();
        closeModal(value ? value : null);
    };

    cancelButton.onclick = () => {
        closeModal(null);
    };

    // Eventos del teclado
    document.onkeydown = (event) => {
        if (event.key === "Enter") {
            okButton.click();
        } else if (event.key === "Escape") {
            cancelButton.click();
        }
    };
}

// Mostrar el modal al hacer clic en el botón
showPromptButton.onclick = () => {
    showPrompt("Escribe algo<br>...inteligente :)", function (value) {
        alert(value !== null ? `Tu entrada: ${value}` : "Cancelado");
    });
};
