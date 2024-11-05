/*012testCuriosity.js/.html: Prueba ejecutando esto:
alert( 9999999999999999 );
¿Qué está pasando?¿Por qué? */
"use strict"
alert(9999999999999999); 
/*JavaScript representa números de punto flotante en el formato de 64 bits IEEE-754,
 lo que limita su precisión a aproximadamente 15-16 dígitos.
  Así que, al llegar a 9999999999999999, el valor se redondea a 10000000000000000 */
