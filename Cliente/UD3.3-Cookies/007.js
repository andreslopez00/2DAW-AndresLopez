/* 007.js - Guardar y recuperar múltiples cookies
Crea una función que almacene el nombre de usuario y la fecha de la última visita en
cookies separadas y que las recupere para mostrar un mensaje de bienvenida*/
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

function guardarUsuario(usuario) {
  setCookie("username", usuario, 7);
  setCookie("lastVisit", new Date().toISOString(), 7);
  alert("Usuario guardado");
}

function mostrarBienvenida() {
  let usuario = getCookie("username");
  let ultimaVisita = getCookie("lastVisit");
  if (usuario && ultimaVisita) {
      alert(`Bienvenido nuevamente ${usuario}. Última visita: ${new Date(ultimaVisita).toLocaleString()}`);
  } else {
      alert("Bienvenido, esta es tu primera vez.");
  }
}
