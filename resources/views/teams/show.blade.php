@extends('layouts.app')

@section('content')

<section class="intro-title blue-bg" style="background: url('/assets/images/player/big/player-1.jpg') center center / cover no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="intro-content">
                    <div class="intro-name d-flex justify-content-start align-items-center">
                        <img src="/assets/images/tournament/small/first-tournament.jpg" alt="team-logo">
                         <h4 class="text-white"><b>Team Profile</b></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tab-page page-section-ptb">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs justify-content-center text-uppercase" role="tablist">
                    <li role="presentation">
                        <a  class="active" href="#member" aria-controls="member" role="tab" data-toggle="tab">Members</a>
                    </li>
                    <li role="presentation">
                        <a href="#about-us" aria-controls="about-us" role="tab" data-toggle="tab">About Us</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="member">
                        <div class="row tournament-matche-list-container mt-3 mb-5">
                            <div class="col-md-3 mb-3">
                                <a href="/teams/player/1">
                                    <div class="card">
                                        <img class="img-fluid" src="/assets/images/player/big/player-1.jpg" alt="">
                                        <div class="card-body text-center shadow">
                                            <h6>SACHIN TENDULKAR</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="players/sachin-tendulkar">
                                    <div class="card">
                                        <img class="img-fluid" src="/assets/images/player/big/player-1.jpg" alt="">
                                        <div class="card-body text-center shadow">
                                            <h6>SACHIN TENDULKAR</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="players/sachin-tendulkar">
                                    <div class="card">
                                        <img class="img-fluid" src="/assets/images/player/big/player-1.jpg" alt="">
                                        <div class="card-body text-center shadow">
                                            <h6>SACHIN TENDULKAR</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="players/sachin-tendulkar">
                                    <div class="card">
                                        <img class="img-fluid" src="/assets/images/player/big/player-1.jpg" alt="">
                                        <div class="card-body text-center shadow">
                                            <h6>SACHIN TENDULKAR</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="about-us">
                        <div class="row">
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <span>Location</span>
                                        <p>Ajman, Sharjah</p>
                                    </li>
                                    <hr>
                                    <li>
                                        <span>Since</span>
                                        <p>10-09-20</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection