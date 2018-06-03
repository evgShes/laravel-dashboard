$(function () {
    "use strict";

    knob();
    chart();
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


    // Automatic mode
    /*var autoVal = 0
        ,timer = setInterval(function() {
            $(".knob").each(
                    function(){
                        $(this)
                            .val(Math.round(Math.sin(autoVal)*100))
                            .trigger('change');
                    }
                );
            autoVal++;
        }, 100);*/

    // Configure
    /*$(".knob").val(25).trigger(
               "configure",
               {"min":10, "max":40, "fgColor":"#FF0000", "skin":"tron", "cursor":true}
               );*/

    // Change example
    /*$(".knob").knob(
                   {
                   'change':function(e){
                           console.log(e);
                       }
                   }
               )
              .val(79)
              ;*/
}

function chart() {
    var ctx = document.getElementById("myChart");
    // var myChart = new Chart(ctx, {
    //     data: {
    //         datasets: [
    //             {fill: 'origin'},      // 0: fill to 'origin'
    //             {fill: '+2'},          // 1: fill to dataset 3
    //             {fill: 1},             // 2: fill to dataset 1
    //             {fill: false},         // 3: no fill
    //             {fill: '-2'}           // 4: fill to dataset 2
    //         ]
    //     }
    // })
}