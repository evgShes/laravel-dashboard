@extends('dashboard.layouts.default')
@section('content')

    {{--<div class="col-9 container_block mr-0 p-0 container_faq">--}}
    <div class="container_faq">
        <div class="row margin_left_full">
            <div class=" col-12">
                <ul class="nav nav-tabs navigation_faq">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tab_1" role="tab" aria-controls="tab_1" aria-selected="true">TAB 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab_2" role="tab" aria-controls="tab_2" aria-selected="false">TAB 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab_3" role="tab" aria-controls="tab_3" aria-selected="false">TAB 3</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                        <div class="accordion" id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <a type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How to withdraw the balances In case i do not appreciate your application?
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class=" collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How to withdraw the balances In case i do not appreciate your application?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Do I have to pay for hosting and domain name?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFore">
                                    <h5 class="mb-0">
                                        <a class="collapsed" type="button" data-toggle="collapse" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">
                                            How to withdraw the balances In case i do not appreciate your application?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordion">
                                    <div class="card-body">
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFife">
                                    <h5 class="mb-0">
                                        <a class="collapsed" type="button" data-toggle="collapse" data-target="#collapseFife" aria-expanded="false" aria-controls="collapseFife">
                                            Do I have to pay for hosting and domain name?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFife" class="collapse" aria-labelledby="headingFife" data-parent="#accordion">
                                    <div class="card-body">
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h5 class="mb-0">
                                        <a class="collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            How to withdraw the balances In case i do not appreciate your application?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                    <div class="card-body">
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab_2" role="tabpanel" >
                        <div class="accordion" id="accordion_tab_2">
                            <div class="card">
                                <div class="card-header" id="headingOne_tab_2">
                                    <h5 class="mb-0">
                                        <a class="" type="button" data-toggle="collapse" data-target="#collapseOne_tab_2" aria-expanded="true" aria-controls="collapseOne_tab_2">
                                            How to withdraw the balances In case i do not appreciate your application?
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseOne_tab_2" class="collapse show" aria-labelledby="headingOne_tab_2" data-parent="#accordion_tab_2">
                                    <div class="card-body">
                                        Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo_tab_2">
                                    <h5 class="mb-0">
                                        <a class=" collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo_tab_2" aria-expanded="false" aria-controls="collapseTwo_tab_2">
                                            How to withdraw the balances In case i do not appreciate your application?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo_tab_2" class="collapse" aria-labelledby="headingTwo_tab_2" data-parent="#accordion_tab_2">
                                    <div class="card-body">
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree_tab_2">
                                    <h5 class="mb-0">
                                        <a class=" collapsed" type="button" data-toggle="collapse" data-target="#collapseThree_tab_2" aria-expanded="false" aria-controls="collapseThree_tab_2">
                                            Do I have to pay for hosting and domain name?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree_tab_2" class="collapse" aria-labelledby="headingThree_tab_2" data-parent="#accordion_tab_2">
                                    <div class="card-body">
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFore_tab_2">
                                    <h5 class="mb-0">
                                        <a class=" collapsed" type="button" data-toggle="collapse" data-target="#collapseFore_tab_2" aria-expanded="false" aria-controls="collapseFore_tab_2">
                                            How to withdraw the balances In case i do not appreciate your application?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFore_tab_2" class="collapse" aria-labelledby="headingFore_tab_2" data-parent="#accordion_tab_2">
                                    <div class="card-body">
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFife_tab_2">
                                    <h5 class="mb-0">
                                        <a class=" collapsed" type="button" data-toggle="collapse" data-target="#collapseFife_tab_2" aria-expanded="false" aria-controls="collapseFife_tab_2">
                                            Do I have to pay for hosting and domain name?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFife_tab_2" class="collapse" aria-labelledby="headingFife_tab_2" data-parent="#accordion_tab_2">
                                    <div class="card-body">
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix_tab_2">
                                    <h5 class="mb-0">
                                        <a class=" collapsed" type="button" data-toggle="collapse" data-target="#collapseSix_tab_2" aria-expanded="false" aria-controls="collapseSix_tab_2">
                                            How to withdraw the balances In case i do not appreciate your application?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseSix_tab_2" class="collapse" aria-labelledby="headingSi_tab_2x" data-parent="#accordion_tab_2">
                                    <div class="card-body">
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab_3" role="tabpanel">
                        <div class="accordion" id="accordion_tab_3">
                            <div class="card">
                                <div class="card-header" id="headingOne_tab_3">
                                    <h5 class="mb-0">
                                        <a class="" type="button" data-toggle="collapse" data-target="#collapseOne_tab_3" aria-expanded="true" aria-controls="collapseOne_tab_3">
                                            How to withdraw the balances In case i do not appreciate your application?
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseOne_tab_3" class="collapse show" aria-labelledby="headingOne_tab_3" data-parent="#accordion_tab_3">
                                    <div class="card-body">
                                        Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo_tab_3">
                                    <h5 class="mb-0">
                                        <a class=" collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo_tab_3" aria-expanded="false" aria-controls="collapseTwo_tab_3">
                                            How to withdraw the balances In case i do not appreciate your application?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo_tab_3" class="collapse" aria-labelledby="headingTwo_tab_3" data-parent="#accordion_tab_3">
                                    <div class="card-body">
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree_tab_3">
                                    <h5 class="mb-0">
                                        <a class=" collapsed" type="button" data-toggle="collapse" data-target="#collapseThree_tab_3" aria-expanded="false" aria-controls="collapseThree_tab_3">
                                            Do I have to pay for hosting and domain name?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree_tab_3" class="collapse" aria-labelledby="headingThree_tab_3" data-parent="#accordion_tab_3">
                                    <div class="card-body">
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFore_tab_3">
                                    <h5 class="mb-0">
                                        <a class=" collapsed" type="button" data-toggle="collapse" data-target="#collapseFore_tab_3" aria-expanded="false" aria-controls="collapseFore_tab_3">
                                            How to withdraw the balances In case i do not appreciate your application?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFore_tab_3" class="collapse" aria-labelledby="headingFore_tab_3" data-parent="#accordion_tab_3">
                                    <div class="card-body">
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFife_tab_3">
                                    <h5 class="mb-0">
                                        <a class=" collapsed" type="button" data-toggle="collapse" data-target="#collapseFife_tab_3" aria-expanded="false" aria-controls="collapseFife_tab_3">
                                            Do I have to pay for hosting and domain name?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFife_tab_3" class="collapse" aria-labelledby="headingFife_tab_3" data-parent="#accordion_tab_3">
                                    <div class="card-body">
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix_tab_3">
                                    <h5 class="mb-0">
                                        <a class=" collapsed" type="button" data-toggle="collapse" data-target="#collapseSix_tab_3" aria-expanded="false" aria-controls="collapseSix_tab_3">
                                            How to withdraw the balances In case i do not appreciate your application?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseSix_tab_3" class="collapse" aria-labelledby="headingSix_tab_3" data-parent="#accordion_tab_3">
                                    <div class="card-body">
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                        <div>
                                            Anytime you may stop the work of your faucet(-s) through your personal account and withdraw the balances
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection