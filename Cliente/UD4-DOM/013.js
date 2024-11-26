/*013createList.html/.js: Escribir una interfaz para crear una lista de lo que ingresa un
usuario. Para cada item de la lista:
Preguntar al usuario acerca del contenido usando prompt.
Crear el <li> con ello y agregarlo a <ul>.
Continuar hasta que el usuario cancela el ingreso (presionando Esc o con un ingreso
vacío).
Todos los elementos deben ser creados dinámicamente.
Si el usuario ingresa etiquetas HTML, deben ser tratadas como texto*/
"use strict"
let ul = document.getElementById('user-list');
while (true) {
    let input = prompt("Ingresa un elemento para la lista (deja vacío para salir):");
    if (!input) break; // Salir si el usuario cancela o deja vacío
    let li = document.createElement('li');
    li.textContent = input; // Asegurarse de tratar HTML como texto
    ul.appendChild(li);
}
