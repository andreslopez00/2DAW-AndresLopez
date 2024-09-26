function detectarVocal() {
    var letra = 'k'; 
    if ('aeiou'.includes(letra.toLowerCase())) {
        alert("Es una vocal");
    } else {
        alert("No es una vocal");
    }
}
