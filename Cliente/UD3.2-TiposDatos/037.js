/* 037transformWithIVA.js/.html: Imagina que tienes una lista de precios de productos
sin IVA y necesitas calcular los precios finales con un IVA del 21%. Utiliza map para
transformar cada precio en el array original y devolver uno nuevo con los precios
finales.
1. Crea un array llamado preciosSinIVA que contenga los siguientes valores: [100,
150, 200, 250, 300].
2. Utiliza el método map para recorrer el array preciosSinIVA y calcular el precio
final de cada producto, sumando el 21% de IVA a cada precio.
3. Almacena los precios con IVA en un nuevo array llamado preciosConIVA.
4. Muestra en consola tanto el array preciosSinIVA como el array preciosConIVA.
5. Muestra todas las claves y el precio con y sin IVA.
*/
"use strict"
let preciosSinIVA = [100, 150, 200, 250, 300];
let preciosConIVA = preciosSinIVA.map(precio => precio * 1.21);

console.log("Precios sin IVA:", preciosSinIVA);
console.log("Precios con IVA:", preciosConIVA);

preciosSinIVA.forEach((precio, index) => {
    console.log(`Precio sin IVA: ${precio}, Precio con IVA: ${preciosConIVA[index]}`);
});
