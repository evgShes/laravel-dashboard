@extends('dashboard.layouts.default')
@section('content')
        {{--<div class="col-9 container_block mr-0 p-0 home_background">--}}
            <div class="home_background">
                <div class="row block_pages_images">
                    <div class="col-12">
                        <div class="row  pt-5">
                            <div class="col-md-6">
                                <div class="text_pages">
                                    <span class="John-Silver">Josh Silver</span>
                                </div>
                            </div>
                            <div class="col-md-1 display_none_14 offset-5 text-right p-0"><a href="#" data-toggle="modal" data-target="#settings"><img src="{{ asset('img/icon-setting2.png') }}" alt=""></a></div>
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


                {{--Block Balance--}}
                <div class="row block_content">
                    <div class="col-auto block_info_balance">
                        <div class="block_balance">
                            <div class="row">
                                <div class="col-md-12 Balance"><span class="">Balance</span></div>
                            </div>
                            <div class="row block_balance_cent">
                                <div class="col-md-8 col-sm-12">
                                    <span class="layer_cent">009.056.000</span>
                                </div>
                                <div class="col-md-1 display_none_75">
                                    <span  class="layer_rav">=</span>
                                </div>
                                <div class="col-md-3 display_none_75 text-right">
                                    <span  class="layer_result">23</span>
                                </div>
                            </div>
                            <div class="row satoshi">
                                <div class="col-md-6">
                                    <span>satoshi</span>
                                </div>
                                <div class="col-md-6 display_none_75 text-right">
                                    <span>usd</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col block_info_faucet">
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
                <div class="row block_content padding_75 ">
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
                                        <th class="display_none_75" >template</th>
                                        <th>timer</th>
                                        <th>Payment</th>
                                        <th class="display_none_75 display_none_80" colspan="3">Captcha</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                        <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                        <td class="display_none_75 display_none_80" >Model 1</td>
                                        <td>every 8 h</td>
                                        <td>950 satoshi</td>
                                        <td class="display_none_75 display_none_80" >reCaptcha</td>
                                        <td class="display_none_75 display_none_80" ><a href="#"><img class="delete_table" src="{{ asset('img/edit_table.png') }}" alt=""></a></td>
                                        <td class="display_none_75 display_none_80" ><a href="#"><img class="edit_table" src="{{ asset('img/delete_table.png') }}" alt=""></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                        <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                        <td class="display_none_75 display_none_80" >Model 1</td>
                                        <td>every 8 h</td>
                                        <td>950 satoshi</td>
                                        <td class="display_none_75 display_none_80" >reCaptcha</td>
                                        <td class="display_none_75 display_none_80" ><a href="#"><img class="delete_table" src="{{ asset('img/edit_table.png') }}" alt=""></a></td>
                                        <td class="display_none_75 display_none_80" ><a href="#"><img class="edit_table" src="{{ asset('img/delete_table.png') }}" alt=""></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                        <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                        <td class="display_none_75 display_none_80" >Model 1</td>
                                        <td>every 8 h</td>
                                        <td>950 satoshi</td>
                                        <td class="display_none_75 display_none_80" >reCaptcha</td>
                                        <td class="display_none_75 display_none_80" ><a href="#"><img class="delete_table" src="{{ asset('img/edit_table.png') }}" alt=""></a></td>
                                        <td class="display_none_75 display_none_80" ><a href="#"><img class="edit_table" src="{{ asset('img/delete_table.png') }}" alt=""></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row block_content padding_75">
                    <section class="block_charts">
                        <div class="col traffic_overview">
                            <div class="row">
                                <div class="col traffic_header_text">
                                    <span>Traffic overview</span>
                                </div>
                            </div>

                            <div class="row grafic_block">
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
                                            <input class="knob" data-addval="%" data-width="171" data-thickness=".2" data-readOnly=true
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
                                            <input class="knob" data-addval="Avg" data-width="171" data-thickness=".2" data-readOnly=true
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
                                        <div class="col xl_screen">
                                            <input class="knob" data-addval="Avg" data-width="171" data-thickness=".2" data-readOnly=true
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
                                        <div class="col xl_screen">
                                            <input class="knob" data-addval="Avg" data-width="171" data-thickness=".2" data-readOnly=true
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

                                <div class="col-auto ml-auto text-center display_none_75">
                                    <div class="row t_header">
                                        <div class="col">
                                            <div class="h6 text-center ">
                                                <span>System</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <input class="knob" data-addval="%" data-width="171" data-thickness=".2" data-readOnly=true
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
                    </section>
                </div>
                <div class="row block_content padding_75">
                    <div class="col">
                        <canvas id="myChart" width="100" height="50"></canvas>
                    </div>
                </div>
            </div>
        <section>
            <div class="modal fade  home_edit" id="settings" tabindex="-1" role="dialog" aria-labelledby="settings" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        {{--<div class="modal-header">--}}
                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                {{--<span aria-hidden="true">&times;</span>--}}
                            {{--</button>--}}
                        {{--</div>--}}
                        <div class="modal-body">
                            <section class="home_edit__header" id="home_edit__header">
                                    <div class="row">
                                        <div class="col-8">
                                            <form action="">
                                                <div class="form-group">
                                                    <input type="text" class="form-group" placeholder="Create name">
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="" id="" class="form-group" placeholder="Text..."></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-4 text-right home_edit__button">
                                            <a href="#"><img src="{{ asset('img/bg-upload.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('img/accept-icon.png') }}" alt=""></a>
                                        </div>
                                    </div>
                            </section>
                            <section class="setting_block_background" id="setting_block_background">
                                <h2 class="setting_block_background__header">Select one of the ready backgrounds</h2>
                                <div class="row setting_block_background__content">
                                    <div class="col-md-3">
                                        <button type="button"><img src="{{ asset('img/879.png') }}" alt=""></button>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button"><img src="{{ asset('img/880.png') }}" alt=""></button>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button"><img src="{{ asset('img/882.png') }}" alt=""></button>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button"><img src="{{ asset('img/883.png') }}" alt=""></button>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button"><img src="{{ asset('img/884.png') }}" alt=""></button>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button"><img src="{{ asset('img/885.png') }}" alt=""></button>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button"><img src="{{ asset('img/886.png') }}" alt=""></button>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button"><img src="{{ asset('img/881.png') }}" alt=""></button>
                                    </div>
                                </div>
                            </section>
                        </div>
                        {{--<div class="modal-footer">--}}
                            {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                            {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </section>

        {{--</div>--}}

@endsection