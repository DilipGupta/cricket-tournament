<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Fight;
use App\Match;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Fight::class, function (Faker $faker) {
    $type=['T20 International','one-day International','Test International'];
    return [
        'type'=> $type[rand(0,2)],
        'first_team_id'=> App\Team::pluck('id')->random(),
        'second_team_id'=> App\Team::pluck('id')->random(),
        'start_date' => $faker->dateTimeThisMonth('+1 month'),
        'end_date' => $faker->dateTimeThisMonth('+2 month'),
    ];
});
