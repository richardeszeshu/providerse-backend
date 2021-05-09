<?php

namespace Database\Factories;

use App\Models\Businesshour;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusinesshourFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Businesshour::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id' => $this->faker->numberBetween(1, 5),
            'weekday' => $this->faker->numberBetween(0, 6),
            'open_time' => $this->faker->time(),
            'close_time' => $this->faker->time()
        ];
    }
}
