<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light rektangel-1 ">
        <div class="top_logo">
            <img src="{{ asset('img/logo.png') }}" alt="logo">
        </div>
        <div class="REWARDATRON">REWARDATRON</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mr-0">
                <li class="nav-item active registration_link">
                    <button class="btn btn-outline-info btn_registration">Registration</button>
                </li>
                <li class="nav-item user_logo">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('img/images_user.png') }}" alt="">
                        <div class="active_status"></div>
                        <span class="John-Silver">John Silver</span>
                    </a>
                    <div class="dropdown-menu Log-out" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="#">Log out</a>
                    </div>
                    {{--<div class="user_avatar"></div>--}}
                </li>
                <li class="nav-item header_language">
                    <img src="{{ asset('img/logo_lang.svg') }}" alt=""> <span class="eng">eng</span>
                </li>
            </ul>
        </div>
    </nav>
</header>
<nav class="navbar navbar-expand-lg navbar-light title_pages" >
    <a class="navbar-brand Home m-auto" href="#">Home</a>
    <div class="collapse navbar-collapse justify-content-end col-1">
        <ul class="navbar-nav mr-0 pagination_list">
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="{{ asset('img/right.svg') }}" alt=""></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#"><img src="{{ asset('img/left.svg') }}" alt=""></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-auto left_menu">
            <div class="">
                <ul>
                    <li>
                        <a href="#">
                            <div class="row  align-items-center">
                                <div class="col-auto">
                                    <img src="{{ asset('img/home.png') }}" alt="">
                                </div>
                                <div class="col">
                                    <span>Home</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="row  align-items-center">
                                <div class="col-auto">
                                    <img src="{{ asset('img/list.png') }}" alt="">
                                </div>
                                <div class="col">
                                    <span>Site-list</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="row  align-items-center">
                                <div class="col-auto">
                                    <img src="{{ asset('img/trade.png') }}" alt="">
                                </div>
                                <div class="col">
                                    <span>Trage</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="row  align-items-center">
                                <div class="col-auto">
                                    <img src="{{ asset('img/games.png') }}" alt="">
                                </div>
                                <div class="col">
                                    <span>Games</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="row  align-items-center">
                                <div class="col-auto">
                                    <img src="{{ asset('img/setting.png') }}" alt="">
                                </div>
                                <div class="col">
                                    <span>Setting</span>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="line_menu"></li>
                </ul>
                <ul>
                    <li>
                        <a href="#">
                            <div class="row  align-items-center">
                                <div class="col-auto">
                                    <img src="{{ asset('img/faq.png') }}" alt="">
                                </div>
                                <div class="col">
                                    <span>Faq</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="row  align-items-center">
                                <div class="col-auto">
                                    <img src="{{ asset('img/mail.png') }}" alt="">
                                </div>
                                <div class="col">
                                    <span>Contact us</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="row  align-items-center">
                                <div class="col-auto">
                                    <img src="{{ asset('img/terms.png') }}" alt="">
                                </div>
                                <div class="col">
                                    <span>Terms & Conditions</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="row  align-items-center">
                                <div class="col-auto">
                                    <img src="{{ asset('img/privacy.png') }}" alt="">
                                </div>
                                <div class="col">
                                    <span>Privacy Policy</span>
                                </div>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col mr-0 p-0">
            <div class="row block_pages_images">
                <div class="col-12">
                    <div class="row  pt-5">
                        <div class="col-md-6">
                            <div class="text_pages">
                                <span class="John-Silver">Josh Silver</span>
                            </div>
                        </div>
                        <div class="col-md-1 offset-5 text-right p-0"><a href="#"><img src="{{ asset('img/icon-setting2.png') }}" alt=""></a></div>
                    </div>
                    <div class="row mt-4" >
                        <div class="col-md-6">
                            <div class="textarea_pages">
                                <span>Описание кратное о человеке или сервисе</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row block_content">
                <div class="col-md-6 block_info_balance">
                    <div class="block_balance">
                        <div class="row">
                            <div class="col-md-12 Balance"><span class="">Balance</span></div>
                        </div>
                        <div class="row block_balance_cent">
                            <div class="col-md-8">
                                <span class="layer_cent">009.056.000</span>
                            </div>
                            <div class="col-md-2">
                                <span  class="layer_rav">=</span>
                            </div>
                            <div class="col-md-1 text-right">
                                <span  class="layer_result">23</span>
                            </div>
                        </div>
                        <div class="row satoshi">
                            <div class="col-md-6">
                                <span>satoshi</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <span>usd</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 block_info_faucet">
                    <div class="block_faucet">
                        <div class="row">
                            <div class="col-md-12 Balance"><span class="">New faucet</span></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn add_faucet" type="button">+ Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row block_content ">
                <div class="col-12 table_faucets">
                    <div class="row">
                        <div class="col-md-12 Balance"><span class="">My faucet</span></div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <table class="table table-hover table-borderless ">
                                <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>name</th>
                                    <th>template</th>
                                    <th>timer</th>
                                    <th>Payment</th>
                                    <th colspan="3">Captcha</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                    <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                    <td>Model 1</td>
                                    <td>every 8 h</td>
                                    <td>950 satoshi</td>
                                    <td>reCaptcha</td>
                                    <td><a href="#"><img class="delete_table" src="{{ asset('img/edit_table.png') }}" alt=""></a></td>
                                    <td><a href="#"><img class="edit_table" src="{{ asset('img/delete_table.png') }}" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                    <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                    <td>Model 1</td>
                                    <td>every 8 h</td>
                                    <td>950 satoshi</td>
                                    <td>reCaptcha</td>
                                    <td><a href="#"><img class="delete_table" src="{{ asset('img/edit_table.png') }}" alt=""></a></td>
                                    <td><a href="#"><img class="edit_table" src="{{ asset('img/delete_table.png') }}" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                    <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                    <td>Model 1</td>
                                    <td>every 8 h</td>
                                    <td>950 satoshi</td>
                                    <td>reCaptcha</td>
                                    <td><a href="#"><img class="delete_table" src="{{ asset('img/edit_table.png') }}" alt=""></a></td>
                                    <td><a href="#"><img class="edit_table" src="{{ asset('img/delete_table.png') }}" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                    <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                    <td>Model 1</td>
                                    <td>every 8 h</td>
                                    <td>950 satoshi</td>
                                    <td>reCaptcha</td>
                                    <td><a href="#"><img class="delete_table" src="{{ asset('img/edit_table.png') }}" alt=""></a></td>
                                    <td><a href="#"><img class="edit_table" src="{{ asset('img/delete_table.png') }}" alt=""></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Traffic overview--}}
    <section class="block_charts">
        <div class="row justify-content-center">
            <div class="col-auto  traffic_overview">
                <div class="row">
                    <div class="col-4 mr-auto traffic_header_text">
                        <span>Traffic overview</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-auto mr-auto text-center">
                        <div class="row t_header">
                            <div class="col">
                                <div class="h6 text-center">
                                    <span>Browser</span>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col">
                                <input class="knob" data-addval="%" data-width="100" data-thickness=".2" data-readOnly=true
                                       value="{{ rand(1, 100) }}">
                                <ul class="list-unstyled list_traff">
                                    <li>Chrome</li>
                                    <li>Safari</li>
                                    <li>Firefox</li>
                                    <li>ie9</li>
                                    <li>Netscape</li>
                                    <li>Unknow</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto m-auto text-center">
                        <div class="row t_header">
                            <div class="col">
                                <div class="h6 text-center">
                                    <span>Sumary</span>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col">
                                <input class="knob" data-addval="%" data-width="100" data-thickness=".2" data-readOnly=true
                                       value="{{ rand(1, 100) }}">
                                <ul class="list-unstyled list_traff">
                                    <li>Page Views</li>
                                    <li>{{ rand(1, 100) }}</li>
                                    <li>{{ rand(1, 100) }}</li>
                                    <li>{{ rand(1, 100) }}</li>
                                    <li>{{ rand(1, 100) }}</li>
                                    <li>{{ rand(1, 100) }}</li>
                                </ul>
                            </div>
                            <div class="col">
                                <input class="knob" data-addval="%" data-width="100" data-thickness=".2" data-readOnly=true
                                       value="{{ rand(1, 100) }}">
                                <ul class="list-unstyled list_traff">
                                    <li>Visits</li>
                                    <li>{{ rand(1, 100) }}</li>
                                    <li>{{ rand(1, 100) }}</li>
                                    <li>{{ rand(1, 100) }}</li>
                                    <li>{{ rand(1, 100) }}</li>
                                    <li>{{ rand(1, 100) }}</li>
                                </ul>
                            </div>
                            <div class="col">
                                <input class="knob" data-addval="%" data-width="100" data-thickness=".2" data-readOnly=true
                                       value="{{ rand(1, 100) }}">
                                <ul class="list-unstyled list_traff">
                                    <li>Audience</li>
                                    <li>{{ rand(1, 100) }}</li>
                                    <li>{{ rand(1, 100) }}</li>
                                    <li>{{ rand(1, 100) }}</li>
                                    <li>{{ rand(1, 100) }}</li>
                                    <li>{{ rand(1, 100) }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto ml-auto text-center">
                        <div class="row t_header">
                            <div class="col">
                                <div class="h6 text-center ">
                                    <span>Browser</span>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col">
                                <input class="knob" data-addval="%" data-width="100" data-thickness=".2" data-readOnly=true
                                       value="{{ rand(1, 100) }}">
                                <ul class="list-unstyled list_traff">
                                    <li>MacOSX</li>
                                    <li>Safari</li>
                                    <li>Firefox</li>
                                    <li>ie9</li>
                                    <li>Netscape</li>
                                    <li>Unknow</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
<section>
    <div class="row">
        <div class="col-md-6">
            <canvas id="myChart" width="100" height="50"></canvas>
        </div>
    </div>
</section>

<script>
    function getRandomArbitrary(min, max) {
        return Math.random() * (max - min) + min;
    }
    chart();
    function chart() {
        function randomScalingFactor() {
            return getRandomArbitrary(1,1000);
        };
        var ctx = document.getElementById("myChart");
        var config = {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
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
                    // }, {
                    //     label: 'My Second dataset',
                    //     borderColor: 'blue',
                    //     backgroundColor: 'blue',
                    //     data: [
                    //         randomScalingFactor(),
                    //         randomScalingFactor(),
                    //         randomScalingFactor(),
                    //         randomScalingFactor(),
                    //         randomScalingFactor(),
                    //         randomScalingFactor(),
                    //         randomScalingFactor()
                    //     ],
                    // },
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Chart.js Line Chart - Stacked Area'
                },
                tooltips: {
                    mode: 'index',
                },
                hover: {
                    mode: 'index'
                },
                scales: {
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
                }
            }
        };
        var myChart = new Chart(ctx, config);
    }
</script>
</div>
</body>
</html>