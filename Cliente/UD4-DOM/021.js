/*021hideButton.html/.js: Crea un botón que se oculte a sí mismo al darle un click.*/
"use strict"
let button = document.getElementById('selfHideButton');

button.addEventListener('click', function () {
    this.style.display = 'none';
});
