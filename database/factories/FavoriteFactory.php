<?php

namespace Database\Factories;

use App\Models\Favorite;
use Illuminate\Database\Eloquent\Factories\Factory;

class FavoriteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Favorite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'favoritable_id' => $this->faker->numberBetween(1, 5),
            'favoritable_type' => $this->faker->randomElement(['App\Models\Service', 'App\Models\Employee', 'App\Models\Provider']),
            'user_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
