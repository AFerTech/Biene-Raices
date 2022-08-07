
// escucha que se haya cargado todos los documentos
document.addEventListener('DOMContentLoaded', function(){
    eventListener();

    darkMode();
});
function darkMode() {
    // Comprueba si estaba habilidado dark mode
    let darkLocal = window.localStorage.getItem('dark');
    if(darkLocal === 'true') {
        document.body.classList.add('dark-mode');
    }
    // Añadimos el evento de click al botón de dark mode
    document.querySelector('.dark-mode-boton').addEventListener('click', darkChange);
}
 
function darkChange() {
    let darkLocal = window.localStorage.getItem('dark');
 
    if(darkLocal === null || darkLocal === 'false') {
        // No está inicializado darkLocal o es falso
        window.localStorage.setItem('dark', true);
        document.body.classList.add('dark-mode');
    } else {
        // Está activado darkMode, por lo que se desactiva
        window.localStorage.setItem('dark', false);
        document.body.classList.remove('dark-mode');
    }
}


function eventListener(){
    const mobileMenu=document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);

}

function navegacionResponsive(){
    const navegacion= document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    }else{
        navegacion.classList.add('mostrar');

    }
    // navegacion.classList.toggle('mostrar');hace los mismo que el if
}