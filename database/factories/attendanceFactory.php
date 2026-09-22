<?php

namespace Database\Factories;

use App\Models\attendance;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<attendance>
 */
class attendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_in' => fake()->time(),
            'date_out' => fake()->time(),
            'date' => fake()->date()
        ];
    }
}
