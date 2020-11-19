(function() {
    
    (function titleSize(){
        let windowWidth = window.innerWidth;
        let windowHeight = window.innerHeight;
        let minorWidth;
        let titulo = document.getElementById("titulo");
        let fontSize = window.getComputedStyle(titulo).getPropertyValue('font-size');
        
        if(windowWidth < windowWidth) minorWidth = windowWidth;
        else minorWidth = windowHeight;
        if(minorWidth < 1000){
            let newSize = windowWidth / 10;
            newSize += "px";
            console.log("Tamaño de letra: "+fontSize);
            console.log(newSize);
            titulo.style.fontSize = newSize;
        }
        
        console.log("Ancho de ventana: "+windowWidth);
        console.log("Tamaño de letra: "+fontSize);
    })();
    
})();