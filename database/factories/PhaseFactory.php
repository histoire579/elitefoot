<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'libelle' => $this->faker->sentence(1),
            'saison_id' => rand(1,3)
        ];
    }
}
