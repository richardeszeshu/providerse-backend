<?php

namespace Database\Factories;

use App\Models\AltBusinesshour;
use Illuminate\Database\Eloquent\Factories\Factory;

class AltBusinesshourFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AltBusinesshour::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id' => $this->faker->numberBetween(1, 5),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'open_time' => $this->faker->randomElement([$this->faker->time(), null]),
            'close_time' => $this->faker->randomElement([$this->faker->time(), null]),
        ];
    }
}
