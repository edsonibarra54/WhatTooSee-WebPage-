// Direccionar a pagina peliculas/series
function redireccionar(index) {
    if(index == 0){
        window.location.href = '../pages/index.html';
    }
    if(index == 1){
        window.location.href = '../pages/productions.html';
    }
    if(index == 2){
        location.reload();
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
            if (width > 768){
                h = '75px';
                navbar.style.height = h + 'px';
                container.style.marginTop = h + 'px';
            }
            if (width < 768){
                h = width / 13.65;
                navbar.style.height = h + 'px';
                container.style.marginTop = h + 'px';
                menu.style.marginTop = h + 'px';
            }
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
    //Escuchar cambios la barra de busqueda
    const searchbox = document.getElementById('box');
    const title = document.getElementById('title-Container');

    const observerTitle = new ResizeObserver(entries => {
        for (const entry of entries) {
            const height = entry.contentRect.height;
            h = height / 2.4;
            searchbox.style.height = h + 'px';
        }
    });

    observerTitle.observe(title);

    /**********************************************************************************************************/
    // Escucha cambios en el ancho de los perfiles
    const elementosCard = document.getElementsByClassName('card');

    const observerCard = new ResizeObserver(entries => {
        for (const entry of entries) {
            const width = entry.contentRect.width;
            const height = width / .92;
            
            // Itera sobre todos los elementos y ajusta la altura
            for (const elemento of elementosCard) {
                elemento.style.height = height + 'px';
            }
        }
    });

    // Observa todos los elementos de la clase 'card'
    for (const elemento of elementosCard) {
        observerCard.observe(elemento);
    }

    /**********************************************************************************************************/
    // Redirecciona a la pagina a cierto perfil

    // Obtén todos los elementos con la clase 'production'
    const enlaceDivs = document.querySelectorAll('.card');

    // Agrega un manejador de eventos a cada div
    enlaceDivs.forEach((div, index) => {    
        div.addEventListener('click', function() {
            window.location.href = '../pages/profile.html';
        });
    });
});