/*015creatingCalendar.html/.js: Escribe una función createCalendar(elem, year, month).
Su llamado debe crear un calendario para el año y mes dados y ponerlo dentro de
elem. El calendario debe ser una tabla, donde una semana es <tr>, y un día es<td>. Los
encabezados de la tabla deben ser <th> con los nombres de los días de la semana: el
primer día debe ser “lunes” y así hasta “domingo”.
P.S. Para esta tarea es suficiente generar el calendario, no necesita aún ser pulsable.
Por ejemplo, createCalendar(cal, 2012, 9) debe generar en el elemento cal el siguiente
calendario:*/
"use strict"
function createCalendar(elem, year, month) {
    let date = new Date(year, month - 1);
    let table = `<table><tr><th>Lunes</th><th>Martes</th><th>Miércoles</th>
        <th>Jueves</th><th>Viernes</th><th>Sábado</th><th>Domingo</th></tr><tr>`;

    // Espacios antes del primer día
    for (let i = 1; i < date.getDay(); i++) {
        table += '<td></td>';
    }

    while (date.getMonth() === month - 1) {
        table += `<td>${date.getDate()}</td>`;
        if (date.getDay() === 0) table += '</tr><tr>'; // Nueva semana
        date.setDate(date.getDate() + 1);
    }

    table += '</tr></table>';
    elem.innerHTML = table;
}

let calendar = document.getElementById('calendar');
createCalendar(calendar, 2024, 11); // Genera el calendario de noviembre 2024
