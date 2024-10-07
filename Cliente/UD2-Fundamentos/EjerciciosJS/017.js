"use strict";
function mostrarFruta() {
    let fruta = prompt("Ingresa una fruta:");
    switch (fruta.toLowerCase()) {
        case 'manzana':
            alert("Las manzanas son rojas.");
            break;
        case 'banana':
            alert("Las bananas son amarillas.");
            break;
        case 'uva':
            alert("Las uvas son moradas.");
            break;
        case 'naranja':
            alert("Las naranjas son naranjas.");
            break;
        default:
            alert("No conozco esa fruta.");
    }
}
