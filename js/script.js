(function() {
    "use strict"

    document.getElementById("btn-hamburguer").onclick = function() {
        let pages = document.querySelector(".paginas")
        let hasAppear = pages.style.visibility;

        if (screen.width > 800) pages.style.visibility = "visible";
        else if (hasAppear == "visible") pages.style.visibility = "collapse";
        else pages.style.visibility = "visible";

        console.log(hasAppear);
    }
})();