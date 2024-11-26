/*017htmlToList.html/.js: Inserta el HTML en la lista. Escribe el código para insertar
<li>2</li><li>3</li> entre dos <li> aquí:
<ul id="ul">
<li id="one">1</li>
<li id="two">4</li>
</ul>*/
"use strict"
let ul = document.getElementById('ul');
let liTwo = document.getElementById('two');

let li2 = document.createElement('li');
li2.textContent = '2';
let li3 = document.createElement('li');
li3.textContent = '3';

ul.insertBefore(li2, liTwo);
ul.insertBefore(li3, liTwo);
