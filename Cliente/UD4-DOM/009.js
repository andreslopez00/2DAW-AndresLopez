/*009getAttribute.html/.js: Escribe el código para obtener el atributo data-widget-name
del documento y leer su valor.
<!DOCTYPE html>
<html>
<body>
<div data-widget-name="menu">Elige el género</div>
</body>
</html>*/
"use strict"
let widget = document.querySelector('[data-widget-name]');
let attributeValue = widget.getAttribute('data-widget-name');
console.log(attributeValue); // Muestra "menu"
