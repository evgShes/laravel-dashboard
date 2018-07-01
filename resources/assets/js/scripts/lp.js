jQuery(function ($) {
    var height_window = $(window).height();
    window.onscroll = function(){
        if ($(this).scrollTop() > height_window){
            $(".button_scroll_down").fadeIn();
        } else{
            $(".button_scroll_down").fadeOut();
        }
    };
    $(".button_scroll_down").on('click',function (){
        $("body,html").animate({
            scrollTop:0
        }, 800);
        return false;
    });
});