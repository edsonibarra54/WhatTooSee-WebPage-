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
            container.style.marginTop = (h+10) + 'px';
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

    const posterContainer = document.getElementById('poster-Container');

    const observerPostercontainer = new ResizeObserver(entries => {
        for (const entry of entries) {
            const width = entry.contentRect.width;
            h = width / 1.528;
            posterContainer.style.height = h + 'px';
        }
    });
    observerPostercontainer.observe(posterContainer);

    /**********************************************************************************************************/
    // Escucha cambios en el ancho de los comentarios
    const commentaries = document.getElementsByClassName('comment-Container');

    const observerCommentaries = new ResizeObserver(entries => {
        for (const entry of entries) {
            const width = entry.contentRect.width;
            const height = width / 3.95;
            
            for (const elemento of commentaries) {
                elemento.style.height = height + 'px';
            }
        }
    });

    // Observa todos los elementos de la clase 'comment-Container'
    for (const elemento of commentaries) {
        observerCommentaries.observe(elemento);
    }

    
});

/**********************************************************************************************************/
    // Escucha las selecciones en las estrellas de un comentario
    function selectStar(clickedStar) {
        // Obtener todos los íconos dentro del contenedor
        var stars = document.getElementById("cal-Stars").getElementsByTagName("i");
    
        // Obtener el índice del ícono clicado
        var clickedIndex = Array.from(stars).indexOf(clickedStar);
    
        // Iterar sobre los íconos y aplicar estilos según el índice
        for (var i = 0; i <= clickedIndex; i++) {
            stars[i].style.color = "#FFA500";
        }
    
        // Restablecer el color de los íconos a la izquierda del clicado
        for (var j = clickedIndex + 1; j < stars.length; j++) {
            stars[j].style.color = "";
        }
    }