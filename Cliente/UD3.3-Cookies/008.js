/* 008.js - Contador de visitas con cookies
Crea una página que cuente cuántas veces ha sido visitada utilizando cookies. Si es la
1ª vez, muestra un mensaje de bienvenida. Si no, dice cuántas veces ha sido visitada*/
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

function incrementarContador() {
  let contador = getCookie("visitCount");
  if (contador) {
      contador = parseInt(contador) + 1;
      setCookie("visitCount", contador, 365);
      document.getElementById("mensaje").innerText = `Esta es tu visita número ${contador}`;
  } else {
      setCookie("visitCount", 1, 365);
      document.getElementById("mensaje").innerText = "Bienvenido! Esta es tu primera visita.";
  }
}

incrementarContador();
