/*010purpleExternalLinks.html/.js: Haz todos los enlaces externos de color purple
alterando su propiedad style.
Un link es externo si:
 Su href tiene ://
 Pero no comienza con http://internal.com.
<a name="list">the list</a>
<ul>
<li><a href="http://google.com">http://google.com</a></li>
<li><a href="/tutorial">/tutorial.html</a></li>
<li><a href="local/path">local/path</a></li>
<li><a href="ftp://ftp.com/my.zip">ftp://ftp.com/my.zip</a></li>
<li><a href="http://nodejs.org">http://nodejs.org</a></li>
<li><a href="http://internal.com/test">http://internal.com/test</a></li>
</ul>
<script>
// establecer un estilo para un enlace
let link = document.querySelector('a');
link.style.color = 'purple';
</script>
010inserts.html/.js: createTextNode vs innerHTML vs textContent: Tenemos un
elemento DOM vacio elem y un string text. ¿Cuáles de estos 3 comandos harán
exactamente lo mismo? Pon un ejemplo.
elem.append(document.createTextNode(text))
elem.innerHTML = text
elem.textContent = text*/
"use strict"
let links = document.querySelectorAll('a');

links.forEach(link => {
    let href = link.getAttribute('href');
    if (href && href.includes('://') && !href.startsWith('http://internal.com')) {
        link.style.color = 'purple';
    }
});
