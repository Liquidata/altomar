/**
 * Created by Francisco on 03-04-2015.
 */
console.log("CUSTOM");
function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");

    if( !isMobile() ) {
        $('#global').mCustomScrollbar("scrollTo", aTag);
    } else {
        $('html,body').animate({scrollTop: aTag.offset().top},1500,'easeInOutQuad');
    }
}

function activate(id)
{
    $("#content_" +id).slideToggle(1200);
    $("#grp_" + id).fadeOut(200,function() {
        $("#grp_" + id + "_close").fadeIn(300);
    });

}

function deactivate(id)
{
    $("#content_" +id).slideToggle(800, function() {
        $("#grp_" + id + "_close").fadeOut(200,function() {
            $("#grp_" + id).fadeIn(300);
        });
    });

}

function isMobile()
{
    return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));
}
(function($){
    $(window).load(function(){

        if( !isMobile() ) {

             $("#global").height($( window ).height());

             $("#global").mCustomScrollbar({
                theme:"dark-3",
                axis:"y",
                callbacks:{
                    onScroll:function(){
                         if (this.mcs.top < -200) {
                             $('.scroll-top-wrapper').addClass('show');
                         } else {
                             $('.scroll-top-wrapper').removeClass('show');
                         }
                     }
                 }
             });

        }



    });
})(jQuery);

function scrollToTop(id)
{
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    offset = element.offset();
    offsetTop = offset.top;
    console.log(offsetTop);

    if (!isMobile()) {

        $('#global').mCustomScrollbar("scrollTo", "top");
    } else {
        $('html,body').animate({scrollTop: 0},1500, 'easeInOutQuad');
    }
}

$( window ).resize(function() {
    if (!isMobile()) {
        $("#global").height($( window ).height());
    }
});

$(document).on( 'scroll', function(){

    if ($(window).scrollTop() > 100) {
        $('.scroll-top-wrapper').addClass('show');
    } else {
        $('.scroll-top-wrapper').removeClass('show');
    }
});

$('.scroll-top-wrapper').on('click', scrollToTop);

$("#menuArea").click(function() {
    $("#menuList").slideToggle(800);
});

$("#btn_altomar").click(function() {
    activate("altomar");
});

$("#btn_altomar_close").click(function() {
    deactivate("altomar");
});

$("#btn_noticias").click(function() {
    activate("noticias");
});

$("#btn_noticias_close").click(function() {
    deactivate("noticias");
});



$("#btn_bacalhau").click(function() {
    activate("bacalhau");
});

$("#btn_bacalhau_close").click(function() {
    deactivate("bacalhau");
});


$("#btn_comopreparamos").click(function() {
    activate("comopreparamos");
});

$("#btn_comopreparamos_close").click(function() {
    deactivate("comopreparamos");
});


$("#btn_produtos").click(function() {
    activate("produtos");
});
$("#btn_produtos_close").click(function() {
    deactivate("produtos");
});


$("#btn_encomendas").click(function() {
    activate("encomendas");
});
$("#btn_encomendas_close").click(function() {
    deactivate("encomendas");
});


$("#btn_receitas").click(function() {
    activate("receitas");
});
$("#btn_receitas_close").click(function() {
    deactivate("receitas");
});


$("#btn_ondeestamos").click(function() {
    activate("ondeestamos");
});
$("#btn_ondeestamos_close").click(function() {
    deactivate("ondeestamos");
});



/* MENU */
$("#menu_altomar").click(function() {
    scrollToAnchor('altomar');
});

$("#menu_noticias").click(function() {
    scrollToAnchor('noticias');
});

$("#menu_bacalhau").click(function() {
    scrollToAnchor('bacalhau');
});

$("#menu_comopreparamos").click(function() {
    scrollToAnchor('comopreparamos');
});

$("#menu_produtos").click(function() {
    scrollToAnchor('produtos');
});

$("#menu_encomendas").click(function() {
    scrollToAnchor('encomendas');
});

$("#menu_receitas").click(function() {
    scrollToAnchor('receitas');
});

$("#menu_ondeestamos").click(function() {
    scrollToAnchor('ondeestamos');
});

