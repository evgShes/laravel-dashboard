@extends('dashboard.layouts.default')
@section('content')
    <div class="row container_constructor">
        <div class="col-6 block_constructor">
            <section id="close_constructor" class="close_constructor">
                <div class="row">
                    <div class="col-md-4 offset-8"><a href="#" class="close_constructor__link">close constructor <img
                                    src="{{ asset('img/close-icon.png') }}" alt=""></a></div>
                </div>
            </section>
            <section id="constructor" class="constructor text-center">
                <div class="row">
                    <div class="col-md-12 m-auto justify-content-center">
                        <span class="constructor__header">
                            constructor faucet
                        </span>
                        <div class="constructor__step">
                            <ul class="nav">
                                <li><a data-toggle="tab" href="#step_1" role="tab" class="nav-link active_step active show" aria-selected="true">1 step</a></li>
                                <li><a data-toggle="tab" href="#step_2" role="tab" class="nav-link" aria-selected="false">2 step</a></li>
                                <li><a data-toggle="tab" href="#step_3" role="tab" class="nav-link" aria-selected="false">3 step</a></li>
                                <li><a data-toggle="tab" href="#step_4" role="tab" class="nav-link" aria-selected="false">4 step</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="step_1" role="tabpanel" >
                                <div class="constructor__input">
                                    <input type="text" class="" placeholder="Enter site name">
                                    <span>.xyz</span>
                                </div>
                                <div class="constructor__input d-flex justify-content-center m-auto">
                                    <label for="">mode:</label>
                                    <select name="" id="">
                                        <option>standart</option>
                                    </select>
                                </div>
                                <div class="constructor__input d-flex justify-content-center m-auto">
                                    <label for="">type:</label>
                                    <select name="" id="">
                                        <option>standart</option>
                                    </select>
                                </div>
                                <div class="constructor__input d-flex justify-content-center m-auto">
                                    <label for="">captcha:</label>
                                    <select name="" id="">
                                        <option>reCaptcha</option>
                                    </select>
                                </div>
                                <div class="constructor__info m-auto">
                                    Upload your logotype or select preset logos<br>
                                    format upload:  PNG, SVG, Jpeg<br>
                                    Size: max 2 mb<br>
                                </div>
                            </div>
                            <div class="tab-pane" id="step_2" role="tabpanel">
                                <div class="constructor__input d-flex justify-content-center m-auto">
                                    <label for="">logo:</label>
                                    <input type="text" placeholder="upload logo">
                                    <a href="#"><img src="{{ asset('img/upload.png') }}" alt=""></a>
                                    <a href="#"><img src="{{ asset('img/select.png') }}" alt=""></a>
                                </div>
                                <div class="constructor__input d-flex justify-content-center m-auto">
                                    <label for="">background:</label>
                                    <input type="text" placeholder="background">
                                    <a href="#"><img src="{{ asset('img/upload.png') }}" alt=""></a>
                                    <a href="#"><img src="{{ asset('img/select.png') }}" alt=""></a>
                                </div>
                                <div class="constructor__input d-flex justify-content-center m-auto constructor__input__main ">
                                    <label for="">main color:</label>
                                    <input type="text" placeholder="" value="#999999">
                                </div>
                                <div class="constructor__input d-flex justify-content-center m-auto constructor__input__additional">
                                    <label for="">additional color:</label>
                                    <input type="text" placeholder="" value="#3399ff">
                                </div>
                                <div class="constructor__input d-flex justify-content-center m-auto constructor__input__content ">
                                    <label for="">content text:</label>
                                    <input type="text" placeholder="" value="Change text">
                                </div>
                                <div class="constructor__info m-auto">
                                    Upload your logotype or select preset logos<br>
                                    format upload:  PNG, SVG, Jpeg<br>
                                    Size: max 2 mb<br>
                                </div>
                            </div>
                            <div class="tab-pane" id="step_3" role="tabpanel" >

                            </div>
                            <div class="tab-pane" id="step_4" role="tabpanel" >

                            </div>
                        </div>

                        <button class="constructor__button">
                            Next <img src="{{ asset('img/arrw.png') }}" alt="">
                        </button>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-6">

        </div>
    </div>
@endsection