<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetailMatchFactory extends Factory
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
            'match_id' => rand(1,15),
            'detail' => $this->faker->paragraph(1)
        ];
    }
}
