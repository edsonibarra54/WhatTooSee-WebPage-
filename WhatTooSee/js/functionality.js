document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const second_list = document.querySelector('.second_list');
    const list = document.getElementById('ListMenu2');
    
    // Hacer algo con el div seleccionado (por ejemplo, agregar un evento clic)
    menuToggle.addEventListener('click', function() {
        second_list.classList.toggle('show-menu');
        list.style.flexDirection = 'Column';
        //list.style.justifyContent = 'flex-end';
    });
});


