
/*Elements qui bouge lors du scroll de la page*/
function Scroll(){
    var Largueur = $(window).width();
    var top = document.getElementById('bouton_plus');
    var top_2 = document.getElementById('bouton_moins');
    var top_3 = document.getElementById('informations');
    var ypos = window.pageYOffset;

    if(Largueur < 376 && ypos > 300) 
    {
        top.style.marginTop = "-57%";
        top_2.style.marginTop = "-57%";
        top_3.style.marginTop = "-57%";

        bouton_plus.style.position = "fixed";
        bouton_plus.style.right = "0";

        bouton_moins.style.position = "fixed";
        bouton_moins.style.right = "168.5px";

        informations.style.position = "fixed";
        informations.style.right = "5px";
    } 

    else if(Largueur < 426 && ypos > 280)
    {
        top.style.marginTop = "-53%";
        top_2.style.marginTop = "-53%";
        top_3.style.marginTop = "-53%";

        bouton_plus.style.position = "fixed";
        bouton_plus.style.right = "0";

        bouton_moins.style.position = "fixed";
        bouton_moins.style.right = "168.5px";

        informations.style.position = "fixed";
        informations.style.right = "5px";
    }

    else if(Largueur < 426 && ypos < 280) 
    {
        bouton_plus.style.position = "absolute";
        bouton_plus.style.right = "";
        bouton_plus.style.marginTop = "2%";

        bouton_moins.style.position = "absolute";
        bouton_moins.style.right = "";
        bouton_moins.style.marginTop = "2%";

        informations.style.position = "absolute";
        informations.style.right = "";
        informations.style.marginTop = "2%";
    }

    else if(Largueur < 501 && ypos > 275) 
    {
        top.style.marginTop = "-66%";
        top_2.style.marginTop = "-66%";
        top_3.style.marginTop = "-66%";

        bouton_plus.style.position = "fixed";
        bouton_moins.style.position = "fixed";
        informations.style.position = "fixed";
    }

    else if(Largueur < 769 && ypos > 275) 
    {
        top.style.marginTop = "-36%";
        top_2.style.marginTop = "-36%";
        top_3.style.marginTop = "-36%";

        bouton_plus.style.position = "fixed";
        bouton_moins.style.position = "fixed";
        informations.style.position = "fixed";
    } 

    else if(Largueur < 1025 && ypos > 275)
    {
        top.style.marginTop = "-26%";
        top_2.style.marginTop = "-26%";
        top_3.style.marginTop = "-26%";

        bouton_plus.style.position = "fixed";
        bouton_moins.style.position = "fixed";
        informations.style.position = "fixed";
    } 

    else if (Largueur > 1025) 
    {
        top.style.marginTop = "15%";
        top_2.style.marginTop = "15%";
        top_3.style.marginTop = "15%";
    }

    else 
    {
        top.style.marginTop = "1%";
        top_2.style.marginTop = "1%";
        top_3.style.marginTop = "1%";  

        bouton_plus.style.position = "absolute";     
        bouton_moins.style.position = "absolute";
        informations.style.position = "absolute"; 
    }
}

window.addEventListener("scroll", Scroll);
