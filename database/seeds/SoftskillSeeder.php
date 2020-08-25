<?php

use App\Softskill;
use Illuminate\Database\Seeder;

class SoftskillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Softskill::truncate();

        Softskill::create([
            'name' => 'Nauwkeurig',
            'description' => 'Precisie, rekeninghoudend met uitzonderingen om een werkend en secure geheel te bekomen.',
        ]);

        Softskill::create([
            'name' => 'Assertief',
            'description' => 'Respect voor mezelf en mijn naasten. Samen kunnen we meer bereiken.',
        ]);

        Softskill::create([
            'name' => 'Leergierig',
            'description' => 'Altijd oog voor het onbekende. Iets leren gebruiken is altijd leuker dan immitatie.',
        ]);

        Softskill::create([
            'name' => 'Lorem Ipsum',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ornare imperdiet erat ac viverra. Morbi diam dolor, consequat at arcu.',
        ]);

        Softskill::create([
            'name' => 'Lorem Ipsum',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ornare imperdiet erat ac viverra. Morbi diam dolor, consequat at arcu.',
        ]);
    }
}
