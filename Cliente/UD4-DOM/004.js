/*004searchElements.html/.js:Aquí está el documento con la tabla y el formulario.
¿Cómo encontrar?…
La tabla con id="age-table".
Todos los elementos labeldentro de la tabla (debería haber 3).
El primer td en la tabla (con la palabra “Age”).
El form con name="search".
El primer input en ese formulario.
El último input en ese formulario.
Abra la página index.html en una ventana separada y haga uso de las herramientas del
navegador.
<html>
<body>
<form name="search">
<label>Buscar en la página:
<input type="text" name="search">
</label>
<input type="submit" value="Search!">
</form>
<hr>
<form name="search-person">
Buscar a los visitantes:
<table id="age-table">
<tr>
<td>Edad:</td>
<td id="age-list">
<label>
<input type="radio" name="age" value="young">menor de 18</label>
<label>
<input type="radio" name="age" value="mature">18-50</label>
<label>
<input type="radio" name="age" value="senior">mayor de 50</label>
</td>
</tr>
<tr>
<td>Más:</td>
<td>
<input type="text" name="info[0]">
<input type="text" name="info[1]">
<input type="text" name="info[2]">
</td>
</tr>
</table>
<input type="submit" value="Search!">
</form>
</body>
</html>*/
"use strict"
let ageTable = document.getElementById("age-table");
console.log("Tabla con id='age-table':", ageTable);

let labelsInTable = ageTable.querySelectorAll("label");
console.log("Elementos <label> dentro de la tabla:", labelsInTable);

let firstTd = ageTable.querySelector("td");
console.log("Primer <td> en la tabla:", firstTd);

let searchForm = document.querySelector('form[name="search"]');
console.log('Formulario con name="search":', searchForm);

let firstInput = searchForm.querySelector("input");
console.log("Primer <input> en el formulario:", firstInput);

let allInputsInForm = searchForm.querySelectorAll("input");
let lastInput = allInputsInForm[allInputsInForm.length - 1];
console.log("Último <input> en el formulario:", lastInput);
