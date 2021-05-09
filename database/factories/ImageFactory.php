<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imageable_id' => $this->faker->numberBetween(1, 5),
            'imageable_type' => $this->faker->randomElement(['App\Models\User', 'App\Models\Employee', 'App\Models\Provider', 'App\Models\Service']),
            'type' => $this->faker->numberBetween(1, 3),
            'path' => 'https://picsum.photos/id/'.$this->faker->numberBetween(0, 200).'/200/200'
        ];
    }
}
