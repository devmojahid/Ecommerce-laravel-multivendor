<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
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
            'slug' => Str::slug(fake()->name()),
            'photo' => fake()->imageUrl('100','100'),
            'summary' => fake()->sentences(3,true),
            'is_parent' => fake()->randomElement([true,false]),
            'status' => fake()->randomElement(['active','inactive',]),
            'parent_id' => fake()->randomElement(\App\Models\Category::pluck('id')->toArray())
        ];
    }
}
