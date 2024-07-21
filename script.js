document.addEventListener('DOMContentLoaded', function() {
    let currentImageIndex = 0;
    const images = document.querySelectorAll('.slider-image');

    function showImage(index) {
        images.forEach(image => image.classList.remove('active'));
        images[index].classList.add('active');
    }

    function nextImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        showImage(currentImageIndex);
    }

    setInterval(nextImage, 5000); // Cambia la imagen cada 5 segundos (ajustable)
});
