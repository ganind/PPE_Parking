<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\place;
use Faker\Generator as Faker;

$factory->define(place::class, function (Faker $faker) {
    return [
        'place_id' => function(){
            return factory('app\place')->create()->id;
        },
        'num_place'=>$faker->
    ];
});
