<?php

namespace Database\Factories;

use App\Models\companie;
use Faker\Provider\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<companie>
 */
class CompanieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => fake()->unique()->numerify('#####'),
            'company_name' => fake()->company(),
            'headquarters_phone_number' => fake()->phoneNumber()
        ];
    }
}
