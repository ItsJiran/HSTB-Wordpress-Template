
// ==============================================================================
// ===================== MAIN SCRIPT =============================
// ==============================================================================
$(document).ready(function(){

    // +-------------------------------------------------+
    // +---------------+ SECTION CAROUSEL +--------------+
    // +-------------------------------------------------+
    $("#section-1 .owl-carousel").owlCarousel({
        loop:true,
        margin:50,
        responsive:{
            0:{
                items:1,
                loop:true,
            }
        }
    });
    $("#section-3 .owl-carousel").owlCarousel({
        loop:true,
        center:true,
        nav:false,
        dots:false,
        margin:50,
        responsive:{
            0:{
                items:1.2,
                loop:true,
            },
        }
    });
    $("#section-4 .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:1,
                margin:30,
                loop:true,
            },
            400:{
                items:2.2,
                margin:30,
            },
            500:{
                items:3,
                margin:30,
            },
            600:{
                items:3.5,
                margin:30,
            },
            800:{
                items:4,
                margin:50,
            },
            1000:{
                items:5,
                margin:50,
            }
        }
    });
    
  });



// ==============================================================================
// ===================== HERO 2 EVENT LSITENER =============================
// ==============================================================================

let hero_post_thumbnails = $('#hero-2 .hero-content-wrapper')[0].children;

hero_post_thumbnails = Array.from(hero_post_thumbnails)

function heroThumbnailSwitch(element,class_add,class_remove){
    element.classList.add(class_add);
    element.classList.remove(class_remove);
}

for(let post of hero_post_thumbnails){
    post.addEventListener('click',(event)=>{

        if( post.classList.contains('center-image') ) 
            return;

        if( post.classList.contains('top-image') ){

            let hero = hero_post_thumbnails.find(e => e.classList.contains('below-image'));
            let hero_2 = hero_post_thumbnails.find(e => e.classList.contains('center-image'));

            heroThumbnailSwitch(hero, 'top-image', 'below-image')
            heroThumbnailSwitch(hero_2, 'below-image', 'center-image')

            post.classList.remove('top-image');
        }

        else if( post.classList.contains('below-image') ){
            
            let hero = hero_post_thumbnails.find(e => e.classList.contains('top-image'));
            let hero_2 = hero_post_thumbnails.find(e => e.classList.contains('center-image'));
            
            heroThumbnailSwitch(hero, 'below-image', 'top-image')
            heroThumbnailSwitch(hero_2, 'top-image', 'center-image')
            
            post.classList.remove('below-image');
            
        }

        post.classList.add('center-image');

    })
}

// this is for the auto change the image every n seconds
setInterval(()=>{
    //hero_post_thumbnails.find(e => e.classList.contains('below-image')).click();
}, 5000)


// ==============================================================================
// ===================== SECTION 5 EVENT LSITENER =============================
// ==============================================================================

let questions_container = document.getElementsByClassName('faq-question-container');
questions_container = Array.from(questions_container);

for( let question of questions_container ){
    
    question.addEventListener('click',(e)=>{

        let current_active = questions_container.find( e => e.classList.contains('active') );
        
        if(current_active !== question){
            question.classList.add('active');
        }

        current_active.classList.remove('active');
    })

}
