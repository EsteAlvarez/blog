const enlace = document.createElement('a');
enlace.setAttribute('href', 'http://localhost/blog/');
enlace.setAttribute('class', 'enlace-blog');
const encabezadoNav = document.createElement('h2');
encabezadoNav.innerHTML = 'Blog';
enlace.append(encabezadoNav);

var menuContenedor = document.getElementsByClassName('menu-menu-1-container');
var referencia = document.getElementById('menu-menu-1');
for(var i=0;i<menuContenedor.length;i++){
    menuContenedor[i].insertBefore(enlace, referencia);
}