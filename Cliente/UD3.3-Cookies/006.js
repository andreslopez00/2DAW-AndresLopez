/* 006.js - Actualizar el valor de una cookie
Crea una función que actualice la cookie user con un nuevo valor, manteniendo la
misma fecha de expiración*/
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

function actualizarCookie(nombre, nuevoValor) {
  let cookieActual = getCookie(nombre);
  if (cookieActual) {
      let partes = document.cookie.split(';').find(cookie => cookie.includes(nombre)).split('=');
      let expiracion = partes[1];
      setCookie(nombre, nuevoValor, expiracion);
      alert("Cookie actualizada!");
  } else {
      alert("La cookie no existe.");
  }
}

setCookie('user', 'usuarioInicial', 7);
