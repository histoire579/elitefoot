<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PubliciteFactory extends Factory
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
            'message' => $this->faker->paragraph()
        ];
    }
}
