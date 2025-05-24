<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = \App\Models\Review::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'photo_path' => $this->faker->optional()->image('public/storage/reviews', 100, 100, null, false),
            'rating' => $this->faker->numberBetween(3, 5),
            'comment' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
