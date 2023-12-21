<?php

namespace Database\Factories;

use App\Models\Sermon;
use App\Models\Speaker;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Sermon>
 */
class SermonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'speaker_id' => Speaker::factory(),
            'title' => fake()->sentence(),
            'description' => fake()->paragraph,
            'passages' => fake()->sentence(20),
        ];
    }
}
