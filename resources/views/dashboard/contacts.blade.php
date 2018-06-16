@extends('dashboard.layouts.default')
@section('content')
    <main>
        <div class="contact m-auto">
            <section>
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <div class="contact__header card-body">
                            <p>
                                If you have any questions please use the form below or contact us. We created a
                                <a href="">Frequently Asked Questions</a> page
                                to help you solve any issues in just a few seconds. Please read our FAQ before
                                contacting Support team.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <div class="contact__form highlight">
                            <ul class="nav nav-tabs" id="contactTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="true">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="bug_report-tab" data-toggle="tab" href="#bug_report" role="tab" aria-controls="bug_report" aria-selected="false">Bug report</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="feature_request-tab" data-toggle="tab" href="#feature_request" role="tab" aria-controls="feature_request" aria-selected="false">Feature request</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="contactTabContent">
                                <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="home-tab">
                                    <div id="" class="contact_form_label contact_form_wrap">
                                        <form action="#" id="">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name</label>
                                                        <input type="text" class="form-control " id="" aria-describedby="Name" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email address</label>
                                                        <input type="email" class="form-control " id="" aria-describedby="emailHelp" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Password</label>
                                                        <input type="password" class="form-control " id="" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Subject</label>
                                                        <input type="text" class="form-control " id="" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group h-100">
                                                        <label for="messageInput">Message</label>
                                                        <textarea name="" id="" class="w-100 h-75"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-lg-6 text-center">
                                                    <button class="btn btn-info " id="btn_send_message">Send message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bug_report" role="tabpanel" aria-labelledby="profile-tab">
                                    <div id="" class="contact_form_label contact_form_wrap">
                                        <form action="#" id="">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name</label>
                                                        <input type="text" class="form-control " id="" aria-describedby="Name" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email address</label>
                                                        <input type="email" class="form-control " id="" aria-describedby="emailHelp" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Password</label>
                                                        <input type="password" class="form-control " id="" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Subject</label>
                                                        <input type="text" class="form-control " id="" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group h-100">
                                                        <label for="messageInput">Message</label>
                                                        <textarea name="" id="" class="w-100 h-75"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-lg-6 text-center">
                                                    <button class="btn btn-info " id="btn_send_message">Send message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="feature_request" role="tabpanel" aria-labelledby="contact-tab">
                                    <div id="" class="contact_form_label contact_form_wrap">
                                        <form action="#" id="">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name</label>
                                                        <input type="text" class="form-control " id="" aria-describedby="Name" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email address</label>
                                                        <input type="email" class="form-control " id="" aria-describedby="emailHelp" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Password</label>
                                                        <input type="password" class="form-control " id="" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Subject</label>
                                                        <input type="text" class="form-control " id="" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group h-100">
                                                        <label for="messageInput">Message</label>
                                                        <textarea name="" id="" class="w-100 h-75"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-lg-6 text-center">
                                                    <button class="btn btn-info " id="btn_send_message">Send message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <div class="contact__social d-flex justify-content-center">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </main>

@endsection