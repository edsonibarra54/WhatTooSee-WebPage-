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