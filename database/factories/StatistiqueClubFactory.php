<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StatistiqueClubFactory extends Factory
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
            'match_id' => rand(1,3),
            'club_id' => rand(1,6),
            'tir_cadre' => rand(1,30),
            'but_marque' => rand(1,20),
            'but_encaisse' => rand(1,15),
            'faute_comise' => rand(1,10),
            'hors_jeux' => rand(1,5),
            'carton_jaune' => rand(1,6),
            'carton_rouge' => rand(1,3),
            'penelty_marque' => rand(1,8),
            'Coup_franc_marque' => rand(1,5),
            'penalty_concede' => rand(1,3)
        ];
    }
}
