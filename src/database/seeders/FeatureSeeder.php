<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    public function run()
    {
        $features = [
            [
                'title' => 'Durability',
                'subtitle' => 'Built to Last',
                'description' => 'Polygranite sheets are highly durable, resisting scratches, impacts, and wear, ensuring long-lasting elegance for your interiors. Perfect for high-traffic areas.',
                'image_path' => 'features/durability.jpg',
            ],
            [
                'title' => 'Waterproof',
                'subtitle' => 'Moisture-Resistant Design',
                'description' => 'With excellent waterproof properties, polygranite sheets are ideal for bathrooms and kitchens, preventing damage from humidity and water exposure.',
                'image_path' => 'features/waterproof.jpg',
            ],
            [
                'title' => 'Low Maintenance',
                'subtitle' => 'Easy to Clean',
                'description' => 'Polygranite sheets require minimal upkeep, resisting stains and soap marks, making them a hassle-free choice for busy households and commercial spaces.',
                'image_path' => 'features/low-maintenance.jpg',
            ],
            [
                'title' => 'Fire Retardant',
                'subtitle' => 'Enhanced Safety',
                'description' => 'Designed with fire-retardant properties, polygranite sheets offer added safety, making them suitable for hotels, offices, and public spaces.',
                'image_path' => 'features/fire-retardant.jpg',
            ],
            [
                'title' => 'Versatile Aesthetics',
                'subtitle' => 'Customizable Designs',
                'description' => 'Available in various colors, textures, and patterns, polygranite sheets allow you to create stunning, personalized interiors that match any style.',
                'image_path' => 'features/aesthetics.jpg',
            ],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}
