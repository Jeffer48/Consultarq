/*"use strict";*/
const cartas = document.querySelectorAll(".card");
var paginaseleccionada = "primeros datos";

function redirigir() {
    paginaseleccionada = this;
    /*paginaseleccionada = this;*/
    /*alert(paginaseleccionada.dataset.carta);*/
    window.location.replace("Seleccion.html");
    /* <iframe src="index.html" frameborder="0"></iframe>*/
    let paginaDicha = paginaseleccionada.dataset.carta;
    sessionStorage.setItem("paginaSeleccionada", paginaDicha);
}
/*
console.log(paginaseleccionada);
export { redirigir, objeto }*/




cartas.forEach(card => card.addEventListener("click", redirigir));