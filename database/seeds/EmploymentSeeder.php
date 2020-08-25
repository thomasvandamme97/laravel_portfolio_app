<?php

use App\Employment;
use Illuminate\Database\Seeder;

class EmploymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employment::truncate();

        Employment::create([
            'title' => 'Technicus',
            'company' => 'Compucenter De Haan',
            'description' => 'Installatie, reparatie en onderhoud van computers',
            'start_year' => 2016,
            'end_year' => 2017,
        ]);
    }
}
