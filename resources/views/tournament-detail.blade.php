@extends('layouts.app')

@section('content')

<section class="intro-title blue-bg" style="background: url('/assets/images/tournament/big/first-tournament.jpg') center center / cover no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="intro-content">
                    <div class="intro-name d-flex justify-content-start align-items-center">
                        <img src="/assets/images/tournament/small/first-tournament.jpg" alt="tournament-logo">
                         <h4 class="text-black"><b>{{ $tournament->name }}</b></h4>
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
                        <a  class="active" href="#matches" aria-controls="matches" role="tab" data-toggle="tab">Matches</a>
                    </li>
                    {{-- <li role="presentation">
                        <a href="#teams" aria-controls="teams" role="tab" data-toggle="tab">Teams</a>
                    </li> --}}
                    <li role="presentation">
                        <a href="#about-us" aria-controls="about-us" role="tab" data-toggle="tab">About Us</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="matches">
                        <div class="row">
                            @foreach ($tournament->match as $fight)
                                <div class="col-md-4 tournament-matche-list-container">
                                    <a href="{{ route('matchs.show', $fight->slug) }}">
                                        <a href="">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="card-title">{{ $fight->type }}</h6>
                                                <span class="badge badge-primary badge-pill text-uppercase font-11">Result</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <h5>{{ $fight->first_team->first_team_name }}</h5>
                                                    <p><b>{{ dd($fight->match_result) }} 158/9</b></p>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <h5>{{ $fight->second_team->second_team_name }}</h5>
                                                    <p><b>163/6</b></p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <Strong>India !</Strong> Won by <strong>4 Wickets</strong>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    {{-- <div role="tabpanel" class="tab-pane fade" id="teams">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="players/sachin-tendulkar">
                                    <div class="card">
                                        <img class="img-fluid" src="assets/images/player/big/player-1.jpg" alt="">
                                        <div class="card-body text-center shadow">
                                            <h6>SACHIN TENDULKAR</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets/images/player/big/player-1.jpg" alt="">
                                    <div class="card-body text-center shadow">
                                        <h6>RAHUL DRAVID</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets/images/player/big/player-1.jpg" alt="">
                                    <div class="card-body text-center shadow">
                                        <h6>VIRENDER SEHWAG</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets/images/player/big/player-1.jpg" alt="">
                                    <div class="card-body text-center shadow">
                                        <h6>SOURAV GANGULY</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div role="tabpanel" class="tab-pane fade" id="about-us">
                        <div class="row">
                            <div class="col-md-12">
                                <h5><b>Organizer's Detail</b></h5>
                                <ul>
                                    <li>
                                        <span>NAME</span>
                                        <p>Sachin Tendulkar</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 mt-5">
                                <h5><b>Tournament's Detail</b></h5>
                                <ul>
                                    <li>
                                        <span>NAME</span>
                                        <p>First Tournament</p>
                                    </li>
                                    <hr>
                                    <li>
                                        <span>Date</span>
                                        <p>10-09-20 to 19-09-20</p>
                                    </li>
                                    <hr>
                                    <li>
                                        <span>Location</span>
                                        <p>Ajman, Sharjah</p>
                                    </li>
                                    <hr>
                                    <li>
                                        <span>Ball Type</span>
                                        <p>Leather</p>
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