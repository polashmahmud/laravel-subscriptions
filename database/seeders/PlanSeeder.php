<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            'title' => 'Monthly',
            'slug' => 'monthly',
            'stripe_id' => 'price_1NqUDxJGMpe4lKW2csPseztg'
        ]);

        Plan::create([
            'title' => 'Yearly',
            'slug' => 'yearly',
            'stripe_id' => 'price_1NqUDxJGMpe4lKW2FCcVroDw'
        ]);
    }
}
