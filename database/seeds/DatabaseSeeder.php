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
              'disponible'=>1,
          ],
          [
              'num_place'=>10,
              'disponible'=>1,
          ],
          [
              'num_place'=>15,
              'disponible'=>1,
          ],
          [
              'num_place'=>20,
              'disponible'=>1,
          ],
          [
              'num_place'=>25,
              'disponible'=>1,
          ],
          [
              'num_place'=>30,
              'disponible'=>1,
          ]
        );
    }
}
