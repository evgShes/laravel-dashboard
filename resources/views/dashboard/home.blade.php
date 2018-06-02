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
<div class="container-fluid">
<header>
    <div class="row rektangel-1 justify-content-between align-items-center">
                <div class="col-md-3">
                    <div class="top_logo">
                        <img src="{{ asset('img/logo.png') }}" alt="logo">
                    </div>
                    <div class="REWARDATRON">REWARDATRON</div>
                </div>
                <div class="col-md-7">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <button class="btn btn-outline-info btn_registration">Registration</button>
                        </div>
                        <div class="col-md-7">
                            <ul class="top_menu">
                                <li>
                                    <div class="user_avatar"></div>
                                </li>
                            </ul>
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
                        </div>
                    </div>
                </div>
        </div>
    </div>
</header>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>