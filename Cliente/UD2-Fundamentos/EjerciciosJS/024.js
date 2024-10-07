"use strict";
let cont = 0;
function contador(){
    cont++;
    alert(cont);
}
document.getElementById("boton").addEventListener("click", contador);
