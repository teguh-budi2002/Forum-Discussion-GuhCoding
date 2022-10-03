<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(),
            'slug' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(4),
            'user_id' => 1
        ];
    }
}
