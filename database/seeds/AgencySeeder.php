<?php

use Illuminate\Database\Seeder;
use App\Models\Agency;
use Illuminate\Support\Facades\Hash;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agency::create([
            'name' => 'Agency',
            'email' => 'agency@gmail.com',
            'password' => Hash::make('123456789'),
            'phonenumber' => '1597548745',
            'address' => 'Germany',
            'photo' => '12345454',
            'country' => 'berlin',
        ]);
    }
}
