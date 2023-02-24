<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StatistiqueJoueurFactory extends Factory
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
            'joueur_id' => rand(1,20),
            'tir' => rand(1,30),
            'tir_cadre' => rand(1,30),
            'but_marque' => rand(1,20),
            'passe_decisive' => rand(1,5),
            'ballon_recupere' => rand(1,30),
            'ballon_intercepte' => rand(1,18),
            'tir_arrete' => rand(1,30),
            'but_encaisse' => rand(1,10),
            'faute_comise' => rand(1,8),
            'hors_jeux' => rand(1,5),
            'minute_jouer' => rand(30,120),
            'faute_subis' => rand(1,3),
            'carton_jaune' => rand(1,5),
            'carton_rouge' => rand(1,5),
            'centre' => rand(1,10),
            'penelty_marque' => rand(1,3),
            'Coup_franc_marque' => rand(1,7),
            'passe_reussi' => rand(1,30),
            'penalty_arrete' => rand(1,12),
            'penalty_concede' => rand(1,6),
            'but_contre_camp' => rand(1,3),
            'homme_match' => $this->faker->sentence(1),
            'domiciliation' => $this->faker->sentence(1)
        ];
    }
}
