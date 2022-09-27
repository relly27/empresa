const iconoMenu = document.querySelector('#icono-menu'),
      menu = document.querySelector('#menu');

iconoMenu.addEventListener('click', (e) => {

    //alternamos estilos para el menu y body
    menu.classList.toggle('active');
    document.body.classList.toggle('opacitu');

    //alternamos su atributo 'src' para el icono del menu
    const rutaActual = e.target.getAttribute('src');

    if(rutaActual == '../img/bars-solid.svg'){
        e.target.setAttribute('src', '../img/bars-solid.png');
    }else{
        e.target.setAttribute('src', '../img/bars-solid.svg');
    }


});
