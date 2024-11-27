/*023collapsableMenu.html/.js: Crea un menú que se abra/colapse al hacer click. Ej*/
"use strict"
let menu = document.getElementById('menu');
let menuContent = document.getElementById('menuContent');

menu.addEventListener('click', () => {
    menuContent.style.display = menuContent.style.display === 'none' ? 'block' : 'none';
});
