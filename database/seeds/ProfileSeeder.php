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
            'description' => 'Gepassioneerde programmeur met interesse in het ontwikkelen, onderhouden en uitbreiden van kleine en grote projecten. Een oog voor precisie en kwaliteit tijdens het ontwikkelen van applicaties. Samen kennis bundelen met anderen brengt wonderen met zich mee.',
        ]);
    }
}
