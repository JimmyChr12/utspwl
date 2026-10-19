<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\companie;

/**
 * @extends Factory<Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_code' => fake()->unique()->numerify('#####'),
            'item' => fake()->name(),
            'unit_price' => fake()->numerify('Rp.#####,00'),
            'company_id' => companie::inRandomOrder()->value('company_id'),
        ];
    }
}
