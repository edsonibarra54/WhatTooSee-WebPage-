// Direccionar a pagina peliculas/series
function redireccionar(index) {
    if(index == 0){
        window.location.href = '../pages/index.html';
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
    // Escucha cambios en la altura del navbar, el margen del container y el menu
    const navbar = document.getElementById('Menu-top');
    const container = document.getElementById('page-Container');
    const menu = document.getElementById('secondListDiv');
    let h;

    const observerNavbar = new ResizeObserver(entries => {
        for (const entry of entries) {
            const width = entry.contentRect.width;
            h = width / 13.65;
            navbar.style.height = h + 'px';
            container.style.marginTop = h + 'px';
            menu.style.marginTop = h + 'px';
        }
    });

    observerNavbar.observe(navbar);

    /**********************************************************************************************************/
    // Escucha cambios en el ancho del menu
    const menubox = document.getElementById('secondListDiv');
    const lists = document.getElementById('ListMenu2');
    let h1;

    const observerMenubox = new ResizeObserver(entries => {
        for (const entry of entries) {
            const width = entry.contentRect.width;
            h = width / 4.5;
            lists.style.gap = h + 'px';
            h = width / 9;
            lists.style.marginTop = h + 'px';
            lists.style.marginBottom = h + 'px';
        }
    });
    observerMenubox.observe(lists);

    /**********************************************************************************************************/
    // Escucha cambios en los campos de texto
    const texts = document.getElementsByClassName('text');

    const observerLabels = new ResizeObserver(entries => {
        for (const entry of entries) {
            const width = entry.contentRect.width;
            const height = width / 23.4;
            
            for (const elemento of texts) {
                elemento.style.height = height + 'px';
            }
        }
    });

    // Observa todos los elementos de la clase 'comment-Container'
    for (const elemento of texts) {
        observerLabels.observe(elemento);
    }

    /**********************************************************************************************************/
    // Escucha cambios en los botones
    const buttons = document.getElementsByTagName('button');

    const observerButtons = new ResizeObserver(entries => {
        for (const entry of entries) {
            const width = entry.contentRect.width;
            const height = width / 4;
            
            for (const elemento of buttons) {
                elemento.style.height = height + 'px';
            }
        }
    });

    // Observa todos los elementos de la clase 'comment-Container'
    for (const elemento of buttons) {
        observerButtons.observe(elemento);
    }
});