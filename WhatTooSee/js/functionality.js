document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const second_list = document.querySelector('.second_list');
    const list = document.getElementById('ListMenu2');

    // Inicia el carrusel de banners
    var splide1 = new Splide('#bannerSlider', {
        type: 'loop',
        drag: 'free',
        snap: true,
        autoplay: true,
    });

    // Buscar .my-carousel-progress-bar dentro del elemento .my-carousel-progress
    var progressContainer = document.querySelector('.my-carousel-progress');
    var bar = progressContainer.querySelector('.my-carousel-progress-bar');

    // Se modifica la barra de progreso del primer carrusel
    splide1.on('mounted move', function () {
        var end = splide1.Components.Controller.getEnd() + 1;
        var rate = Math.min((splide1.index + 1) / end, 1);

        if (bar) {
            bar.style.width = String(100 * rate) + '%';
        }
    });

    splide1.mount();

    menuToggle.addEventListener('click', function() {
        second_list.classList.toggle('show-menu');
        list.style.flexDirection = 'column';
    });

    const dynamicDiv = document.getElementById('Banner');

    // Escucha cambios en la altura del div
    const observer = new ResizeObserver(entries => {
        for (const entry of entries) {
        const width = entry.contentRect.width;
        // Ajusta la anchura basada en la altura, por ejemplo, para una relación de aspecto 4:3
        const height = width / 2;
        dynamicDiv.style.height = height + 'px';
        }
    });

    observer.observe(dynamicDiv);
});