/*026orderTable.html/.js: Haz que la tabla se pueda ordenar: los clics en elementos <th>
deberían ordenarla por la columna correspondiente. Cada <th> tiene su tipo de datos
en el atributo, como esto:
<table id="grid">
<thead>
<tr>
<th data-type="number">Age</th>
<th data-type="string">Name</th>
</tr>
</thead>
<tbody>
<tr>
<td>5</td>
<td>John</td>
</tr>
<tr>
<td>10</td>
<td>Ann</td>
</tr>
...
</tbody>
</table>
En el ejemplo anterior la primera columna tiene números y la segunda cadena. La
función de ordenamiento debe manejar el orden de acuerdo con el tipo de dato.
Solamente los tipos "string" y "number" deben ser soportados*/
"use strict"
let grid = document.getElementById("grid");

grid.addEventListener("click", function (event) {
    let th = event.target.closest("th");
    if (!th) return;

    let type = th.dataset.type;
    let columnIndex = Array.from(th.parentNode.children).indexOf(th);
    let rows = Array.from(grid.tBodies[0].rows);

    rows.sort((rowA, rowB) => {
        let cellA = rowA.cells[columnIndex].innerText;
        let cellB = rowB.cells[columnIndex].innerText;

        if (type === "number") {
            return cellA - cellB;
        } else {
            return cellA.localeCompare(cellB);
        }
    });

    grid.tBodies[0].append(...rows);
});
