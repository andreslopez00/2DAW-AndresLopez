/*034Reto: No Obligatorio: carrousel.html/.js: ¿Eres capaz de crear un carrousel con los
conocimientos que tienes? Yo creo que sí. Adelante.*/
"use strict"
let currentIndex = 0;
let imagesContainer = document.querySelector('.carousel-images');
let images = document.querySelectorAll('.carousel-images img');
let prevButton = document.getElementById('prev');
let nextButton = document.getElementById('next');

function updateCarousel() {
    let offset = -currentIndex * 100;
    imagesContainer.style.transform = `translateX(${offset}%)`;
}

function showNext() {
    currentIndex = (currentIndex + 1) % images.length; 
    updateCarousel();
}

function showPrev() {
    currentIndex = (currentIndex - 1 + images.length) % images.length; 
    updateCarousel();
}

// Añade eventos a los botones
nextButton.addEventListener('click', showNext);
prevButton.addEventListener('click', showPrev);



document.querySelector('.carousel').addEventListener('mouseover', () => {
    clearInterval(autoSlide);
});

document.querySelector('.carousel').addEventListener('mouseout', () => {
    autoSlide = setInterval(showNext, 3000);
});
