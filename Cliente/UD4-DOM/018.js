/*018orderTable.html/.js:
<table>
<thead>
<tr>
<th>Name</th><th>Surname</th><th>Age</th>
</tr>
</thead>
<tbody>
<tr>
<td>John</td><td>Smith</td><td>10</td>
</tr>
<tr>
<td>Pete</td><td>Brown</td><td>15</td>
</tr>
<tr>
<td>Ann</td><td>Lee</td><td>5</td>
</tr>
<tr>
<td>...</td><td>...</td><td>...</td>
</tr>
</tbody>
</table>
Puede haber más filas en ella.
Escribe el código para ordenarla por la columna "name"*/
"use strict"
let table = document.getElementById('sortableTable');
let tbody = table.querySelector('tbody');

// Ordenar por la columna "Name"
let rows = Array.from(tbody.rows);

rows.sort((rowA, rowB) => {
    let nameA = rowA.cells[0].textContent.toLowerCase();
    let nameB = rowB.cells[0].textContent.toLowerCase();
    return nameA.localeCompare(nameB);
});

tbody.append(...rows);
