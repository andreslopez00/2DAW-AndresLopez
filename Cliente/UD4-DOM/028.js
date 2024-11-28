/*028imageGallery.html/.js:Crea una galería de imágenes donde la imagen principal
cambia al hacer clic en una miniatura. Como en Amazon, por ejemplo.*/
"use strict"
let mainImage = document.getElementById("mainImage");
let thumbnails = document.querySelectorAll(".thumbnail");

thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener("click", function () {
        mainImage.src = this.src;
        mainImage.alt = this.alt;
    });
});
