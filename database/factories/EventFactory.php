<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Service du dimanche',
            'description' => 'Rejoignez-nous pour notre service du dimanche ' . now(),
            'date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'location' => config('APP_NAME', 'La citee de nos fetes'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
