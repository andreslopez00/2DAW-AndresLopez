/*023collapsableMenu.html/.js: Crea un menú que se abra/colapse al hacer click. Ej*/
"use strict"
document.querySelectorAll('.caret').forEach(caret => {
    caret.addEventListener('click', function () {
        this.classList.toggle('open'); 
        let nestedList = this.nextElementSibling; 
        if (nestedList) {
            nestedList.classList.toggle('active'); // Muestra/oculta la lista
        }
    });
});

