<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Portfolio; // <--- Idagdag ito
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void 
    {
        Portfolio::create([
            'title' => 'Monochrome Lines',
            'category' => 'EDITORIAL PORTRAITURE',
            'description' => 'A sharp study in shadow and silhouette.',
            'image_path' => 'images/el.jpg'
        ]);

        Portfolio::create([
            'title' => 'Character Studies',
            'category' => 'COMMERCIAL',
            'description' => 'Clean studio branding shoot with minimal background.',
            'image_path' => 'images/mae.jpg'
        ]);

        Portfolio::create([
            'title' => 'Minimalist Stance',
            'category' => 'FASHION LOOKBOOK',
            'description' => 'Modern tailoring framed in clean white backdrop.',
            'image_path' => 'images/eeeee.jpg'
        ]);

        Portfolio::create([
            'title' => 'Elevated Studio',
            'category' => 'EDITORIAL',
            'description' => 'Cinematic posture and contrast lighting.',
            'image_path' => 'images/daep.JPG'
        ]);

        Portfolio::create([
            'title' => 'Urban Edge',
            'category' => 'PORTRAITURE',
            'description' => 'Expressive framing for modern portraits.',
            'image_path' => 'images/daepp.jpg'
        ]);

        Portfolio::create([
            'title' => 'Monochrome Architecture',
            'category' => 'FINE ART',
            'description' => 'Geometric lines and dramatic shadows in structural design.',
            'image_path' => 'images/arch.jpg'
        ]);
    }
}