/* 036formatToRelative.js/.html: Cambia el formato a fecha relativa. Escribe una función
formatDate(date) que muestre la fecha en el siguiente formato:
Si a partir de la fecha date pasó menos de 1 segundo, debe devolver "ahora mismo".
De no ser así, si a partir de la fecha date pasó menos de 1 minuto, debe retornar "hace
n seg,".
De no ser así, si pasó menos de una hora, debe devolver "hace n min.".
De no ser así, debe retornar la fecha completa en el formato "DD.MM.AA HH:mm". Es
decir: "día.mes.año horas:minutos", cada uno de ellos en formato de 2 dígitos, por ej.
31.12.16 10:00.
*/
"use strict"
function formatDate(fecha) {
    const ahora = new Date();
    const diferencia = (ahora - fecha) / 1000; 

    if (diferencia < 1) return "ahora mismo";
    if (diferencia < 60) return `hace ${Math.floor(diferencia)} seg.`;
    if (diferencia < 3600) return `hace ${Math.floor(diferencia / 60)} min.`;

    const dia = String(fecha.getDate()).padStart(2, '0');
    const mes = String(fecha.getMonth() + 1).padStart(2, '0');
    const año = String(fecha.getFullYear()).slice(2);
    const horas = String(fecha.getHours()).padStart(2, '0');
    const minutos = String(fecha.getMinutes()).padStart(2, '0');

    return `${dia}.${mes}.${año} ${horas}:${minutos}`;
}

console.log(formatDate(new Date(new Date() - 1))); 
console.log(formatDate(new Date(new Date() - 30 * 1000))); 
console.log(formatDate(new Date(new Date() - 5 * 60 * 1000))); 
console.log(formatDate(new Date(new Date() - 86400 * 1000))); 
