/* 016fixInfinityLoop.js/.html: Este bucle es infinito. Nunca termina, ¿por qué?
let i = 0;
while (i != 10) {
i += 0.2;
}*/
"use strict"
let i = 0;
while (i != 10) {
    i += 0.2;
}
/* El bucle es infinito porque i += 0.2 no alcanza exactamente el valor 10
 debido a las imprecisiones de los números de punto flotante en JavaScript.*/ 