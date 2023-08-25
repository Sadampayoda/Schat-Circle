<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SosialMedia>
 */
class SosialMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'media' => $this->faker->randomElement([
                'WhatsApp',
                'Instagram',
                'Github',
                'Twitter',
                'Telegram',
                'Discord',
                'Tiktok',
                'Other'
            ]),
            'link' => Str::random(5),
            'users_id' => $this->faker->unique()->numberBetween(1,10)
        ];
    }
}
