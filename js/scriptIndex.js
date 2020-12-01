window.onresize = function(){
    console.log(window.outerWidth);
    if (window.outerWidth < 800) {
        let tamaño = window.outerWidth + "px " + "100%;";
        let cadena = "background-size: ";
        cadena += tamaño;
        document.body.style = cadena;
    }
}