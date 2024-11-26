/*016paintClock.html/.js: Reloj coloreado con setInterval
Crea un reloj coloreado como aquí:
Usa HTML/CSS para el estilo, JavaScript solamente actualiza la hora en elements*/
"use strict"
function updateClock() {
    let clock = document.getElementById('clock');
    let now = new Date();
    clock.textContent = now.toLocaleTimeString();
}

setInterval(updateClock, 1000); // Actualiza cada segundo
updateClock(); // Muestra la hora inmediatamente
