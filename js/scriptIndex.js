(function(){
    (function(){
        console.log("Inner: "+window.innerWidth);
        console.log("Outer: "+window.outerWidth);
        if(window.outerWidth < 800){
            let tamaño = window.outerWidth + "px " + "100%;";
            let cadena = "background-size: ";
            cadena += tamaño;
            console.log(cadena);
            document.body.style = cadena;
        }
    })();
})();