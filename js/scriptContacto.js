(function() {
    
    (function titleSize(){
        let windowWidth = window.outerWidth;
        let windowHeight = window.outerHeight;
        let titulo = document.getElementById("titulo");
        let fontSize = window.getComputedStyle(titulo).getPropertyValue('font-size');
        
        console.log("Ancho de ventana: "+windowWidth);
        console.log("Alto de ventana: "+windowHeight);
        
        if(windowHeight < 1000){
            let newSize = windowWidth / 10;
            newSize += "px";
            console.log("Tamaño de letra: "+fontSize);
            console.log(newSize);
            titulo.style.fontSize = newSize;
        }
    })();
    
})();