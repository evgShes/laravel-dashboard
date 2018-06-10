$(function () {
    "use strict";

    knob();
    chart();
    // if($(window).width()>=750) {
    //     $('.container_block,#settings .modal-dialog').css({
    //         'max-width': $(window).width() - $('.left_menu').width() - 2 + 'px',
    //         'width': $(window).width() - $('.left_menu').width() - 2 + 'px',
    //         'flex': 'none'
    //     });
    // }
    // else{
    //     $('.container_block,#settings .modal-dialog').css({
    //         'max-width':'75%',
    //         'width':'auto',
    //         'flex':'0 0 75%'
    //     });
    // }
    $('.left_menu ul li').on('click',function(){
        $('.left_menu ul li').removeClass('active_link');
        $(this).toggleClass('active_link');
    });
    $(window).resize(function() {
        if($(window).width()>=750){
            $('.container_block,#settings .modal-dialog').css({
                'max-width':$(window).width()-$('.left_menu').width()-2+'px',
                'width':$(window).width()-$('.left_menu').width()-2+'px',
                'flex':'none'
            });
        }else{
            $('.container_block,#settings .modal-dialog').css({
                'max-width':'75%',
                'width':'auto',
                'flex':'0 0 75%'
            });
        }
        //
        // if ($(window).width() <= '995'){
        //     $('#shelf').show(10)
        //     return this;}
        // else   {
        //     $('#shelf').hide(10)
        // }

    });

    $('.datetimepicker').datetimepicker();
});

function knob() {
    $(".knob").knob();
    // Example of infinite knob, iPod click wheel
    var val, up = 0, down = 0, i = 0
        , $idir = $("div.idir")
        , $ival = $("div.ival")
        , incr = function () {
        i++;
        $idir.show().html("+").fadeOut();
        $ival.html(i);
    }
        , decr = function () {
        i--;
        $idir.show().html("-").fadeOut();
        $ival.html(i);
    };
    $("input.infinite").knob(
        {
            'min': 0,
            'max': 20,
            'stopper': false,
            "fgColor":"#FF0000",
            'change': function (v) {
                if (val > v) {
                    if (up) {
                        decr();
                        up = 0;
                    } else {
                        up = 1;
                        down = 0;
                    }
                } else {
                    if (down) {
                        incr();
                        down = 0;
                    } else {
                        down = 1;
                        up = 0;
                    }
                }
                val = v;
            }
        }
    );
}

function chart() {
    function randomScalingFactor() {
        return getRandomArbitrary(1,1000);
    };

    var ctx = document.getElementById("myChart");
    if (ctx){
        var config = {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Page Views',
                    borderColor: 'blue',
                    backgroundColor: 'blue',
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                    ],
                }]
            },
            options: {

                responsive: true,
                title: {
                    display: true,
                    text: 'Graph Overview'
                },
                tooltips: {
                    mode: 'index',
                },
                hover: {
                    mode: 'index'
                },
                scales: {
                    gridLines:{
                        color:'red'
                    },
                    xAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        stacked: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                },
                color: [
                    'red',    // color for data at index 0
                    'blue',   // color for data at index 1
                    'green',  // color for data at index 2
                    'black',  // color for data at index 3
                    //...
                ]
            }
        };
        var myChart = new Chart(ctx, config);
    }

}

function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}