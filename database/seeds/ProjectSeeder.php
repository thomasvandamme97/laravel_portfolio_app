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
            'title' => 'Portfolio',
            'description' => 'Portfolio applicatie gebouwd met Laravel. Deze applicatie bevat een eigen CMS met de benodigde CRUD operaties.',
            'link' => 'github.com/thomasvandamme97/laravel_portfolio_app',
            'image' => 'portfolio.png',
        ]);

        Project::create([
            'title' => 'BlogOOP',
            'description' => 'Webshop applicatie gebouwd met Laravel. Het project bevat producten, een winkelmandje, betaling met VISA, bestellingen en gebruiker authenticatie.',
            'link' => 'github.com/thomasvandamme97/laravel_webshop_app',
            'image' => 'webshop.png',
        ]);
    }
}
