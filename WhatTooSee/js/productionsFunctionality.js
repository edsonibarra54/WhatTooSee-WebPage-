// Direccionar a pagina peliculas/series
function redireccionar(index) {
    if(index == 0){
        window.location.href = '../pages/index.html';
    }
    if(index == 1){
        location.reload();
    }
    if(index == 2){
        window.location.href = '../pages/community.html';
    }
    if(index == 3){
        window.location.href = '../pages/login.html';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    /**********************************************************************************************************/
    // Muestra el menu
    const menuToggle = document.querySelector('.menu-toggle');
    const second_list = document.querySelector('.second_list');
    const list = document.getElementById('ListMenu2');
    
    menuToggle.addEventListener('click', function() {
        second_list.classList.toggle('show-menu');
        list.style.flexDirection = 'column';
    });

    /**********************************************************************************************************/
    // Funcionalidad del boton
    var title = document.getElementById('title-Container')
    var label = document.getElementById('search-Label')
    var btn = document.getElementById('btn')
    var btnL = document.getElementById('btn-Left')
    var btnR = document.getElementById('btn-Right')

    btnL.addEventListener('click', () => {
        btn.style.left = '0';
        btnL.style.color = '#fff';
        btnR.style.color = '#000';
        title.textContent = 'Movies';
        label.textContent = 'Search for movies';
    });

    btnR.addEventListener('click', () => {
        btn.style.left = '45%';
        btnR.style.color = '#fff';
        btnL.style.color = '#000';
        title.textContent = 'Series';
        label.textContent = 'Search for series';
    });
    
    /**********************************************************************************************************/
    // Escucha cambios en la altura del navbar, el margen del container y el menu
    const navbar = document.getElementById('Menu-top');
    const container = document.getElementById('page-Container');
    const menu = document.getElementById('secondListDiv');
    let h;

    const observerNavbar = new ResizeObserver(entries => {
        for (const entry of entries) {
            const width = entry.contentRect.width;
            if (width > 768){
                h = '75px';
                navbar.style.height = h + 'px';
                container.style.marginTop = h + 'px';
                menu.style.marginTop = h + 'px';
            }
            if (width < 768){
                h = width / 13.65;
                navbar.style.height = h + 'px';
                container.style.marginTop = h + 'px';
            menu.style.marginTop = h + 'px';
            }
        }
    });

    const observerContainer = new ResizeObserver(entries => {
    });

    const observerMenu = new ResizeObserver(entries => {
    });

    observerNavbar.observe(navbar);
    observerContainer.observe(container);
    observerMenu.observe(menu);

    /**********************************************************************************************************/
    //Escuchar cambios en el toggle, la barra de busqueda y los filtros
    const toggle = document.getElementById('button-box');
    const searchbox = document.getElementById('box');
    const filterbox = document.getElementById('filters-Container');

    const observerToggle = new ResizeObserver(entries => {
        for (const entry of entries) {
            const width = entry.contentRect.width;
            if (width < 768){
                h = width * .1944;
                toggle.style.height = h + 'px';
                searchbox.style.height = h + 'px';
                filterbox.style.height = h + 'px';
            }
        }
    });

    const observerSearchbox = new ResizeObserver(entries => {
    });

    const observerFilterbox = new ResizeObserver(entries => {
    });

    observerToggle.observe(toggle);
    observerSearchbox.observe(searchbox);
    observerFilterbox.observe(filterbox);

    /**********************************************************************************************************/
    // Escucha cambios en la altura de los posters (Aun no esta implementado)
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