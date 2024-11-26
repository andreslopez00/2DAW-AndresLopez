/*014paintTree.html/.js: Escribe una función createTree que crea una lista ramificada
ul/li desde un objeto ramificado. Por ejemplo:
let data = {
"Fish": {
"trout": {},
"salmon": {}
},
"Tree": {
"Huge": {
"sequoia": {},
"oak": {}
},
"Flowering": {
"apple tree": {},
"magnolia": {}
}
}
};
La sintaxis:
let container = document.getElementById('container');
createTree(container, data); // crea el árbol en el contenedor
El árbol resultante debe verse así:
Hay dos formas para resolver esta tarea:
Crear el HTML para el árbol y entonces asignarlo a container.innerHTML.
Crear los nodos del árbol y añadirlos con métodos DOM.
Haz ambas soluciones.
P.S. El árbol no debe tener elementos “extras” como <ul></ul> vacíos para las hojas.*/
"use strict"
let data = {
    "Fish": {
        "trout": {},
        "salmon": {}
    },
    "Tree": {
        "Huge": {
            "sequoia": {},
            "oak": {}
        },
        "Flowering": {
            "apple tree": {},
            "magnolia": {}
        }
    }
};

// Solución con innerHTML
function createTreeHTML(container, data) {
    container.innerHTML = generateHTML(data);
}

function generateHTML(data) {
    let html = '<ul>';
    for (let key in data) {
        html += `<li>${key}${generateHTML(data[key])}</li>`;
    }
    html += '</ul>';
    return html.replace('<ul></ul>', ''); // Evita listas vacías
}

// Solución con DOM
function createTreeDOM(container, data) {
    let ul = document.createElement('ul');
    for (let key in data) {
        let li = document.createElement('li');
        li.textContent = key;
        let childUl = createTreeDOM(document.createElement('div'), data[key]);
        if (childUl) li.appendChild(childUl);
        ul.appendChild(li);
    }
    return ul.children.length ? ul : null;
}

let container = document.getElementById('container');
createTreeHTML(container, data); // Primera solución
// createTreeDOM(container, data); // Segunda solución
