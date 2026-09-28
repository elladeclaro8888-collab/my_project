<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        Portfolio::truncate();

        $projects = [
            [
                'title' => 'Monochrome Lines',
                'category' => 'PHOTOGRAPHY',
                'description' => 'Black and white aesthetic study.',
                'image_path' => 'images/ellsss.jpg',
            ],
            [
                'title' => 'Character Studies',
                'category' => 'COMMERCIAL',
                'description' => 'Expressive portraits and framing.',
                'image_path' => 'images/ella.JPG',
            ],
            [
                'title' => 'Minimalist Stance',
                'category' => 'EDITORIAL',
                'description' => 'Clean design and modern tailoring.',
                'image_path' => 'images/daep.JPG',
            ],
            [
                'title' => 'Elevated Studio',
                'category' => 'EDITORIAL',
                'description' => 'Cinematic posture and studio setup.',
                'image_path' => 'images/eee.jpg',
            ],
            [
                'title' => 'Urban Edge',
                'category' => 'PORTRAITURE',
                'description' => 'Expressive framing for urban looks.',
                'image_path' => 'images/daepp.jpg',
            ],
            [
                'title' => 'Editorial Perspective',
                'category' => 'FASHION',
                'description' => 'Modern creative portrait composition.',
                'image_path' => 'images/mae.jpg',
            ],
        ];

        foreach ($projects as $project) {
            Portfolio::create($project);
        }
    }
}