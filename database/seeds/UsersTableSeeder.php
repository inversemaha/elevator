<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => "admin",
            'biography' => "Hello I am Admin",
            'dob' => "02.01.1990",
            'phone' => "012365478954",
            'email' => "admin@gmail.com",
            'password' => Hash::make('123456'),
        ]);
    }
}
