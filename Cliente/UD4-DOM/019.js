/*019notify.html/.js/.css: Escribir una función showNotification(options) que cree una
notificación: <div class="notification"> con el contenido dado. La notificación debería
desaparecer automáticamente después de 1.5 segundos. Las opciones son:
// muestra un elemento con el texto "Hello" cerca de la parte superior de la ventana
showNotification({
top: 10, // 10px desde la parte superior de la ventana (por defecto es 0px)
right: 10, // 10px desde el borde derecho de la ventana (por defecto es 0px)
html: "Hello!", // el HTML de la notificación
className: "welcome" // una clase adicional para el "div" (opcional)
});
Usar posicionamiento CSS para mostrar el elemento en las coordenadas (top/right)
dadas.
.notification {
position: fixed; z-index: 1000;
padding: 5px; border: 1px solid black;
font-size: 20px; background: white;
text-align: center;
}
.welcome {
background: #b80000;
color: yellow;
}*/
"use strict"
function showNotification({ top = 0, right = 0, html = '', className = '' }) {
    let notification = document.createElement('div');
    notification.className = `notification ${className}`;
    notification.style.top = `${top}px`;
    notification.style.right = `${right}px`;
    notification.innerHTML = html;

    document.body.appendChild(notification);

    setTimeout(() => {
        notification.remove();
    }, 1500);
}

// Ejemplo de uso
document.getElementById('notifyButton').addEventListener('click', () => {
    showNotification({
        top: 10,
        right: 10,
        html: 'Hello!',
        className: 'welcome'
    });
});
