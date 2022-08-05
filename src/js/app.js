
// escucha que se haya cargado todos los documentos
document.addEventListener('DOMContentLoaded', function(){
    eventListener();
});


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