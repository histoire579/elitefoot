<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetailClubSaisonFactory extends Factory
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
            'club_id' => rand(1,6),
            'joueur_id' => rand(1,20),
            'poste_id' => rand(1,4),
            'dorssad' => rand(1,100)
        ];
    }
}
