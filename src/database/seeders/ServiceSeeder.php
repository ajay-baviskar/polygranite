<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class  extends Seeder
{
    public function run()
    {
        $services = [
            [
                'icon' => 'bi bi-wall',
                'title' => 'Wall Cladding',
                'description' => 'Transform your interiors with durable polygranite sheets, offering a marble-like finish that’s waterproof, lightweight, and easy to install. Perfect for residential and commercial spaces.'
            ],
            [
                'icon' => 'bi bi-ceiling',
                'title' => 'False Ceilings',
                'description' => 'Elevate your space with polygranite sheets for false ceilings, combining aesthetic appeal with fire-retardant and moisture-resistant properties. Ideal for hotels and offices.'
            ],
            [
                'icon' => 'bi bi-furniture',
                'title' => 'Furniture Applications',
                'description' => 'Use polygranite sheets for tabletops, wardrobes, and doors, providing a luxurious granite look with low maintenance and high durability.'
            ],
            [
                'icon' => 'bi bi-shower',
                'title' => 'Bathroom Solutions',
                'description' => 'Enhance bathrooms with polygranite sheets, resistant to soap stains and moisture, offering a seamless, easy-to-clean alternative to tiles.'
            ],
            [
                'icon' => 'bi bi-kitchen',
                'title' => 'Kitchen Countertops',
                'description' => 'Upgrade kitchens with polygranite sheets, designed for durability, stain resistance, and a premium marble-like appearance, perfect for modern homes.'
            ],
            [
                'icon' => 'bi bi-customize',
                'title' => 'Custom Designs',
                'description' => 'Choose from a variety of colors, textures, and patterns to create personalized spaces with polygranite sheets, tailored to any decor style.'
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
