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
                    <div class="col-md-12 m-auto justify-content-start">
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
                        <div class="tab-content  text-center  justify-content-center m-auto ">
                            <div class="tab-pane active " id="step_1" role="tabpanel" >
                                <div class="constructor__input">
                                    <div class="d-flex  justify-content-start m-auto">
                                        <input type="text" placeholder="Enter site name" class="constructor__input__width">
                                        <span>.xyz</span>
                                    </div>
                                    <div class=" d-flex  justify-content-start m-auto">
                                        <label for="">mode:</label>
                                        <select name="" id="">
                                            <option>standart</option>
                                        </select>
                                    </div>
                                    <div class=" d-flex justify-content-start m-auto">
                                        <label for="">type:</label>
                                        <select name="" id="">
                                            <option>standart</option>
                                        </select>
                                    </div>
                                    <div class=" d-flex justify-content-start m-auto">
                                        <label for="">captcha:</label>
                                        <select name="" id="">
                                            <option>reCaptcha</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="constructor__info m-auto">
                                    Upload your logotype or select preset logos<br>
                                    format upload:  PNG, SVG, Jpeg<br>
                                    Size: max 2 mb<br>
                                </div>
                            </div>
                            <div class="tab-pane" id="step_2" role="tabpanel">
                                <div class="constructor__input">
                                    <div class=" d-flex justify-content-start m-auto">
                                        <label for="">logo:</label>
                                        <input type="text" placeholder="upload logo">
                                        <a href="#"><img src="{{ asset('img/upload.png') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('img/select.png') }}" alt=""></a>
                                    </div>
                                    <div class=" d-flex justify-content-start m-auto">
                                        <label for="">background:</label>
                                        <input type="text" placeholder="background">
                                        <a href="#"><img src="{{ asset('img/upload.png') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('img/select.png') }}" alt=""></a>
                                    </div>
                                    <div class=" d-flex justify-content-start m-auto constructor__input__main ">
                                        <label for="">main color:</label>
                                        <input type="text" placeholder="" value="#999999">
                                    </div>
                                    <div class=" d-flex justify-content-start m-auto constructor__input__additional">
                                        <label for="">additional color:</label>
                                        <input type="text" placeholder="" value="#3399ff">
                                    </div>
                                    <div class=" d-flex justify-content-start m-auto constructor__input__content ">
                                        <label for="">content text:</label>
                                        <input type="text" placeholder="" value="Change text">
                                    </div>
                                </div>
                                <div class="constructor__info m-auto">
                                    Upload your logotype or select preset logos<br>
                                    format upload:  PNG, SVG, Jpeg<br>
                                    Size: max 2 mb<br>
                                </div>
                            </div>
                            <div class="tab-pane" id="step_3" role="tabpanel" >
                                <div class="constructor__block">
                                    <div class="constructor__input">
                                        <div class=" d-flex  justify-content-start m-auto">
                                            <label for="">reCaptcha public key:</label>
                                            <input type="text" placeholder="paste public key">
                                        </div>
                                        <div class=" d-flex justify-content-start m-auto">
                                            <label for="">reCaptcha secret key:</label>
                                            <input type="text" placeholder="paste secret key">
                                        </div>
                                    </div>
                                    <div class="text-center constructor__text">
                                        Reward probabillity (<b>in Satoshi</b>)
                                    </div>
                                    <div class="d-flex constructor__input justify-content-start m-auto">
                                        <div class="d-flex constructor__input__small">
                                            <input type="text" value="60">
                                            <img src="{{ asset('img/arr.png') }}" alt="">
                                            <input type="text" value="70">
                                        </div>
                                        <div class="d-flex constructor__input__small">
                                            <input type="text" value="120">
                                            <img src="{{ asset('img/arr.png') }}" alt="">
                                            <input type="text" value="30">
                                        </div>
                                        <div class="d-flex constructor__input__small">
                                            <input type="text" value="200">
                                            <img src="{{ asset('img/arr.png') }}" alt="">
                                            <input type="text" value="7">
                                        </div>
                                    </div>
                                    <div class="d-flex constructor__input justify-content-start m-auto constructor__input__time">
                                        <label for="" class="text-right">Time:</label>
                                        <input type="text" placeholder="1-999">
                                        <label for="">minutes</label>
                                    </div>
                                </div>
                                <div class="constructor__info m-auto">
                                    You can use the standart key of sdfdsfsdf or paste it from <a href="#">Google reCaptcha</a>
                                </div>
                            </div>
                            <div class="tab-pane " id="step_4" role="tabpanel" >
                                <div class="constructor__input">
                                    <div class=" d-flex  justify-content-start m-auto">
                                        <label for="">top:</label>
                                        <input type="text" class="constructor__input__width">
                                        <div class="error_img_mess"></div>
                                    </div>
                                    <div class=" d-flex  justify-content-start m-auto">
                                        <label for="">left small:</label>
                                        <input type="text" class="constructor__input__width">
                                        <div class="error_img_mess"></div>
                                    </div>
                                    <div class=" d-flex  justify-content-start m-auto">
                                        <label for="">right small:</label>
                                        <input type="text" class="constructor__input__width">
                                        <div class="error_img_mess"></div>
                                    </div>
                                    <div class=" d-flex  justify-content-start m-auto">
                                        <label for="">bottom:</label>
                                        <input type="text" class="constructor__input__width">
                                        <div class="error_img_mess"></div>
                                    </div>
                                </div>
                                <div class="constructor__info m-auto">
                                    Ad units for ad placement (edit, new, etc) click on the block in the present list or at thumbrall of your site
                                </div>
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