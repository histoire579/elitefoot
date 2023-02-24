<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JourneeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'saison_id' => rand(1,3),
            'libelle' => $this->faker->sentence(1)
        ];
    }
}
