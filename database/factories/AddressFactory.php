<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'addressable_id' => $this->faker->numberBetween(1, 5),
            'addressable_type' => $this->faker->randomElement(['App\Models\User', 'App\Models\Employee', 'App\Models\Provider']),
            'type' => $this->faker->numberBetween(1, 4),
            'country_id' => $this->faker->numberBetween(1, 5),
            'providence' => $this->faker->state(),
            'city' => $this->faker->city(),
            'address' => $this->faker->streetAddress(),
            'postal_code' => $this->faker->postcode(),
            'location' => ['lat' => $this->faker->latitude(), 'lon' => $this->faker->longitude()]
        ];
    }
}
