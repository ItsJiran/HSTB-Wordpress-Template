
// ==============================================================================
// ===================== MAIN SCRIPT =============================
// ==============================================================================
$(document).ready(function(){

    $(".idea-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1,
                margin:50,
                loop:true,
            }
        }
    });
   
    $("#fasilitas-carousel").owlCarousel({
        loop:true,
        center:true,
        nav:false,
        dots:false,
        margin:50,
        responsive:{
            0:{
                items:1.1,
                margin:15,
                loop:true,
            },
            400:{
                items:1.5,
                margin:30,
            },
            800:{
                items:3,
                margin:30,
            },
        }
    });

  });




