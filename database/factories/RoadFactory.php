<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Road>
 */
class RoadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type'=>$this->faker->randomElement(['acuatico','montañoso']),
            'duration'=>$this->faker->randomElement(['todo el dia','medio dia']),
            'schedules'=>"6-10 am",
            'description'=>$this->faker->sentence,
            'include'=>$this->faker->sentence,
            'restictions'=>$this->faker->title,
            'fee'=>100000,
        ];
    }
}
