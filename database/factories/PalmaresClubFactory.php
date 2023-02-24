<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PalmaresClubFactory extends Factory
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
            'club_id' => rand(1,6),
            'rang' => rand(1,3)
        ];
    }
}
