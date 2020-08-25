<?php

use App\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::truncate();

        Profile::create([
            'first_name' => 'Thomas',
            'last_name' => 'Vandamme',
            'image' => 'Thomas.jpg',
            'cv' => 'thomas_vandamme_cv.pdf',
            'title' => 'Junior PHP Developer',
            'age' => '23',
            'phone' => '0497 16 04 61',
            'email' => 'thomas.vandamme97@outlook.com',
            'address' => 'Oostende, België',
            'linkedin' => 'www.linkedin.com/in/thomas-vandamme-80329619b/',
            'github' => 'www.github.com/thomasvandamme97',
            'description' => 'I am a Junior PHP Developer that is able to build web applications from the ground up. I have no preference regarding size of a project as both peak my interest. I aspire to learn as much as possible as it is way more fun and rewarding to learn how to do something instead of immitating someone else their work.',
        ]);
    }
}
