<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'short_description' => $this->faker->text(),
            'price' => $this->faker->randomDigit(),
            'thumbnail_url' => $this->faker->imageUrl(200, 200),
            'quantity' => $this->faker->numberBetween(0, 30),
            'status' => $this->faker->numberBetween(0, 1)
        ];
    }
}
