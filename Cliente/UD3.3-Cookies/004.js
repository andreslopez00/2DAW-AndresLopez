/* 004.js - Comprobar la existencia de una cookie
Crea una función que verifique si existe una cookie llamada user. Si existe, muestra su
valor; si no, crea una con valor "Invitado"*/
"use strict"
function setCookie(nombre, valor, dias) {
  let fecha = new Date();
  fecha.setTime(fecha.getTime() + (dias * 24 * 60 * 60 * 1000));
  document.cookie = `${nombre}=${valor}; expires=${fecha.toUTCString()}; path=/`;
}

function getCookie(nombre) {
  let name = `${nombre}=`;
  let cookies = document.cookie.split(';');
  for (let cookie of cookies) {
      while (cookie.charAt(0) === ' ') cookie = cookie.substring(1);
      if (cookie.indexOf(name) === 0) return cookie.substring(name.length);
  }
  return "";
}

function comprobarCookie() {
  let usuario = getCookie("user");
  if (usuario) {
      alert(`Cookie encontrada: ${usuario}`);
  } else {
      setCookie("user", "Invitado", 7);
      alert("Cookie no encontrada, creada con valor 'Invitado'.");
  }
}