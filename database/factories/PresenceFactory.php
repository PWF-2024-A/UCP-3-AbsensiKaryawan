<?php

namespace Database\Factories;

use App\Models\Division;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PresenceFactory extends Factory
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
            // 'users_id' => User::inRandomOrder()->first()->id,
            'division_id' => Division::inRandomOrder()->first()->id,
            'date' => fake()->date('d/m/Y'),
            'in' => fake()->date('H:i'),
            'out' => fake()->date('H:i'),
            'status' => 'Attend',
        ];
    }
}
