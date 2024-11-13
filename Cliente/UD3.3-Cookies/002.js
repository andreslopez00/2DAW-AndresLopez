/* 002.js - Leer una cookie
Crea una función que lea una cookie llamada user y la muestre en una alerta*/
"use strict"
function getCookie(nombre) {
  let name = `${nombre}=`;
  let cookies = document.cookie.split(';');
  for (let cookie of cookies) {
      while (cookie.charAt(0) === ' ') cookie = cookie.substring(1);
      if (cookie.indexOf(name) === 0) return cookie.substring(name.length);
  }
  return "";
}

function leerCookie() {
  let usuario = getCookie("user");
  if (usuario) {
      alert(`Cookie encontrada: ${usuario}`);
  } else {
      alert("Cookie no encontrada.");
  }
}
