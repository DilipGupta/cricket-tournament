<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tournament;
use Faker\Generator as Faker;



$factory->define(Tournament::class, function (Faker $faker) {    
    return [
        'name'=> $faker->sentence(10,25),
        'image'=> 'tournament-1.jpg',
        'ball_type'=> $faker->sentence(6,10),
        'start_date' => $faker->dateTimeThisMonth('+1 month'),
        'end_date' => $faker->dateTimeThisMonth('+2 month'),
    ];
});
