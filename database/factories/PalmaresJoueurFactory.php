<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PalmaresJoueurFactory extends Factory
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
            'competition_id' => rand(1,3),
            'joueur_id' => rand(1,20),
            'recompence' => $this->faker->name()
        ];
    }
}
