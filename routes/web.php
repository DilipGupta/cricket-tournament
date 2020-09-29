<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::resource('/tournament', 'HomeController');
Route::resource('/tournament', 'HomeController')->except('show');
Route::get('tournament/{slug}', 'HomeController@show')->name('tournament.show');
Route::resource('/matchs', 'MatchesController');
Route::resource('/teams', 'TeamsController');
Route::resource('/teams/player', 'TeamsPlayerController');
