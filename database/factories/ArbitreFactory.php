<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArbitreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photo' => $this->faker->imageUrl(),
            'nom' => $this->faker->name(),
            'date_nais' => $this->faker->date(),
            'drapeau' => $this->faker->imageUrl(),
            'nationalite' => $this->faker->name(),
            'lieu_nais' => $this->faker->Address(),
            'status' => $this->faker->sentence(1),
            'annee_debut_elite' => $this->faker->date()
        ];
    }
}
