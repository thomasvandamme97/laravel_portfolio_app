<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::truncate();

        Project::create([
            'title' => 'DroneZone',
            'description' => 'Bootstrap exercise based on a template.',
            'link' => 'www.dronezone.be',
            'image' => 'dronezone.png',
        ]);

        Project::create([
            'title' => 'BlogOOP',
            'description' => 'Object Oriented PHP exercise with self built CMS.',
            'link' => 'www.blogoop.be',
            'image' => 'blog.png',
        ]);
    }
}
