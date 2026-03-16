<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tevekenyseg_id' => Activity::factory(),
            'osztaly_nev' => fake()->randomElement([
                '9.A',
                '9.B',
                '10.A',
                '10.B',
                '11.A',
                '11.B',
                '12.A',
            ]),
            'allapot' => fake()->boolean(70),
        ];
    }
}
