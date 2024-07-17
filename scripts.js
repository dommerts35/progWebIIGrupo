// scripts.js

// Funcionalidad de carrusel de imágenes
let currentImageIndex = 0;
const images = [
    'https://via.placeholder.com/573x350',
    'https://via.placeholder.com/573x350/0000FF/808080',
    'https://via.placeholder.com/573x350/FF0000/FFFFFF'
];

const featuredImage = document.getElementById('featured-image');
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');

prevBtn.addEventListener('click', () => {
    currentImageIndex = (currentImageIndex > 0) ? currentImageIndex - 1 : images.length - 1;
    featuredImage.src = images[currentImageIndex];
});

nextBtn.addEventListener('click', () => {
    currentImageIndex = (currentImageIndex < images.length - 1) ? currentImageIndex + 1 : 0;
    featuredImage.src = images[currentImageIndex];
});

// Funcionalidad para reproducir video (ya incluida con el atributo "controls" en la etiqueta video)
