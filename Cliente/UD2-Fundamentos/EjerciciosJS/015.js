"use strict";
function celsiusAFahrenheit() {
    let celsius = prompt("Ingresa la temperatura en Celsius:");
    let fahrenheit = (celsius * 9/5) + 32;
    alert(celsius + "°C son " + fahrenheit + "°F");
}