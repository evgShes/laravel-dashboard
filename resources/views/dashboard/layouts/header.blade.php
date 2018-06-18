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
<div class="container-fluid p-0 min_width">
    <div class="row no-gutters">
        {{--left menu--}}
        <div class="col-3 col-xl-2  left_menu">
            <ul>
                <li class="active_link">
                    <a href="{{ url('/home') }}">
                        <div class="row no-gutters align-items-center">
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
                    <a href="{{ url('/sitelist') }}">
                        <div class="row no-gutters align-items-center">
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
                    <a href="{{ url('/consrt') }}">
                        <div class="row no-gutters align-items-center">
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
                        <div class="row no-gutters align-items-center">
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
                    <a href="{{ url('/setting') }}">
                        <div class="row no-gutters align-items-center">
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
                <li>
                    <a href="{{ url('/faq') }}">
                        <div class="row no-gutters align-items-center">
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
                    <a href="{{ url('/contacts') }}">
                        <div class="row no-gutters align-items-center">
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
                    <a href="{{ url('/terms') }}">
                        <div class="row no-gutters align-items-center">
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
                    <a href="{{ url('/privacy') }}">
                        <div class="row no-gutters align-items-center">
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
        {{--<div class="col-9 container_block mr-0 p-0">--}}
        <div class="col-9 col-xl-10 ml-auto mr-auto justify-content-center">