<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Provider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'description' => $this->faker->paragraph(),
            'phone' => $this->faker->e164PhoneNumber(),
            'website' => $this->faker->url(),
            'vat_number' => $this->faker->numerify('###########'),
            'default_currency' => $this->faker->numberBetween(1, 5)
        ];
    }
}
