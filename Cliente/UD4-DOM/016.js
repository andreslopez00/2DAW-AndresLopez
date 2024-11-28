/*016paintClock.html/.js: Reloj coloreado con setInterval
Crea un reloj coloreado como aquí:
Usa HTML/CSS para el estilo, JavaScript solamente actualiza la hora en elements*/
"use strict"
let clockInterval;

function updateClock() {
    let now = new Date();
    let hours = String(now.getHours()).padStart(2, '0');
    let minutes = String(now.getMinutes()).padStart(2, '0');
    let seconds = String(now.getSeconds()).padStart(2, '0');

    document.querySelector('.hours').textContent = hours;
    document.querySelector('.minutes').textContent = minutes;
    document.querySelector('.seconds').textContent = seconds;
}

document.getElementById('startButton').addEventListener('click', () => {
    if (!clockInterval) {
        updateClock(); // Actualiza inmediatamente antes de iniciar el intervalo
        clockInterval = setInterval(updateClock, 1000);
    }
});

document.getElementById('stopButton').addEventListener('click', () => {
    clearInterval(clockInterval);
    clockInterval = null;
});
