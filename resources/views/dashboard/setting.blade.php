@extends('dashboard.layouts.default')
@section('content')
    <div class="row no-gutters">
        <div class="col-md-12">
            <div class="setting_block">
                <div class="edit_btn">
                    <button><span>Edit Profile</span><img src="/img/edit-icon.png" class="edit_btn__img"></button>
                </div>
                    <div class="row no-gutters">
                        <div class="col-12 setting_adaptiv_b1 ">
                            <div class="profile">
                                <div class="profile__header"><span>Profile</span></div>
                                <div class="profile__name d-flex align-items-center">
                                    <span class="profile__field">Name*:</span>
                                    <span class="profile__name_s2 align-self-center "><input type="text" value="John Silver" class="setting__input"></span>
                                </div>
                                <div class="border_b"></div>
                                <div class="profile__ava d-flex justify-content-center align-items-center">
                                    <img src="/img/5.png" class="profile__ava">
                                </div>
                                <div class="profile__both d-flex justify-content-between">
                                    <div class="profile__field">E-mail*:</div>
                                    <div class="profile__value"><input type="email" value="SilverJohn12@gmail.com" class="setting__input"></div>
                                </div>
                                <div class="border_b"></div>
                                <div class="profile__both d-flex justify-content-between">
                                    <div class="profile__field">Date Of Birth:</div>
                                    <div class="profile__value"><input type="text" value="July 15, 1990" class="setting__input inp_date datetimepicker"></div>
                                </div>
                                <div class="border_b"></div>

                                <div class="profile__both d-flex justify-content-between">
                                    <div class="profile__field">Gender:</div>
                                    <div class="profile__value gender_value">Male</div>
                                </div>
                                <div class="border_b"></div>

                                <div class="profile__both d-flex justify-content-between">
                                    <div class="profile__field">Language:</div>
                                    <div class="profile__value">English</div>
                                </div>
                                <div class="border_b"></div>
                            </div>
                        </div>
                        <div class="col-12 setting_adaptiv_b1">
                            <div class="mess_block mess_block_b1">
                                <ul>
                                    <li><span>1.</span>A profile photo must have a format of png or jpeg</li>
                                    <li><span>2.</span>Image size should not exceed 1 mb</li>
                                </ul>
                            </div>
                            <div class="mess_block mess_block_b2">
                                <ul>
                                    <li><span>1.</span>	Specify a valid email, it will receive
                                        confirmation of your account</li>
                                    <li><span>2.</span>Marked fields * - are required for filling.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <section id="purse">
                    <div class="purse">
                        <div class="row no-gutters">
                            <div class="col-12 setting_adaptiv_b1 ">
                                <div class="profile">
                                    <div class="profile__header"><span>Purse</span></div>

                                    <div class="profile__both d-flex justify-content-between">
                                        <div class="profile__field">ICE-X Wallet key*:</div>
                                        <div class="profile__value"><input type="password" class="setting__input"></div>
                                    </div>
                                    <div class="border_b"></div>
                                    <div class="profile__both d-flex justify-content-between">
                                        <div class="profile__field">Mail authentication*:</div>
                                        <div class="profile__value"><input type="text" class="setting__input"></div>
                                    </div>
                                    <div class="border_b"></div>
                                </div>
                                <a href="#" class="delete_profile">Delete profile</a>
                            </div>
                            <div class="col-12 setting_adaptiv_b1">
                                <div class="mess_block mess_block_b3">
                                    <ul>
                                        <li><span>1.</span>	Copy or create a <a href="#">Ice-X wallet</a>
                                            to use our service</li>
                                        <li><span>2.</span>	Confirm using your wallet through email</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="profile_btn d-flex justify-content-center">
                    <button class="btn form_btn form_btn__save">Save</button>
                    <button class="btn form_btn form_btn__cancel">Cancel</button>
                </div>
            </div>
        </div>
    </div>
@endsection