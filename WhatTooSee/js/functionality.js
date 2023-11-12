document.addEventListener('DOMContentLoaded', function() {
    // Muestra el menu
    const menuToggle = document.querySelector('.menu-toggle');
    const second_list = document.querySelector('.second_list');
    const list = document.getElementById('ListMenu2');
    
    menuToggle.addEventListener('click', function() {
        second_list.classList.toggle('show-menu');
        list.style.flexDirection = 'column';
    });

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

    // Escucha cambios en la altura del navbar, el margen del container y el menu
    const navbar = document.getElementById('Menu-top');
    const container = document.getElementById('pageContent');
    const menu = document.getElementById('secondListDiv');
    let h;

    const observerNavbar = new ResizeObserver(entries => {
        for (const entry of entries) {
            const width = entry.contentRect.width;
            h = width / 13.65;
            navbar.style.height = h + 'px';
        }
    });

    const observerContainer = new ResizeObserver(entries => {
        for (const entry of entries) {
            container.style.marginTop = (h+10) + 'px';
            menu.style.marginTop = h + 'px';
        }
    });

    const observerMenu = new ResizeObserver(entries => {
    });

    observerNavbar.observe(navbar);
    observerContainer.observe(container);
    observerMenu.observe(menu);

    // Escucha cambios en la altura del banner
    const banner = document.getElementById('Banner');

    const observerBanner = new ResizeObserver(entries => {
        for (const entry of entries) {
        const width = entry.contentRect.width;
        const height = width / 2;
        banner.style.height = height + 'px';
        }
    });

    observerBanner.observe(banner);

    // Inicia el carrusel de top peliculas
    var splide2 = new Splide('#movieSlider', {
        type: 'loop',
        perPage: 3,
        perMove: 1,
        snap: true,
        autoplay: true,
    });

    splide2.mount();

    // Inicia el carrusel de top series
    var splide3 = new Splide('#serieSlider', {
        type: 'loop',
        perPage: 3,
        perMove: 1,
        snap: true,
        autoplay: true,
    });

    splide3.mount();

    // Inicia el carrusel de peliculas estreno
    var splide4 = new Splide('#movieRelease', {
        type: 'loop',
        perPage: 3,
        perMove: 1,
        snap: true,
        autoplay: true,
    });

    splide4.mount();

    // Inicia el carrusel de series estreno
    var splide5 = new Splide('#serieRelease', {
        type: 'loop',
        perPage: 3,
        perMove: 1,
        snap: true,
        autoplay: true,
    });

    splide5.mount();

    // Escucha cambios en la altura del carrusel de posters
    const elementosPosterCarouselBase = document.getElementsByClassName('posterCarouselBase');

    const observerPosterCarouselBase = new ResizeObserver(entries => {
        for (const entry of entries) {
            const width = entry.contentRect.width;
            const height = width / 1.8618;
            
            // Itera sobre todos los elementos y ajusta la altura
            for (const elemento of elementosPosterCarouselBase) {
                elemento.style.height = height + 'px';
            }
        }
    });

    // Observa todos los elementos de la clase 'posterCarouselBase'
    for (const elemento of elementosPosterCarouselBase) {
        observerPosterCarouselBase.observe(elemento);
    }
});

// Direccionamiento de paginas
function redireccionar(index) {
    if(index == 0){
        location.reload();
    }
    if(index == 1){
        window.location.href = '../pages/productions.html';
    }
    if(index == 2){
        window.location.href = '../pages/community.html';
    }
    if(index == 3){
        window.location.href = '../pages/login.html';
    }
}