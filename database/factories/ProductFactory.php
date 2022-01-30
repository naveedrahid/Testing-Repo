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
            'image' => 'no image found',
            'product_title' => $this->faker->name(),
            'category_id' => $this->faker->randomDigitNot(1),
            'description' => $this->faker->text(),
            'price' => $this->faker->numberBetween($min = 1500, $max = 6000),
            'status' => 'Deactive'
        ];
    }
}
