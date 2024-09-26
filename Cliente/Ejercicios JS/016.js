function adivinaNumero() {
    var numeroAleatorio = Math.floor(Math.random() * 10) + 1;
    var intento;
    do {
        intento = prompt("Adivina el número (entre 1 y 10):");
        if (intento == numeroAleatorio) {
            alert("¡Adivinaste correctamente!");
        } else {
            alert("Inténtalo de nuevo");
        }
    } while (intento != numeroAleatorio);
}