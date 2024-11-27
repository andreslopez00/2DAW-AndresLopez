/*020hideTextButton.html/.js: Agrega JavaScript al button para hacer que <div id="text">
desaparezca al hacerle click.*/
"use strict"
let button = document.getElementById('hideButton');
let text = document.getElementById('text');

button.addEventListener('click', () => {
    text.style.display = 'none';
});
