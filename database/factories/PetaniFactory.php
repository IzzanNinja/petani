<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Petani>
 */
class PetaniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6),
            'user_id' => rand(1,100),
            'description' => $this->faker->paragraph(6),
            'due_date' => now(),
            'status' => rand(0,1),

        ];
    }
}
