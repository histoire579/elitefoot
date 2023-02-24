<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'logo' => $this->faker->imageUrl(),
            'nom' => $this->faker->name(),
            'siege' => $this->faker->Address(),
            'bp' => $this->faker->ean8(),
            'telephone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'site' => $this->faker->url(),
            'twitter' => $this->faker->url(),
            'facebook' => $this->faker->url(),
            'president' => $this->faker->name(),
            'v_president' => $this->faker->name(),
            'secretaire_g' => $this->faker->name(),
            'coach_p' => $this->faker->name(),
            'coach_ad' => $this->faker->name(),
            'stade_id' => rand(1,3),
            'boutique_id' => rand(1,3)
        ];
    }
}
