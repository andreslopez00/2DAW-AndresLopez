/* 011addPropertyToString.js/.html: ¿Puedo agregar una propiedad a un string?:
Considera el siguiente código:
let str = "Peter";
str.test = 5;
alert(str.test);
Qué piensas: ¿funcionará? ¿Qué mostrará? ¿Por qué?*/
"use strict"
let str = "Peter";
str.test = 5;
alert(str.test);
/*No funciona. str es un "string primitivo" en JavaScript, y aunque JavaScript convierte automáticamente
los primitivos en objetos temporales cuando intentamos asignarles propiedades,
estos objetos temporales no retienen las propiedades una vez que desaparecen.
Por lo tanto, alert(str.test); mostrará undefined */