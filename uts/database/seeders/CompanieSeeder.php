<?php

namespace Database\Seeders;

use App\Models\companie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        companie::factory()->count(10)->create();
    }
}
