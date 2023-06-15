<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
            "title" => $this->faker->sentence(3),
            "slug" => $this->faker->slug(),
            "excerpt" => $this->faker->sentence(10),
            "body" => collect($this->faker->paragraphs(5))->map(fn ($p) => "<p>$p</p>")->implode(""),
            "user_id" => $this->faker->numberBetween(1, 10),
            "category_id" => $this->faker->numberBetween(1, 8),
        ];
    }
}
