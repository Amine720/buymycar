<?php

use Illuminate\Database\Seeder;
use App\User;
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
        $user = User::create([
            'name' => 'Amine',
            'email' => 'amine@gmail.com',
            'password' => Hash::make('123123123'),
            'phone' => '0670790389',
            'city' => 'Tetouan',
            'fburl' => 'https://www.facebook.com/amine.aguero.165',
            'isAdmin' => true
        ]);
    }
}
