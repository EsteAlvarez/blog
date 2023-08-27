const encabezadoNav = document.createElement('h2');
encabezadoNav.innerHTML = 'Blog';

var menuContenedor = document.getElementsByClassName('menu-menu-1-container');
var referencia = document.getElementById('menu-menu-1');
for(var i=0;i<menuContenedor.length;i++){
    menuContenedor[i].insertBefore(encabezadoNav, referencia);
}