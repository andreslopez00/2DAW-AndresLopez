/* 027transformSnakeToCamel.js/.html: Escribe la función camelize(str) que convierta
palabras separadas por _como “mi_cadena_corta” en palabras con mayúscula
“miCadenaCorta”. Esto sería: quitar todos los _ y que cada palabra después de _
comience con mayúscula. Ejemplos:
camelize("background_color") == 'backgroundColor';
camelize("list_style_image") == 'listStyleImage';
camelize("_webkit_transition") == 'WebkitTransition';
P.D. Pista: usa split para dividir el string en un array, transfórmalo y vuelve a unirlo
(join).*/
"use strict"
function camelize(str) {
    return str
      .split('_')          
      .map((word, index) => index === 0 ? word : word[0].toUpperCase() + word.slice(1)) 
      .join('');           
  }
  
  console.log(camelize("background_color"));   
  console.log(camelize("list_style_image"));    
  console.log(camelize("_webkit_transition")); 
  