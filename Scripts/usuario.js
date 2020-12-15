(function() {
    "use strict";

    const boton = document.querySelector("#Entrar");
    boton.addEventListener("click", eventoen => {
        Datos();
    });

    function Datos() {
        let nombre = document.querySelector("#usuario").value;
        let contrasena = document.getElementById("clave").value;
        console.log(nombre, contrasena);

    }
})();