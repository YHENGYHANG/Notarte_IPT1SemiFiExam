<?php

namespace Database\Factories;

use App\Models\departments;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<departments>
 */
class departmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dept_name' => fake()->randomElement(['BSIT', 'BSCS', 'BSOA'])
        ];
    }
}
