<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Level::create([
            'id' => 0,
            'points' => 0,
            'container_background_image_path' => '/images/loremipsum-background2.jpg',
            'container_background_color' => '#00ffff80'
        ]);
        App\Level::create([
            'id' => 1,
            'points' => 10,
            'container_background_image_path' => '/images/loremipsum-background2.jpg',
            'container_background_color' => '#0000ff80'
        ]);
        App\Level::create([
            'id' => 2,
            'points' => 50,
            'container_background_image_path' => '/images/loremipsum-background2.jpg',
            'container_background_color' => '#ff00ff80'
        ]);
        App\Level::create([
            'id' => 3,
            'points' => 100,
            'container_background_image_path' => '/images/loremipsum-background2.jpg',
            'container_background_color' => '#00ff0080'
        ]);
        App\Level::create([
            'id' => 4,
            'points' => 200,
            'container_background_image_path' => '/images/loremipsum-background2.jpg',
            'container_background_color' => '#00ff0080'
        ]);
        App\Level::create([
            'id' => 5,
            'points' => 500,
            'container_background_image_path' => '/images/loremipsum-background2.jpg',
            'container_background_color' => '#ff000080'
        ]);
    }
}