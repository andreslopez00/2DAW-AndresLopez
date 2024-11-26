/*005countDesdendant.html/.js: Hay un árbol estructurado como ul/li anidado.
Escribe el código que para cada <li> muestra:
¿Cuál es el texto dentro de él (sin el subárbol)?
El número de <li> anidados: todos los descendientes, incluidos los profundamente
anidados.
 Animales
o Mamíferos
 Vacas
 Burros
 Perros
 Tigres
o Otros
 Serpientes
 Aves
 Lagartos
 Peces
o Acuario
 Guppy
 Angelote
o Mar
 Trucha de mar*/
"use strict"
let tree = document.getElementById("tree");

// Función para contar todos los descendientes de un <li>
function countDescendants(li) {
  return li.querySelectorAll("li").length;
}
let listItems = tree.querySelectorAll("li");
listItems.forEach((li) => {
  // Texto dentro del <li>
  let text = li.firstChild.textContent.trim();
  // Número de descendientes
  let descendantCount = countDescendants(li);
  console.log(`Texto: "${text}", Número de <li> descendientes: ${descendantCount}`);
});
