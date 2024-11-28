/*031addOption.html/.js: Añade una opción al select. Tenemos un <select>:
<select id="genres">
<option value="rock">Rock</option>
<option value="blues" selected>Blues</option>
</select>
Utiliza JavaScript para:
Mostrar el valor y el texto del option seleccionado.
Añadir un option: <option value="classic">Classic</option>.
Seleccionarlo.
Nota, si has hecho todo bien, tu alert debería mostrar blues*/
"use strict"
let genres = document.getElementById("genres");

let selectedOption = genres.options[genres.selectedIndex];
alert(`Valor: ${selectedOption.value}, Texto: ${selectedOption.text}`);

let newOption = new Option("Classic", "classic");
genres.add(newOption);

newOption.selected = true;
