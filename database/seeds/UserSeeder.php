<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Md. Monirul Alom',
                'email' => 'monirulalom@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), // password
                'remember_token' => Str::random(10),

            ],
            [
                'name' => 'Md. Jahangir Alam',
                'email' => 'jahangirala252@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), // password
                'remember_token' => Str::random(10),

            ],

        ];

            foreach($users as $user){
                User::Create($user);
            }

    }
}
