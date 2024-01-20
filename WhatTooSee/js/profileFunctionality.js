// Direccionamiento de paginas
function redireccionar(index) {
    if(index == 0){
        window.location.href = '../php/index.php';
    }
    if(index == 1){
        window.location.href = '../php/productions.php';
    }
    if(index == 2){
        window.location.href = '../php/community.php';
    }
    if(index == 3){
        window.location.href = '../php/login.php';
    }
}

// Direccionar a pagina de perfil
function goProfile(){
    window.location.href = '../php/profile.php';
}

// Funcion para cerrar sesion
function cerrarSesion() {
    fetch('cerrar_sesion.php', {
        method: 'POST',
    })
    .then(response => {
        if (response.ok) {
            window.location.href = 'index.php';
        } else {
            console.error('Error al cerrar sesión');
        }
    })
    .catch(error => console.error('Error en la solicitud:', error));
}

// Direccionar a pagina de pelicula
function production() {
    window.location.href = '../php/material.php';
}

// Direccionar a pagina de edicion
function editPages() {
    window.location.href = '../php/edit.php';
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
    // Escucha cambios en el ancho del contenedor del perfil
    const profileContainer = document.getElementById('profile-Container');
    const edit = document.getElementById('edit');

    const observerProfilecontainer = new ResizeObserver(entries => {
        for (const entry of entries) {
            const width = entry.contentRect.width;
            h = width / 1.7;
            profileContainer.style.height = h + 'px';
            h = width / 17.8;
            edit.style.height = h + 'px';
        }
    });
    observerProfilecontainer.observe(profileContainer);

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
    // Escucha cambios en el ancho del boton de edicion de perfil
    const button = document.getElementById('editProfile');

    const observerButton = new ResizeObserver(entries => {
        for (const entry of entries) {
            const width = entry.contentRect.width;
            h = width / 3;
            button.style.height = h + 'px';
        }
    });
    
    observerButton.observe(button);

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

    document.getElementById("corazon").addEventListener("click", function() {
        var corazon = document.getElementById("corazon");
      
        // Cambiar clases para cambiar la apariencia del corazón
        if (corazon.classList.contains("corazon-vacio")) {
          corazon.classList.remove("corazon-vacio");
          corazon.classList.add("corazon-lleno");
        } else {
          corazon.classList.remove("corazon-lleno");
          corazon.classList.add("corazon-vacio");
        }
      });
});