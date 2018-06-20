$(function () {
    "use strict";
    all();
    knob();
    chart();
    // setting page
    editProfile();
    // end setting page
    ActiveBackgroundLogo('#background_modal .container_img button',`<div class="active_background__color d-flex justify-content-center align-items-center">
                                                                <img src="../img/accept-icon.png" alt=""></div>`);
    ActiveBackgroundLogo('#logo_modal .container_img button','');

    ChangeColor('.change_main');
    ChangeColor('.change_additional');
    NextStep();
    BackStep();
    Validate('.constructor__input__width');
});

function all() {
    $('.left_menu ul li').on('click', function () {
        $('.left_menu ul li').removeClass('active_link');
        $(this).toggleClass('active_link');
    });

    $('.datetimepicker').datetimepicker({
        format:'MMM DD, YYYY'
    }).on('dp.hide',function (e,p,d,w) {
       $(this).parents('.efield').find('.efield__text').html($(this).find('input').val());
    });
    // $('#datetimepicker5').datetimepicker();
    $('#settings').on('shown.bs.modal',function () {
        $('.modal-open').css({
            'overflow': 'scroll'
        });
    });

}

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
        });
        $(this).toggleClass('edit_btn_active');

        $('.wallet_inp').prop('readonly', !$('.wallet_inp').prop('readonly'));
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
                if (type == 'radio') {
                    value = input.find(':checked').val();
                } else {
                    value = input.val();
                }
                break;
            case 'SELECT':
                value = input.val();
                break;
        }

        text.html(value);
    });
}

function ActiveBackgroundLogo(class_active,block_active) {
    $(document).on('click',class_active, function () {
        console.log('dd');
        if ($(this).hasClass('active_background')) {
            $(this).toggleClass('active_background');
        }
        else {
            $('.container_img button').removeClass('active_background');
            $('.container_img .active_background__color').remove();
            $(this).toggleClass('active_background');
            $(this).append(block_active);
        }
    });
}
function ChangeColor(change_class){
    $(change_class).on('input',function () {
       $(this).css({
           'background':   $(this).val()
       });
    });
}
function NextStep(){
    $('.next_constructor').on('click',function () {
        switch ($('.constructor__step li a.active').attr('href')){
            case '#step_1':
                $('.constructor__step li a').removeClass('active');
                $('.tab-pane').removeClass('active');
                $('#step_2').addClass('active');
                $('a[href="#step_2"]').addClass('active');
                $('.back_constructor').show();
                break;
            case '#step_2':
                $('.constructor__step li a').removeClass('active');
                $('.tab-pane').removeClass('active');
                $('#step_3').addClass('active');
                $('a[href="#step_3"]').addClass('active');
                break;
            case '#step_3':
                $('.constructor__step li a').removeClass('active');
                $('.tab-pane').removeClass('active');
                $('#step_4').addClass('active');
                $('a[href="#step_4"]').addClass('active');
                $('.next_constructor').hide();
                break;
        }
    });
}
function BackStep(){
    $('.back_constructor').on('click',function () {
        switch ($('.constructor__step li a.active').attr('href')){
            case '#step_2':
                $('.constructor__step li a').removeClass('active');
                $('.tab-pane').removeClass('active');
                $('#step_1').addClass('active');
                $('a[href="#step_1"]').addClass('active');
                $('.back_constructor').hide();
                break;
            case '#step_3':
                $('.constructor__step li a').removeClass('active');
                $('.tab-pane').removeClass('active');
                $('#step_2').addClass('active');
                $('a[href="#step_2"]').addClass('active');
                break;
            case '#step_4':
                $('.constructor__step li a').removeClass('active');
                $('.tab-pane').removeClass('active');
                $('#step_3').addClass('active');
                $('a[href="#step_3"]').addClass('active');
                $('.next_constructor').show();
                break;
        }

    });
}
function Validate(input_change) {
    $(input_change).on('input',function () {
        if($(this).val().length>2){
            $(this).parent().find('.error_img_mess').remove();
            $(this).parent().find('.success_img_mess').remove();
            $(this).parent().append(`<div class="success_img_mess"></div>`);
        }else{
            $(this).parent().find('.success_img_mess').remove();
            $(this).parent().find('.error_img_mess').remove();
            $(this).parent().append(`<div class="error_img_mess"></div>`);
        }
    });
}