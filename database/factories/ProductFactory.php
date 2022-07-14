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
            'name' => $name = $this->faker->sentence,
            'slug' =>  $this->faker->slug,
            'type' => ['Simple', 'Grouped', 'Variable', 'Gift'][rand(0, 3)],
            'categories' => ['Electronics', 'Books', 'Games', 'Garden'][rand(0, 3)],
        ];
    }
}
