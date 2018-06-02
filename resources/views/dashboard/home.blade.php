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
                <li class="nav-item active registration_link">
                    <button class="btn btn-outline-info btn_registration">Registration</button>
                </li>
                <li class="nav-item user_logo">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('img/images_user.png') }}" alt="">
                        <div class="active_status"></div>
                        <span class="John-Silver">John Silver</span>
                    </a>
                    <div class="dropdown-menu Log-out" aria-labelledby="navbarDropdownMenuLink">
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
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Home</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid">

</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>