<?php

use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //array pour remplir la table reservation
        $reservations = [
            [
                'users_id'=>'1',
                'place_id'=>1,
                'date_debut'=>'2020-03-01',
                'date_fin'=>'2020-03-31'
            ],
            [
                'users_id'=>'2',
                'place_id'=>2,
                'date_debut'=>'2020-05-10',
                'date_fin'=>'2020-06-10'
            ],
            [
                'users_id'=>'3',
                'place_id'=>3,
                'date_debut'=>'2020-05-06',
                'date_fin'=>'2020-06-06'
            ],
            [
                'users_id'=>'4',
                'place_id'=>4,
                'date_debut'=>'2020-07-01',
                'date_fin'=>'2020-08-01'
            ]
        ];

        foreach ($reservations as $reservation) {
            \App\Reservation::create(array(
                'users_id'=> $reservation['users_id'],
                'place_id'=>$reservation['place_id'],
                'date_debut'=>$reservation['date_debut'],
                'date_fin'=>$reservation['date_fin']
            ));
        }
    }
}
