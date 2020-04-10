<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'phonenumber' => Str::random(10),
            'gender' => "Male",
            'birth_date'  => "1999/11/25",
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('123456789'),
        ]);
        
    }
}
