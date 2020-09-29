<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Team;
use Faker\Generator as Faker;


$factory->define(Team::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'logo'=> 'team-1-logo.jpg',
        'banner'=> 'team-1-banner.jpg',
        'location'=>$faker->city(),
        'since' => $faker->dateTimeThisMonth('+2 month'),
    ];
});
