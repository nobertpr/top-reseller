<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'item_name' => fake()->word(),
            'price' => fake()->randomDigitNotNull() * 10000,
            'description' => fake()->realText(100),
            'brand_id' => fake()->numberBetween(1, 10),
            'category_id' => fake()->numberBetween(1,4)
        ];
    }
}
