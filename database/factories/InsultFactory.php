<?php

namespace Database\Factories;

use App\Models\Insult;
use Illuminate\Database\Eloquent\Factories\Factory;
// use Faker\Generator as Faker;

class InsultFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Insult::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->text
        ];
    }
}
