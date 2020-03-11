<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\place::create(
          [
              'num_place'=>5,
              'etat_place'=>1,
          ]
        );
    }
}
