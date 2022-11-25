<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->name(),
            'discription' => fake()->name(),
            'slug' => Str::slug(fake()->name()),
            'photo' => fake()->imageUrl('40','40'),
            'condition' => fake()->randomElement(['banner','promo',]),
            'status' => fake()->randomElement(['active','inactive',])
        ];
    }
}
