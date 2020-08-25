<?php

use App\User;
use Illuminate\Database\Seeder;
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
        // Clear Table
        User::truncate();

        // Create new User
        User::create([
            'name' => 'Thomas',
            'email' => 'thomas.vandamme1997@gmail.com',
            'password' => Hash::make('Meow123Meow')
        ]);
    }
}
