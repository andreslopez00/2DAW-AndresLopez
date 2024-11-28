/*032editDiv.html/.js: Crea un <div> que se vuelva <textarea> cuando es clicado.
El textarea permite editar HTML en <div>. Cuando el usuario presiona Enter o se pierde
el foco, el <textarea> se vuelve <div> de nuevo, y su contenido se vuelve el HTML del
<div>.*/
"use strict"
let editableDiv = document.getElementById("editableDiv");

editableDiv.addEventListener("click", function () {
    let textarea = document.createElement("textarea");
    textarea.value = this.innerHTML;

    textarea.addEventListener("blur", function () {
        editableDiv.innerHTML = this.value;
        textarea.remove();
    });

    textarea.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            editableDiv.innerHTML = this.value;
            textarea.remove();
        }
    });

    this.innerHTML = "";
    this.append(textarea);
    textarea.focus();
});
