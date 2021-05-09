<?php

namespace Database\Factories;

use App\Models\Rating;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rateable_id' => $this->faker->numberBetween(1, 5),
            'rateable_type' => $this->faker->randomElement(['App\Models\Employee', 'App\Models\Provider', 'App\Models\Service']),
            'user_id' => $this->faker->numberBetween(1, 5),
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->paragraph()
        ];
    }
}
