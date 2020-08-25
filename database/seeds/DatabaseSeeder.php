<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            SkillSeeder::class,
            SoftskillSeeder::class,
            ProjectSeeder::class,
            ProfileSeeder::class,
            EmploymentSeeder::class,
            EducationSeeder::class,
        ]);
    }
}
