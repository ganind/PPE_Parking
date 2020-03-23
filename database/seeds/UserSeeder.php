<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //array pour remplir la table users
        $users = [
            [
                'name'=>'admin',
                'email'=>'admin@admin.com',
                'password'=> bcrypt('password')
            ],
            [
                'name'=>'Deborah',
                'email'=>'deborah@deborah.com',
                'password'=> bcrypt('password')
            ],
            [
                'name'=>'Mily',
                'email'=>'mily@mily.com',
                'password'=> bcrypt('password')
            ],
            [
                'name'=>'Plouf',
                'email'=>'ploufn@plouf.com',
                'password'=> bcrypt('password')
            ],
            [
                'name'=>'Stephane',
                'email'=>'stephane@stephane.com',
                'password'=> bcrypt('password')
            ]
        ];

        foreach ($users as $user) {
            \App\User::create(array(
                'name'=> $user['name'],
                'email'=>$user['email'],
                'password'=>$user['password']
            ));
        }
    }
}
