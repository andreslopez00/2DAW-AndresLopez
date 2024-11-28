/*027returnFalse.html/.js:¿Por qué en el código de abajo return false no funciona?
<script>
function handler() {
alert( "..." );
return false;
}
</script>
<a href="https://w3.org" onclick="handler()">el navegador irá a w3.org</a>*/
"use strict"
let link = document.getElementById("myLink");

link.addEventListener("click", function (event) {
    event.preventDefault(); // Necesitamos prevenir el comportamiento predeterminado.
    alert("...");
    return false; // Esto no es suficiente por sí solo.
});
