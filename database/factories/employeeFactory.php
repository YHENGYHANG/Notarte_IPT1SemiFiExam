<?php

namespace Database\Factories;

use App\Models\employees;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<employees>
 */
class employeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->address(),
            'deparments' => fake()->randomElement(['CAST', 'CCJ', 'CON', 'CABM']),
            'attendace' => fake()->boolean()
        ];
    }
}
