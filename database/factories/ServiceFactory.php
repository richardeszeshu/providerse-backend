<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(null, 0, 10000),
            'special_price' => $this->faker->randomFloat(null, 0, 10000),
            'currency_id' => $this->faker->numberBetween(1, 5),
            'length' => $this->faker->numberBetween(15, 60)
        ];
    }
}
