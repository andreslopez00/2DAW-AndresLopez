/* 005.js - Crear una cookie con múltiples parámetros
Crea una cookie llamada session con un valor de active que expire en 2 horas y que
solo sea accesible por conexiones HTTPS (segura).*/
"use strict"
function crearCookieSegura() {
  let fecha = new Date();
  fecha.setTime(fecha.getTime() + (2 * 60 * 60 * 1000)); // 2 horas
  document.cookie = `session=active; expires=${fecha.toUTCString()}; path=/; secure; SameSite=Strict`;
  alert("Cookie creada con parámetros de seguridad");
}
