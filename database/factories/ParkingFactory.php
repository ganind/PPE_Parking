<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\reservation;
use Faker\Generator as Faker;

$factory->define(reservation::class, function (Faker $faker) {
    return [
        'users_id' => function(){
        return factory('app\User')->create()->id;
        },
        'date_debut'=> $faker->date,
        'date_fin'=> $faker->date
    ];
});
