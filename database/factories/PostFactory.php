<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(0,100),
            'title' => $this->faker->sentence,
            'body' => $this->faker->text(),
            'views' => $this->faker->numberBetween(0, 100),
            'created_at' => $this->faker->dateTimeBetween('2021-01-01', '2022-12-31'),
            'deleted_at' => $this->faker->randomElement([
                null,
                $this->faker->dateTimeBetween('2021-01-01', '2022-12-31'),
            ])
        ];
    }
}
