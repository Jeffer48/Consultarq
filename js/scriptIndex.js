(function(){
    window.onresize = function(){
        if(window.outerWidth < 600){
            let tamaño = window.outerWidth + "px " + "100%;";
            let cadena = "background-size: ";
            cadena += tamaño;
            document.body.style = cadena;
        }
    }
})();