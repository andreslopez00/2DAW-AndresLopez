/* 009.js - Sistema de carrito de compras
Simula un carrito de compras que almacene el número de artículos seleccionados en
una cookie. Al agregar un nuevo artículo, actualiza el valor de la cookie*/
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

function agregarAlCarrito() {
  let cantidad = getCookie("cartCount");
  cantidad = cantidad ? parseInt(cantidad) + 1 : 1;
  setCookie("cartCount", cantidad, 7);
  document.getElementById("carrito").innerText = `Artículos en el carrito: ${cantidad}`;
}

agregarAlCarrito();
