/*  Filtros y transformaciones en arrays de objetos
Crea un array de objetos que represente una lista de productos, cada uno con
propiedades como nombre, precio, disponible. Filtra los productos que estén
disponibles y cuyo precio sea menor a 20 euros. Luego, transforma el array resultante
para mostrar solo los nombres de los productos. */
"use strict"
let productos = [
    { nombre: "Producto 1", precio: 7, disponible: true },
    { nombre: "Producto 2", precio: 25, disponible: false },
    { nombre: "Producto 3", precio: 40, disponible: true },
    { nombre: "Producto 4", precio: 12, disponible: true },
  ];
  
  let productosFiltrados = productos
    .filter(producto => producto.disponible && producto.precio < 20)
    .map(producto => producto.nombre);
  
  console.log("Productos disponibles y económicos:", productosFiltrados);  
  