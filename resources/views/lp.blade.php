<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('dashboard.layouts.scripts')
</head>
<body class="lp">
<div class="container-fluid">
    <div class="row justify-content-end align-content-end">
        <div class="col-2">
            <button class="btn btn-block btn-sm btn-danger button_scroll_down" type="button"><i class="fas fa-angle-up"></i></button>
        </div>
    </div>
</div>
<div class="wrap hidden_64">
    <section>
        <div class="curr">
            <div class="container-fluid">
                <div class="row curr__block justify-content-center">
                    <div class="col-10 curr_wrap">
                        <div class="d-flex flex-wrap  align-content-end">
                            <div class="curr__cont">
                                <div class="curr__name">bitcoin</div>
                                <div class="curr__value"><span >$5.1001.5</span><span class="curr__value_perc"><i class="fas fa-caret-up"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">bitcoin-cash</div>
                                <div class="curr__value"><span >$710.55</span><span class="curr__value_perc"><i class="fas fa-caret-up"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">ethereum</div>
                                <div class="curr__value"><span >$380.123</span><span class="curr__value_subsid"><i class="fas fa-caret-down"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">dash</div>
                                <div class="curr__value"><span >$400.501</span><span class="curr__value_perc"><i class="fas fa-caret-up"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">litecoin</div>
                                <div class="curr__value"><span >$210.55</span><span class="curr__value_perc"><i class="fas fa-caret-up"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">ripple</div>
                                <div class="curr__value"><span>$0.123</span><span class="curr__value_subsid"><i class="fas fa-caret-down"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">monero</div>
                                <div class="curr__value"><span >$380.123</span><span class="curr__value_subsid"><i class="fas fa-caret-down"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont hidden_75">
                                <div class="curr__name">neo</div>
                                <div class="curr__value"><span >$50.501</span><span class="curr__value_perc"><i class="fas fa-caret-up"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont hidden_75">
                                <div class="curr__name">liota</div>
                                <div class="curr__value"><span >$0.955</span><span class="curr__value_perc"><i class="fas fa-caret-up"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont hidden_75">
                                <div class="curr__name">nem</div>
                                <div class="curr__value"><span >$0.123</span><span class="curr__value_subsid"><i class="fas fa-caret-down"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont hidden_10">
                                <div class="curr__name">neo</div>
                                <div class="curr__value"><span >$50.501</span><span class="curr__value_perc"><i class="fas fa-caret-down"></i>0.31%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 cur__rel justify-content-center align-baseline">
                        <div class="">
                            link to <a href="#">icex.ch</a><i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<header class="header_lp" id="header_lp">
    <nav class="navbar navbar-expand navbar-light d-flex justify-content-between">
        <div class="menu__icon">
            <a class="navbar-brand header_lp__logo" href="#"><img src="{{ asset('img/logo_icon.svg') }}" alt=""><span class="hidden_10"> REWARDATRON</span> </a>
        </div>
        <div class="collapse navbar-collapse d-flex justify-content-between menu" id="header_lp__navbar">
            <div class="menu__nav">
                <ul class="navbar-nav m-auto  ">
                    {{--<li class="nav-item active">--}}
                    {{--<a class="nav-link" href="#"><img src="{{ asset('img/logo_icon.svg') }}" alt="">REWARDATRON <span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="#content_advantages">ADVANTAGES</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#we_offer">WE&nbsp;OFFER</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#create_currency">TABLE</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#block_faq">FAQ</a>
                </li>
            </ul>
            </div>
            <div class="menu__btn">
                <ul class="navbar-nav mr-0">
                    <li class="nav-item justify-content-center ">
                        <button class="header_lp__lang" type="button" >ENG</button>
                    </li>
                    <li class=" nav-item  ">
                        <button type="button" data-toggle="modal" data-target="#login" class="header_lp__sign">SIGN UP</button>
                        <button type="button" data-toggle="modal" data-target="#login" class="header_lp__login">LOGIN</button>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row ">
                        <div class="col form_registration_modal">
                            <label for="">Login name <span>*</span></label>
                            <input type="text" class="form-control">
                            <label for="">e-mail<span>*</span></label>
                            <input type="text" class="form-control">
                            <label for="">password<span>*</span></label>
                            <input type="text" class="form-control">
                            <button type="button" class="header_lp__sign" data-dismiss="modal">REGISTRATION</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container header_container">
        <div class=" row align-items-end text-right">
            <div class="col align-items-end text-right d-flex justify-content-end">
                <img src="{{ asset('img/detals.svg') }}" alt="" class="header_container__img">
                <span class="header_container__title hidden_75">rewardatron</span>
            </div>
        </div>
        <div class="row">
            <h3 class="header_container__slide_inform__title">Decentralized service</h3>

            <div class="col-6 header_container__slide_inform">
                <p class="header_container__slide_inform__text">that allows you to create applications for earnings on the Internet.</p>
            </div>
            <div class="col-6 header_container__main_img">
                {{--<img src="{{ asset('img/illustr.png') }}" alt="">--}}
            </div>
        </div>
    </div>
</header>
<div data-spy="scroll">
    <section class="content_advantages" id="content_advantages">
        <img src="{{ asset('img/bg_gray1.svg') }}" class="content_advantages__background" alt="">
        <a  href="#content_advantages" class="scroll_bottom" type="" ><i class="fas fa-angle-down"></i></a>
        {{--<div class="circl_line__left"></div>--}}
        {{--<div class="circl_line__right"></div>--}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 text-right">
                    <div class="content_advantages__name">Advantages</div>
                    <div class="content_advantages__line"></div>
                    <div class="content_advantages__text">a little about our advantages</div>
                </div>
            </div>
        </div>
        <div class="container mt-100">
            <div class="row content_advantages__block">
                <div class="col-5 d-flex content_advantages__block__image">
                    <span>01</span>
                    <img src="{{ asset('img/Forma1.png') }}" alt="">
                </div>
                <div class="col-7 content_advantages__block__content">
                    <h3 class="content_advantages__block__content__header">automatic connection  to the ICEX.Wallet system</h3>
                    <p class="content_advantages__block__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo ligula eget dolor. Aenean massa.
                        Cum sociis natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus. Donec</p>
                </div>
            </div>
            <div class="row content_advantages__block">
                <div class="col-5 d-flex content_advantages__block__image orange_image">
                    <span>02</span>
                    <img src="{{ asset('img/rest_api.png') }}" alt="">
                </div>
                <div class="col-7 content_advantages__block__content">
                    <h3 class="content_advantages__block__content__header">convenient Rest API</h3>
                    <p class="content_advantages__block__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo ligula eget dolor. Aenean massa.
                        Cum sociis natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus. Donec</p>
                </div>
            </div>
            <div class="row content_advantages__block">
                <div class="col-5 d-flex content_advantages__block__image">
                    <span>03</span>
                    <img src="{{ asset('img/Forma3.png') }}" alt="">
                </div>
                <div class="col-7 content_advantages__block__content">
                    <h3 class="content_advantages__block__content__header">multy crypto currencies</h3>
                    <p class="content_advantages__block__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo ligula eget dolor. Aenean massa.
                        Cum sociis natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus. Donec</p>
                </div>
            </div>
            <div class="row content_advantages__block">
                <div class="col-5 d-flex content_advantages__block__image">
                    <span>04</span>
                    <img src="{{ asset('img/Forma4.png') }}" alt="">
                </div>
                <div class="col-7 content_advantages__block__content">
                    <h3 class="content_advantages__block__content__header">decentralization</h3>
                    <p class="content_advantages__block__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo ligula eget dolor. Aenean massa.
                        Cum sociis natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus. Donec</p>
                </div>
            </div>
        </div>
    </section>
    <div id="we_offer" class="container-fluid mt-250">
        <div class="row ">
            <div class="col-4 text-right">
                <div class="content_advantages__name">We offer</div>
                <div class="content_advantages__line"></div>
            </div>
        </div>
    </div>
    <div class="wrap_block ">
        <div class="step_shadow">
            <section>
                <div class="container-fluid">
                    <div class="faucet mt-150">
                        <div class="row">
                            <div class="faucet__title  d-flex justify-content-center align-content-center">
                                <div class="faucet__title_2">01</div>
                                <div class="faucet__title_1">Faucet Constructor</div>
                            </div>
                            <div class="col-6 faucet__left d-flex align-items-center justify-content-xl-end justify-content-center">
                                <div class="step_img_block">
                                    <img class="step_img" src="{{ asset('img/cons.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-6 faucet__right">
                                <div class="step_text d-flex flex-column align-items-center">
                                    <div class="stick"></div>
                                    <p class="step_p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Aenean commodo ligula eget dolor. Aenean massa.
                                        Cum sociis natoque penatibus et magnis dis parturient montes,
                                        nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                        pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container-fluid">
                    <div class="integra">
                        <div class="row">
                            <div class="faucet__title  d-flex justify-content-center align-content-center">
                                <div class="faucet__title_1">INTEGRATION API</div> <div class="faucet__title_2">02</div>
                            </div>
                            <div class="col-6 faucet__left">
                                <div class="step_text d-flex flex-column align-items-center">
                                    <div class="stick"></div>
                                    <p class="step_p">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Aenean commodo ligula eget dolor. Aenean massa.
                                        Cum sociis natoque penatibus et magnis dis parturient montes,
                                        nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                        pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 faucet__right d-flex align-items-center justify-content-center">
                                <div class="step_img_block">
                                    <img class="step_img" src="{{ asset('img/mix.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container-fluid">
                    <div class="games">
                        <div class="row">
                            <div class="faucet__title  d-flex justify-content-center align-content-center">
                                <div class="faucet__title_2">03</div>
                                <div class="faucet__title_1">GAMES (coming soon)</div>
                            </div>
                            <div class="col-6 faucet__left d-flex align-items-center justify-content-center">
                                <div class="step_img_block">
                                    <img class="step_img" src="{{ asset('img/games.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-6 faucet__right">
                                <div class="step_text d-flex flex-column align-items-center">
                                    <div class="stick"></div>
                                    <p class="step_p"> Just a couple of clicks, and you can enjoy your favorite games.
                                        Cum sociis natoque penatibus et magnis dis parturient montes,
                                        nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                        pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
    <section class="create_currency mt-150" id="create_currency">
        <img src="{{ asset('img/logo_icon.svg') }}" alt="" class="logo_hidden hidden_10">
        <img src="{{ asset('img/gray_3.png') }}" alt="" class="background_line">
        <div class="container mt-300 block_computer">
            <div class="row">
                <div class="col create_currency__header">
                    <h2>Create your own crypto currency!</h2>
                </div>
            </div>
            <div class="row">
                <div class="col create_currency__header">
                    <p>We offer to try our service and make sure  how much it is convenient</p>
                </div>
            </div>
            <img src="{{ asset('img/comets_hidden1.png') }}" alt="" class="comets1">
            <img src="{{ asset('img/comets_visibl2.png') }}" alt="" class="comets2">

        </div>
        <div class="container-fluid mt-250">
            <div class="row block_computer">
                <div class="col">
                    <img src="{{ asset('img/notebook.png') }}" alt="">
                </div>
                <div class="col form_registration">
                    <label for="">Login name <span>*</span></label>
                    <input type="text" class="form-control">
                    <label for="">e-mail<span>*</span></label>
                    <input type="text" class="form-control">
                    <label for="">password<span>*</span></label>
                    <input type="text" class="form-control">
                    <button type="button" class="header_lp__sign">REGISTRATION</button>
                </div>
                <div class="rewardatron_hidden hidden_75">
                    rewardatron
                </div>
            </div>
            <div class="row ">
                <div class="col-4 text-right ">
                    <div class="content_advantages__name text-white">table</div>
                    <div class="content_advantages__line"></div>
                </div>
            </div>
            <div class="container mt-100">
                <div class="row table_block">
                    <p>we have prepared the convenient table for your<br> earnings without excess waste of time</p>
                    <table class="table">
                        <thead>
                        {{--<tr>--}}
                        {{--<th></th>--}}
                        {{--<th></th>--}}
                        {{--<th></th>--}}
                        {{--<th></th>--}}
                        {{--<th></th>--}}
                        {{--</tr>--}}
                        <tr>
                            <th>Name <img src="{{ asset('img/sort.png') }}" alt=""></th>
                            <th>Times <img src="{{ asset('img/sort.png') }}" alt=""></th>
                            <th>Payments (satoshi) <img src="{{ asset('img/sort.png') }}" alt=""></th>
                            <th class="hidden_75">Template <img src="{{ asset('img/sort.png') }}" alt=""></th>
                            <th  class="hidden_75">Mode <img src="{{ asset('img/sort.png') }}" alt=""></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="">JustOne</a></td>
                            <td>each 8 hours</td>
                            <td>320.500 satoshi</td>
                            <td class="hidden_75">Custom</td>
                            <td class="status_active hidden_75">Active</td>
                        </tr>
                        <tr>
                            <td><a href="">Cryptozaur</a></td>
                            <td>each 12 hours</td>
                            <td>500.000 satoshi</td>
                            <td class="hidden_75">Default</td>
                            <td class="status_active hidden_75">Active</td>
                        </tr>
                        <tr>
                            <td><a href="">JustOne</a></td>
                            <td>each 8 hours</td>
                            <td>320.500 satoshi</td>
                            <td class="hidden_75">Custom</td>
                            <td class="status_active hidden_75">Active</td>
                        </tr>
                        <tr>
                            <td><a href="">Cryptozaur</a></td>
                            <td>each 12 hours</td>
                            <td>500.000 satoshi</td>
                            <td class="hidden_75">Default</td>
                            <td class="status_active hidden_75">Active</td>
                        </tr>
                        <tr>
                            <td><a href="">JustOne</a></td>
                            <td>each 8 hours</td>
                            <td>320.500 satoshi</td>
                            <td class="hidden_75">Custom</td>
                            <td class="status_active hidden_75">Active</td>
                        </tr>
                        <tr>
                            <td><a href="">Cryptozaur</a></td>
                            <td>each 12 hours</td>
                            <td>500.000 satoshi</td>
                            <td class="hidden_75">Default</td>
                            <td class="status_active hidden_75">Active</td>
                        </tr>
                        <tr>
                            <td><a href="">JustOne</a></td>
                            <td>each 8 hours</td>
                            <td>320.500 satoshi</td>
                            <td class="hidden_75">Custom</td>
                            <td class="status_active hidden_75">Active</td>
                        </tr>
                        <tr>
                            <td><a href="">Cryptozaur</a></td>
                            <td>each 12 hours</td>
                            <td>500.000 satoshi</td>
                            <td class="hidden_75">Default</td>
                            <td class="status_active hidden_75">Active</td>
                        </tr>
                        <tr>
                            <td><a href="">JustOne</a></td>
                            <td>each 8 hours</td>
                            <td>320.500 satoshi</td>
                            <td class="hidden_75">Custom</td>
                            <td class="status_active hidden_75">Active</td>
                        </tr>
                        <tr>
                            <td><a href="">Cryptozaur</a></td>
                            <td>each 12 hours</td>
                            <td>500.000 satoshi</td>
                            <td class="hidden_75">Default</td>
                            <td class="status_active hidden_75">Active</td>
                        </tr>
                        <tr>
                            <td><a href="">JustOne</a></td>
                            <td>each 8 hours</td>
                            <td>320.500 satoshi</td>
                            <td class="hidden_75">Custom</td>
                            <td class="status_active hidden_75">Active</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="block_faq" id="block_faq">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-4 text-right ">
                    <div class="content_advantages__name">faq</div>
                    <div class="content_advantages__line"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="accordion mt-100" id="accordion">
                <div class="card">
                    <div class="card-header" id="question1">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse_question1" aria-expanded="true" aria-controls="collapse_question1">
                                Is it safe to use our servise?
                            </button>
                        </h5>
                    </div>

                    <div id="collapse_question1" class="collapse show" aria-labelledby="question1" data-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor. Aenean massa.
                            Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Donec quam felis, ultricies nec,
                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="question2">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_question2" aria-expanded="false" aria-controls="collapse_question2">
                                Question 2
                            </button>
                        </h5>
                    </div>
                    <div id="collapse_question2" class="collapse" aria-labelledby="question2" data-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor. Aenean massa.
                            Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Donec quam felis, ultricies nec,
                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="question3">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_question3" aria-expanded="false" aria-controls="collapse_question3">
                                Question 3
                            </button>
                        </h5>
                    </div>
                    <div id="collapse_question3" class="collapse" aria-labelledby="question3" data-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor. Aenean massa.
                            Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Donec quam felis, ultricies nec,
                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="question4">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_question4" aria-expanded="false" aria-controls="collapse_question4">
                                Question 4
                            </button>
                        </h5>
                    </div>
                    <div id="collapse_question4" class="collapse" aria-labelledby="question4" data-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor. Aenean massa.
                            Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Donec quam felis, ultricies nec,
                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="question5">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_question5" aria-expanded="false" aria-controls="collapse_question5">
                                Question 5
                            </button>
                        </h5>
                    </div>
                    <div id="collapse_question5" class="collapse" aria-labelledby="question3" data-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor. Aenean massa.
                            Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Donec quam felis, ultricies nec,
                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        </div>
                    </div>
                </div>
            </div>
            <div class="block_faq__button">
                <button class="">ask a question</button>
            </div>
        </div>
    </section>
</div>

<footer class="footer_block " id="footer_block">
    <div class="container text-center">
        <div class="footer_block__social m-auto text-center">
            <span>social networks</span>
            <div class="d-flex">
                <a href="" class="footer_block__social__inst"></a>
                <a href="" class="footer_block__social__tele"></a>
                <a href="" class="footer_block__social__face"></a>
                <a href="" class="footer_block__social__twit"></a>
            </div>
        </div>
        <div class="row footer_block__link">
            <div class="col-6 text-left">
                <div><span>help</span></div>
                <div><a href="">Terms&Conditions <i class="fas fa-angle-right"></i></a></div>
                <div><a href="">privacy policy <i class="fas fa-angle-right"></i></a></div>
            </div>
            <div class="col-6 text-left">
                <div><span>partners</span></div>
                <div><a href="">icex.media <i class="fas fa-angle-right"></i></a></div>
                <div><a href="">icex.wallet <i class="fas fa-angle-right"></i></a></div>
            </div>
        </div>
        <a class="navbar-brand header_lp__logo" href="#"><img src="{{ asset('img/logo_icon.svg') }}" alt=""> REWARDATRON</a>
    </div>
    <div class="link_create">
        <span>© 2018 All rights reserved</span>
    </div>
</footer>
</body>
</html>