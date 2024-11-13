/* 001.js - Crear una cookie simple
Crea una cookie llamada user que almacene el valor "Juan" y que expire en 1 semana*/
"use strict"
function crearCookie() {
  let fecha = new Date();
  fecha.setTime(fecha.getTime() + (7 * 24 * 60 * 60 * 1000)); // 1 semana
  document.cookie = `user=Juan; expires=${fecha.toUTCString()}; path=/`;
  alert("Cookie creada");
}

