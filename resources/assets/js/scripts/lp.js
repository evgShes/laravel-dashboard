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
    // $('#content_advantages,\n' +
    //     '#we_offer,\n' +
    //     '#create_currency,\n' +
    //     '#block_faq').bind('click', '#header_lp__navbar a,.scroll_bottom', function(event) {
    //     $.scrollTo(event.target.hash, 250);
    // });
    // $('#header_lp__navbar a,.scroll_bottom').on('click',function(){
    //     console.log($(this).attr('href'));
    //     $($(this).attr('href')).animate({
    //
    //     },800);
    // });
    $("#header_lp__navbar ul li a[href^='#'],.scroll_bottom").on('click', function(e) {

        // prevent default anchor click behavior
        e.preventDefault()

        // store hash
        var hash = this.hash

        // animate
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top
        }, 800, function(){
            window.location.hash = hash
        })

    })
});