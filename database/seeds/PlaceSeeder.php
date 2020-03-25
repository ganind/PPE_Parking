<?php

use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //array pour remplir la table place
        $places = [
            [
                'num_place'=>5,
                'disponible'=>1
            ],
            [
                'num_place'=>10,
                'disponible'=>1
            ],
            [
                'num_place'=>15,
                'disponible'=>1
            ],
            [
                'num_place'=>20,
                'disponible'=>1
            ],
            [
                'num_place'=>25,
                'disponible'=>1
            ],
            [
                'num_place'=>30,
                'disponible'=>1
            ]
        ];

        foreach ($places as $place) {
            \App\Place::create(array(
                'num_place'=> $place['num_place'],
                'disponible'=>$place['disponible']
            ));
        }
    }
}
