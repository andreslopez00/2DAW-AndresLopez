/*012aaa.html/.js: En el ejemplo de abajo, la llamada table.remove() quita la tabla del
documento. Pero si la ejecutas, puedes ver que el texto “aaa”` es aún visible. ¿Por qué
ocurre esto?
<table id="table">
aaa
<tr>
<td>Test</td>
</tr>
</table>
<script>
alert(table); // la tabla, tal como debería ser
table.remove();
// ¿Por qué aún está "aaa" en el documento?
</script>*/
"use strict"
let table = document.getElementById('table');
alert(table); 
table.remove();
// El texto "aaa" sigue visible porque no forma parte de la tabla,
// esta fuera de las etiquetas <tr> y no es eliminado con table.remove().
