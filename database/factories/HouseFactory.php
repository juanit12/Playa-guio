<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type'=> $this->faker->randomElement(['Cabaña','Campamento']),
            'people'=> $this->faker->title,
            'description'=>$this->faker->sentence,
            'include'=>$this->faker->sentence,
            'price'=>12000
        ];
    }
}
