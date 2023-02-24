<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StadeFactory extends Factory
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
            'lieu' => $this->faker->Address(),
            'capacite' => $this->faker->ean8()
        ];
    }
}
