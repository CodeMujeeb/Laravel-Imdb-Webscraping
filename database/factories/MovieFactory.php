<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movie;

class MovieFactory extends Factory
{
    protected $model = Movie::class;

    public function definition()
    {
        $year = fake()->numberBetween(now()->year - 50, now()->year);

        return [
            'title' => fake()->title(),
            'year' => $year,
            'rating' => fake()->randomFloat(1, 1, 10),
            'url' => fake()->url(),
        ];
    }
}
