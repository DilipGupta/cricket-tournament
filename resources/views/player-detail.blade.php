@extends('layouts.app')

@section('content')

<section class="intro-title blue-bg" style="background: url('/assets/images/player/big/player-1.jpg') center center / cover no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="intro-content">
                    <div class="intro-name d-flex justify-content-start align-items-center">
                        <img src="/assets/images/player/small/player-1.jpg" alt="player-image">
                         <h4 class="text-white"><b>Sachin Tendulkar</b></h4>
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
                <!-- Tab panes -->
                {{-- <div class="tab-content"> --}}
                    <div role="tabpanel" class="tab-pane" id="about-us">
                        <div class="row">
                            <div class="col-md-12 mt-5">
                                <ul>
                                    <li>
                                        <span>Location</span>
                                        <p>Ajman, Sharjah</p>
                                    </li>
                                    <hr>
                                    <li>
                                        <span>DOB</span>
                                        <p>07-09-1989</p>
                                    </li>
                                    <hr>
                                    <li>
                                        <span>Playing Role</span>
                                        <p>All-Rounder</p>
                                    </li>
                                    <hr>
                                    <li>
                                        <span>Batting Style</span>
                                        <p>RHB</p>
                                    </li>
                                    <hr>
                                    <li>
                                        <span>Bowling Style</span>
                                        <p>Right-arm-medium</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</section>

@endsection