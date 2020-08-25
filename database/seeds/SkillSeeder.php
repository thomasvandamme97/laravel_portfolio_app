<?php

use App\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Skill::truncate();

        Skill::create([
            'name' => 'HTML5',
            'percentage' => 85,
        ]);

        Skill::create([
            'name' => 'CSS3',
            'percentage' => 70,
        ]);

        Skill::create([
            'name' => 'JavaScript',
            'percentage' => 75,
        ]);

        Skill::create([
            'name' => 'PHP',
            'percentage' => 80,
        ]);

        Skill::create([
            'name' => 'jQuery',
            'percentage' => 85,
        ]);

        Skill::create([
            'name' => 'Laravel',
            'percentage' => 65,
        ]);

        Skill::create([
            'name' => 'WordPress',
            'percentage' => 60,
        ]);
    }
}
