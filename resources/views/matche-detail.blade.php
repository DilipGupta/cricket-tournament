@extends('layouts.app')

@section('content')

<section class="intro-title blue-bg" style="background: url('/assets/images/tournament/big/first-tournament.jpg') center center / cover no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="intro-content">
                    <div class="intro-name d-flex justify-content-start align-items-center">
                        <img src="/assets/images/tournament/small/first-tournament.jpg" alt="tournament-logo">
                         <h4 class="text-black"><b>First Tournament Match</b></h4>
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
                        <a  class="active" href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a>
                    </li>
                    <li role="presentation">
                        <a href="#teams" aria-controls="teams" role="tab" data-toggle="tab">Teams</a>
                    </li>
                    <li role="presentation">
                        <a href="#match-detail" aria-controls="match-detail" role="tab" data-toggle="tab">Match Detail</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="summary">
                        <div class="row">
                            <div class="col-md-6 tournament-matche-list-container">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                              <div class="card-title">
                                                <h5>First Tournament Name</h5>
                                                <h6>Location : Victoria Skyline Cricket Ground 1, Sharjah</h6>
                                              </div>
                                              <span class="badge badge-primary badge-pill text-uppercase font-11">PAST</span>
                                            </div>
                                            <hr>
                                            <div class="d-flex justify-content-between mt-3">
                                                <h5>Australia</h5>
                                                <p><b>158/9</b></p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5>India</h5>
                                                <p><b>163/6</b></p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <Strong>India !</Strong> Won by <strong>4 Wickets</strong>
                                        </div>
                                    </div>
                             </div>
                             <div class="col-md-6 tournament-matche-list-container">
                                    <h4>Best Performance</h4>
                                    <div class="card mt-2">
                                        <table class="table">
                                            <thead class="thead-dark">
                                              <tr>
                                                <th scope="col">BatesMan</th>
                                                <th scope="col">R</th>
                                                <th scope="col">B</th>
                                                <th scope="col">4s</th>
                                                <th scope="col">6s</th>
                                                <th scope="col">Total</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row">Sachin Tendulkar</th>
                                                <td>100</td>
                                                <td>40</td>
                                                <td>10</td>
                                                <td>5</td>
                                                <td>250</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Sourav Ganguly</th>
                                                <td>120</td>
                                                <td>62</td>
                                                <td>16</td>
                                                <td>7</td>
                                                <td>210</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Mahendra Singh Dhoni</th>
                                                <td>70</td>
                                                <td>33</td>
                                                <td>6</td>
                                                <td>3</td>
                                                <td>150</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          
                                          <table class="table">
                                            <thead class="thead-light">
                                              <tr>
                                                <th scope="col">Bowler</th>
                                                <th scope="col">O</th>
                                                <th scope="col">M</th>
                                                <th scope="col">R</th>
                                                <th scope="col">W</th>
                                                <th scope="col">Eco</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row">Ishant Sharma</th>
                                                <td>3.0</td>
                                                <td>0</td>
                                                <td>16</td>
                                                <td>3</td>
                                                <td>5.33</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Anil Kumble</th>
                                                <td>4.0</td>
                                                <td>0</td>
                                                <td>25</td>
                                                <td>3</td>
                                                <td>6.25</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Zaheer Khan</th>
                                                <td>2.0</td>
                                                <td>0</td>
                                                <td>12</td>
                                                <td>1</td>
                                                <td>6.00</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                    </div>
                             </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="teams">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="players/sachin-tendulkar">
                                    <div class="card">
                                        <img class="img-fluid" src="/assets/images/player/big/player-1.jpg" alt="">
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
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="match-detail">
                        <div class="row">
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <span>SERIES NAME</span>
                                        <p>First Tournament</p>
                                    </li>
                                    <hr>
                                    <li>
                                        <span>MATCH Date</span>
                                        <p>10-09-20</p>
                                    </li>
                                    <hr>
                                    <li>
                                        <span>Location</span>
                                        <p>Ajman, Sharjah</p>
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