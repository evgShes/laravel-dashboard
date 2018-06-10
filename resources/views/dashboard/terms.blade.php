@extends('dashboard.layouts.default')
@section('content')
    <div class="terms_background">
        <section id="terms__document" class="terms__document">
            <div class="row">
                <div class="col-xl-4 offset-xl-8 text-right">
                    <a class="terms__link" href="#"><img src="{{ asset('img/download.png') }}" alt="">Download pdf</a>
                </div>
            </div>
        </section>
        <section class="terms__text" id="terms__text">
            <p class="terms__text__bold terms__text__italics terms__text__line">
                By using site, products, and services, users agree that collects and processes the personally identifiable information (as defined below) they provide by creating an Cryptozaur account. Administration will not share any personally identifiable information with other parties except as described in this policy. Administration also processes anonymous data, aggregated or not, in order to analyze and produce statistics related to the habits, usage patterns, and demographics of users as a group or as individuals. Such anonymous data does not allow the identification of the users to which it relates.
            </p>
            <p>
                <span class="terms__text__bold">User agrees</span>
            </p>
            <ul>
                <li>at the time of registration his age for over 18 years</li>
                <li>do not create a new site without any reasonable purpose of its further use</li>
                <li>do not use promotional materials that contain pornography, violence, drugs, racial and other discrimination</li>
                <li>do not use the applications in order to attract an artificial traffic</li>
                <li>temporary storage of equity until the payments to other users</li>
                <li>In case of violation of these conditions the administration reserves the right to cancel your account without any
                    explanation</li>
            </ul>
            <p>
                <span class="terms__text__bold">CRYPTOZAUR undertakes</span>
            </p>
            <ul>
                <li>to provide quality service for establish and maintain of cryptocurrency faucets</li>
                <li>to service and maintain the system in operation condition</li>
                <li>to pay the users money in time</li>
                <li>CRYPTOZAUR reserves the right to change terms and conditions at any time, without your consent and knowledge</li>
            </ul>
            <p>
                <span class="terms__text__bold">CRYPTOZAUR not resposible for a hacker attacks and for an unfair traffic</span>
            </p>
            <p>
                <span class="terms__text__bold">Funds withdrowal</span><br>
                Funds withdrawal is only available after reaching «the threshold» of 10 000 satoschi. When you reach the threshold of 10 000 satoshi the profit will be yours
            </p>
        </section>
    </div>
@endsection