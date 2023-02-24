<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatcheFactory extends Factory
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
            'journee_id' => rand(1,3),
            'phase_id' => rand(1,3),
            'stade_id' => rand(1,3),
            'club1_id' => rand(1,6),
            'nbre_but_club1' => rand(0,3),
            'club2_id' => rand(1,6),
            'nbre_but_club2' => rand(0,3),
            'arbitre1_id' => rand(1,3),
            'arbitre2_id' => rand(1,3),
            'arbitre3_id' => rand(1,3),
            'arbitre4_id' => rand(1,3),
            'date' => $this->faker->date(),
            'heure' => $this->faker->sentence(1),
            'type' => $this->faker->sentence(1)
        ];
    }
}
