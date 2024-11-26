/*007tagInComment.html/.js: Etiqueta en comentario: ¿Qué muestra este código?
<script>
let body = document.body;
body.innerHTML = "<!--" + body.tagName + "-->";
alert( body.firstChild.data ); // ¿qué hay aquí?
</script>*/
"use strict"
let body = document.body;
body.innerHTML = "<!--" + body.tagName + "-->";
alert(body.firstChild.data); // Muestra "BODY", que es el contenido del comentario
