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
        //les seeds à faire et dans quel ordre les faire
        $this->call(UserSeeder::class);
        $this->call(PlaceSeeder::class);
        $this->call(ReservationSeeder::class);
    }
}
