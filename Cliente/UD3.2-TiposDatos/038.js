/* 038useSetwithUsers.js/.html: Tienes una lista de usuarios en la cual algunos están
duplicados y deseas obtener una lista única de usuarios. Luego, quieres organizar a los
usuarios en tres categorías de edad: "Menores de 18", "Adultos" (18-60) y "Mayores
de 60". Usa Set para eliminar duplicados y organiza los resultados en un objeto con
estas categorías.
1. Crea un array llamado usuarios con objetos que representen a los usuarios.
Cada objeto debe tener las propiedades nombre y edad. Incluye algunos
usuarios duplicados:
const usuarios = [
{ nombre: "Ana", edad: 15 },
{ nombre: "Luis", edad: 25 },
{ nombre: "Ana", edad: 15 },
{ nombre: "Marta", edad: 45 },
{ nombre: "Carlos", edad: 70 },
{ nombre: "Luis", edad: 25 },
{ nombre: "Pedro", edad: 17 },
];
2. Usa Set para eliminar los duplicados basándote en la combinación de nombre y
edad.
3. Organiza los usuarios en tres categorías según su edad:
o "Menores de 18" para usuarios menores de 18 años.
o "Adultos" para usuarios entre 18 y 60 años.
o "Mayores de 60" para usuarios de más de 60 años.
4. Devuelve un objeto llamado usuariosPorCategoria que tenga cada categoría
como propiedad, y dentro de cada categoría, un array de usuarios únicos.
*/
"use strict"
const usuarios = [
    { nombre: "Ana", edad: 15 },
    { nombre: "Luis", edad: 25 },
    { nombre: "Ana", edad: 15 },
    { nombre: "Marta", edad: 45 },
    { nombre: "Carlos", edad: 70 },
    { nombre: "Luis", edad: 25 },
    { nombre: "Pedro", edad: 17 },
];

let usuariosNoRepetidos = new Map();
usuarios.forEach(usuario => {
    const idUnico = `${usuario.nombre}-${usuario.edad}`;
    if (!usuariosNoRepetidos.has(idUnico)) {
        usuariosNoRepetidos.set(idUnico, usuario);
    }
});

let usuariosNoRepetidos1 = Array.from(usuariosNoRepetidos.values());

let usuariosPorCategoria = {
    "Menores de 18": usuariosNoRepetidos1.filter(usuario => usuario.edad < 18),
    "Adultos": usuariosNoRepetidos1.filter(usuario => usuario.edad >= 18 && usuario.edad <= 60),
    "Mayores de 60": usuariosNoRepetidos1.filter(usuario => usuario.edad > 60)
};

console.log("Usuarios por categoría:", usuariosPorCategoria);