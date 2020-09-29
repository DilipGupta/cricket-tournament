<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Country::class, function (Faker $faker) {
    return [
        'name'=> $faker->word(1,8),
    ];
});
