/* 010.js - Manejar cookies con fechas personalizadas
Crea una cookie con una fecha de expiración que el usuario pueda definir, pidiendo el
número de días que quiere mantener la cookie.*/
"use strict"
function setCookie(nombre, valor, dias) {
  let fecha = new Date();
  fecha.setTime(fecha.getTime() + (dias * 24 * 60 * 60 * 1000));
  document.cookie = `${nombre}=${valor}; expires=${fecha.toUTCString()}; path=/`;
}

function crearCookiePersonalizada() {
  let dias = document.getElementById("dias").value;
  if (dias && parseInt(dias) > 0) {
      setCookie("customCookie", "valorPersonalizado", parseInt(dias));
      document.getElementById("mensaje").innerText = `Cookie creada por ${dias} días`;
  } else {
      alert("Por favor, ingresa un número de días válido.");
  }
}