var screen_size = $(window).width();

/* ---------- START -----------*/

    /* --- SLIDE HEIGHT --- */
        var img_widht = $(".slide-show").find("img").width();
    
        if(img_widht < 500){var slide_new_height = parseInt(img_widht) / 1.8 ;}
        if(img_widht > 500){var slide_new_height = parseInt(img_widht) / 2.3 ;}
        if(img_widht > 600){var slide_new_height = parseInt(img_widht) / 2.5 ;}
        if(img_widht > 768){var slide_new_height = parseInt(img_widht) / 2.8 ;}
        if(img_widht > 1100){var slide_new_height = parseInt(img_widht)/ 2.8 ;}
        if(img_widht > 1500){var slide_new_height = parseInt(img_widht)/ 2.2 ;}

    $(".slide-show").find("img").css("height",slide_new_height);

    /* --- NEWS HEIGHT --- */
        var text_height = $(".text-center").outerHeight();
        var equipamentos = $(".equipamentos").outerHeight();

        if(screen_size < 800){
            var news_new_height = (parseInt(equipamentos)*2)*0.85; 
            $(".news").css("height",news_new_height);
        }
        if((screen_size > 800)&&(screen_size < 999)){
            var news_new_height = (parseInt(equipamentos)*2)*0.95; 
            $(".news").css("height",news_new_height);
        }
        if(screen_size >= 1000){
            var news_new_height = (parseInt(equipamentos)*2)+parseInt(text_height) - 10; 
            $(".news").css("height",news_new_height);
        }

        var header_height = $("header").height();
        var content_top_height = parseInt(header_height);
        $("section.my-content").css("padding-top",content_top_height+40);
        $("section.home").css("padding-top",content_top_height);

/* ----------FUNCTIONS --------*/


/* --- ACTIVE ---*/

/* ------------ EVENTOS --------------*/


