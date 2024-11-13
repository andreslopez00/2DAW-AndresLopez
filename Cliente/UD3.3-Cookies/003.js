/* 003.js - Borrar una cookie
Crea una función que borre la cookie user poniendo una fecha de caducidad pasada*/
"use strict"
function borrarCookie() {
  let fecha = new Date(0); // Fecha pasada
  document.cookie = `user=; expires=${fecha.toUTCString()}; path=/`;
  alert("Cookie borrada");
}
