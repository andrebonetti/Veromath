/* ---------- START -----------*/
$("#close_menu").hide();

    var screen_size = $(window).width();

    /* ---------- HEADER HEIGHT -----------*/
        var banner_height = $(".banner").find("a.logo").find("img").height();
        
        if(screen_size <= 583){
            $(".menu").hide();
        }
        if(screen_size > 999){
            var menu_new_height = parseInt(banner_height)+3;
            $(".menu").css("height",menu_new_height);
        }

    /* ---------- MYCONTAINER TOP -----------*/
        /*var header_height = $("header").height();
        var content_top_height = parseInt(header_height);
        $("section.my-content").css("padding-top",content_top_height+40);
        $("section.home").css("padding-top",content_top_height);*/

    /* ---------- MENU ALIGN -----------*/

        //VERTICAL
       /* var p_height = $(".menu").find("p").height();
        var nav_height = $(".menu").find("nav").height();
        var top_height = (parseInt(header_height) - parseInt(nav_height) - parseInt(p_height)) *0.85 ;
        
        if(screen_size > 464){
        $("nav").css("margin-top",top_height);
        }*/
    
    /* ---------- MENU ICON TOP -----------*/
    var icon_new_top = parseInt(header_height) - 50;
    $("img.menu-icon").css("top",icon_new_top);


/* ----------FUNCTIONS --------*/
var show_menu = function(){
    $(".menu").slideDown();
    $("#open_menu").fadeOut(200);
    $("#close_menu").fadeIn(200);
};

var close_menu = function(){
    $(".menu").slideUp();
    $("#open_menu").fadeIn(200);
    $("#close_menu").fadeOut(200);
};

/* --- ACTIVE ---*/
$("#open_menu").on("click",show_menu);
$("#close_menu").on("click",close_menu);


/* ------------ EVENTOS --------------*/
