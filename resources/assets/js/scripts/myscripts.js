$(function () {
    "use strict";

    knob();
    chart();
    // setting page
    editProfile();


    $('.left_menu ul li').on('click', function () {
    ActiveBackgroundLogo();

    $('.left_menu ul li').on('click',function(){
        $('.left_menu ul li').removeClass('active_link');
        $(this).toggleClass('active_link');
    });

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
            "fgColor": "#FF0000",
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
        return getRandomArbitrary(1, 1000);
    };

    var ctx = document.getElementById("myChart");
    if (ctx) {
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
                    gridLines: {
                        color: 'red'
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


function editProfile() {
    $('#edit_btn').on('click', function (e) {
        let inp_text = $('.efield__text'),
            inp_inp = $('.efield .efield__input');
        inp_text.each(function (key, val) {
            $(val).toggle();
        });
        inp_inp.each(function (key, val) {
            $(val).toggle();
        })
        // inp_text.trigger();
        // inp_inp.trigger();
    });

    $('.efield__input :input').on('change', function (e) {
        let input = $(this),
            block = input.parents('.efield'),
            text = block.find('.efield__text'),
            node = input.prop('tagName'),
            value = '';

        switch (node) {
            case 'INPUT':
                let type = input.prop('type');
                console.log(type);
                if (type == 'radio') {
                    value = input.find(':checked').val();
                } else {
                    value = input.val();
                }
                break;
            case 'SELECT':
                console.log(input.val());
                    value = input.val();
                break;
        }
        text.html($(this).val());
    });
}
function ActiveBackgroundLogo(){
    $('.container_img button').on('change',function(){
        if($(this).hasClass('active_background')){
            $(this).toggleClass('active_background');
        }
        else{
            $('.container_img button').removeClass('active_background');
            $(this).toggleClass('active_background');
            $(this).append(`<div class="active_background__color d-flex justify-content-center align-items-center">
                                                                <img src="{{ asset('img/accept-icon.png') }}" alt=""></div>`);
        }
    });
}