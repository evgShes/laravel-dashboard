@extends('dashboard.layouts.default')
@section('content')
    <div class="sitelist_background">
        <section>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="table_nav">
                        <div class="row align-content-center m-auto ">

                            <div class="col-md-3 table_nav__sort align-content-center">
                                <span class="table_nav_span">sort by</span>
                                <select name="" id="" class="table_nav__select ">
                                    <option value="">WALLET</option>
                                </select>
                            </div>

                            <div class="col-md-5 search_first">
                                <div class="right_bl"></div>
                                <div class="table_nav__search_block">
                                    <span class="table_nav_span">search</span>
                                    <input type="text" class="table_nav__inp table_nav__inp_search">
                                </div>
                            </div>
                            <div class="col-md-4 ml-lg-auto table_nav__payments">
                                <span class="table_nav_span">payments</span>
                                <input type="text" class="table_nav__inp table_nav__inp_range " value="10">
                                <span class="dot">.</span>
                                <input type="text" class="table_nav__inp table_nav__inp_range " value="1000">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="table_sitelist" class="table_sitelist">
            <div class="row">
                <div class="col-12">
                    <div class="tablel table_faucets">
                        <table class="table table-hover table-borderless ">
                            <thead class="tablel__head">
                            <tr class="justify-content-center m-auto">
                                <th class="display_none_75">Logo</th>
                                <th>name</th>
                                <th class="display_none_14" >template</th>
                                <th>timer</th>
                                <th>Payment</th>
                                <th>Captcha</th>
                            </tr>
                            </thead>
                            <tbody class="tablel__body">
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            <tr class="justify-content-center m-auto">
                                <td class="display_none_75"><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                <td class="display_none_14" >Model 1</td>
                                <td>every 8 h</td>
                                <td>950 satoshi</td>
                                <td>reCaptcha</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section id="pagiantion">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="pagination ">
                        <nav aria-label="Page navigation " class=" m-auto">
                            <ul class="d-flex justify-content-center pagination__item">
                                <li class="page-item"><a class="page-link" href="#"><</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item active"><a class="page-link active" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item pagination__dot"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">10</a></li>
                                <li class="page-item"><a class="page-link" href="#">20</a></li>
                                <li class="page-item"><a class="page-link" href="#">30</a></li>
                                <li class="page-item"><a class="page-link" href="#">></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection