/*import { redirigir, objeto } from './Modificar.js';*/

function cargaIframe(Pagina) {
    const Seleccion = document.querySelectorAll("#root");
    let ventana = `<iframe src="${Pagina}.html" frameborder="0"></iframe>`;
    document.getElementById("root").innerHTML = ventana;
}
var objeto1 = new Object('./Modificar.js');
var pagina = sessionStorage.getItem("paginaSeleccionada");

console.log(pagina);
cargaIframe(pagina);