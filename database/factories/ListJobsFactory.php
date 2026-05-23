<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ListJobs>
 */
class ListJobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'description' => fake()->paragraph(2),
            'company' => fake()->company(),
            'location' => fake()->city() . ', PH',
            'salary' => number_format(fake()->numberBetween(30000, 150000))
        ];
    }
}