<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light rektangel-1 ">
        <div class="top_logo">
            <img src="{{ asset('img/logo.png') }}" alt="logo">
        </div>
        <div class="REWARDATRON">REWARDATRON</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mr-0">
                <li class="nav-item active">
                    <button class="btn btn-outline-info btn_registration">Registration</button>
                </li>
                <li class="nav-item user_logo">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('img/images_user.png') }}" alt="">
                        <div class="active_status"></div>John Silver
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                    {{--<div class="user_avatar"></div>--}}
                </li>
                <li class="nav-item header_language">
                    <img src="{{ asset('img/logo_lang.svg') }}" alt=""> <span class="eng">eng</span>
                </li>
            </ul>
        </div>
    </nav>
    {{--<div class="row rektangel-1 justify-content-between align-items-center">--}}
                {{--<div class="col-md-3">--}}
                   {{----}}
                {{--</div>--}}
                {{--<div class="col-md-7">--}}
                    {{--<ul class="navbar-nav mr-auto">--}}
                        {{--<li class="nav-item active">--}}
                            {{--<button class="btn btn-outline-info btn_registration">Registration</button>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item ">--}}
                            {{--<div class="user_avatar"></div>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item ">--}}

                        {{--</li>--}}
                    {{--</ul>--}}
                    {{--<div class="row no-gutters">--}}
                        {{--<div class="col-md-3">--}}
                            {{----}}
                        {{--</div>--}}
                        {{--<div class="col-md-7">--}}
                       {{----}}
                            {{--<div class="user_avatar">--}}
                            {{--</div>--}}
                            {{--<div class="btn-group">--}}
                                {{--<button type="button" class="btn btn-danger">John Silver</button>--}}
                                {{--<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                    {{--<span class="sr-only">Toggle Dropdown</span>--}}
                                {{--</button>--}}
                                {{--<div class="dropdown-menu">--}}
                                    {{--<a class="dropdown-item" href="#">Log out</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
        {{--</div>--}}
    </div>
</header>
<div class="container-fluid">
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>