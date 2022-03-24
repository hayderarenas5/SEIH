document.addEventListener('DOMcontetloaded', () => {
    const elementosCarousel = document.querySelectorAll('.carousel');
    M.Carousel.init(elementosCarousel, {
        duration: 260,
        dist: -80,
        shift: 5,
        padding: 5,
        numVisible: 5
    });
});