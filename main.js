let ubicacionPrincipal = window.pageYOffset;

AOS.init();

window.addEventListener("scroll", function() {
    let desplazamientoactual = window.pageYOffset;
    if (ubicacionPrincipal >= desplazamientoactual) {
        document.getElementsByTagName("nav")[0].style.top = "0px"
    } else {
        document.getElementsByTagName("nav")[0].style.top = "-100px"
    }
    ubicacionPrincipal = desplazamientoactual;
})