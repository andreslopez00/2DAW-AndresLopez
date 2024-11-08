/* 035getSecondsToAfterTomorrow(): ¿Cuantos segundos faltan para el día de después
de mañana? Crea una función getSecondsToAfterTomorrow() que devuelva la cantidad
de segundos que faltan para el día después de mañana.
Por ejemplo, si ahora son las 23:00, entonces:
getSecondsToAfterTomorrow() == 3600 + todos los segundo de un día
P.D.: La función debe poder funcionar para cualquier día, sin valores fijos en el código”
*/
"use strict"
function getSecondsToAfterTomorrow() {
    let ahora = new Date();
    let afterTomorrow = new Date(ahora.getFullYear(), ahora.getMonth(), ahora.getDate() + 2);
    return Math.floor((afterTomorrow - ahora) / 1000);
}
console.log(getSecondsToAfterTomorrow());
