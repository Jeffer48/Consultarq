(function() {
    
    (function titleSize(){
        let windowWidthO = window.outerWidth;
        let windowWidthI = window.innerWidth;
        let titulo = document.getElementById("titulo");
        let fontSize = window.getComputedStyle(titulo).getPropertyValue('font-size');
        
        console.log(windowWidthO);
        console.log(windowWidthI);
        
        if(windowWidthO < 1000){
            let newSize = windowWidthO / 2;
            newSize += "%";
            titulo.style.fontSize = newSize;
        }
        else if(windowWidthI < 1000){
            let newSize = windowWidthI / 2;
            newSize += "%";
            titulo.style.fontSize = newSize;
        }
    })();
    
})();