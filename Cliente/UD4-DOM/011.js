/*011cleaning.html/.js: Crea una función clear(elem) que remueva todo del elemento.
<ol id="elem">
<li>Hola</li>
<li>mundo</li>
</ol>
<script>
function clear(elem) { /* tu código */ 
clear(elem); // borra la lista*/
"use strict"
function clear(elem) {
    elem.innerHTML = ''; // Limpia todo el contenido
}

let elem = document.getElementById('elem');
clear(elem);
