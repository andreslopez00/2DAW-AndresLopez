/*029selectListItems.html/.js: Cree una lista donde los elementos son seleccionables,
como en los administradores de archivos. Un clic en un elemento de la lista selecciona
solo ese elemento (agrega la clase .selected), deselecciona todos los demás.
Si se hace un clic con Ctrl (Cmd para Mac), el estado seleccionado/deseleccionado
cambia para ese solo elemento, los otros elementos no se modifican.
PD: Para esta tarea, podemos suponer que los elementos de la lista son solo de texto.
No hay etiquetas anidadas. Evita la selección nativa del navegador del texto en los
clics.*/
"use strict"
let list = document.getElementById("selectableList");

list.addEventListener("click", function (event) {
    let target = event.target;

    if (target.tagName === "LI") {
        if (event.ctrlKey || event.metaKey) {
            target.classList.toggle("selected");
        } else {
            let items = list.querySelectorAll("li");
            items.forEach(item => item.classList.remove("selected"));
            target.classList.add("selected");
        }
    }
});
