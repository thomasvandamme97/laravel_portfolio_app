<?php

use App\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::truncate();

        Education::create([
            'name' => 'Algemene basisvorming',
            'school' => 'Onze-Lieve-Vrouecollege Oostende',
            'diploma' => 'ASO 1ste graad',
            'start_year' => 2009,
            'end_year' => 2011,
        ]);

        Education::create([
            'name' => 'Beeldende en architecturale kunsten',
            'school' => 'Technisch Atheneum Brugge',
            'diploma' => 'KSO 1de graad',
            'start_year' => 2013,
            'end_year' => 2011,
        ]);

        Education::create([
            'name' => 'Informaticabeheer',
            'school' => 'Sint-Jozefinstituut Brugge',
            'diploma' => 'TSO 3de graad',
            'start_year' => 2014,
            'end_year' => 2016,
        ]);

        Education::create([
            'name' => 'Toegepaste Informatica',
            'school' => 'Hogeschool West-Vlaanderen Brugge',
            'diploma' => 'Prof. Bachelor',
            'start_year' => 2017,
            'end_year' => 2018,
        ]);

        Education::create([
            'name' => 'Fullstack Web Developer',
            'school' => 'Multimedi',
            'diploma' => 'Attest',
            'start_year' => 2019,
            'end_year' => 2020,
        ]);
    }
}
