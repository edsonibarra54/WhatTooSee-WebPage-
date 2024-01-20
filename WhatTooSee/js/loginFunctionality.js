const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

function redireccionar() {
    window.location.href = '../php/index.php';
}

document.addEventListener('DOMContentLoaded', function() {
/**********************************************************************************************************/
    // Escucha cambios en el ancho del menu
    const logo = document.getElementById('logo');
    let h;

    const observerLogo = new ResizeObserver(entries => {
        for (const entry of entries) {
            const width = entry.contentRect.width;
            h = width / 3.85;
            logo.style.height = h + 'px';
        }
    });
    observerLogo.observe(logo);
});