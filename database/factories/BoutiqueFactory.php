<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BoutiqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lieu' => $this->faker->Address(),
            'telephone' => $this->faker->phoneNumber(),
            'horaire' => $this->faker->sentence(1),
            'maillot_v' => rand(1,100),
            'gajet_v' => rand(1,30),
            'tikect_v' => rand(1,50)
        ];
    }
}
