@extends('layouts.app')

@section('content')
 <div class="pt-5 container">
     <div class="row">
         <div class="col-md-12">
             <h5>Cricket Tournament in</h5>
             <form action="" method="POST" class="country">
                <div class="form-group">
                    <select name="" id="" class="form-control">
                       <option selected>Select Country</option>
                      @foreach ($countryLists as $countryList)
                       <option value="{{ $countryList->name }}">{{ $countryList->name }}</option>
                      @endforeach
                    </select>
                </div>
             </form>
             
         </div>
     </div>
     <div class="row mt-3 mb-5 tournament-matche-list-container">
         @foreach ($tournaments as $tournament)
            <div class="col-md-4 mb-4">
                <a href="{{ route('tournament.show',$tournament->slug) }}">
                    <div class="card">
                        <img class="card-img-top" src="/assets/images/tournament/small/first-tournament.jpg"/>
                        <div class="card-body">
                            <h5 class="card-title">{{ $tournament->name }}</h5>
                            <ul>
                                <li>
                                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                    <div>
                                    {{ $tournament->start_date }} <b>To</b> {{ $tournament->end_date }}
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p>{{ $tournament->location }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
         @endforeach

     </div>
 </div>
@endsection