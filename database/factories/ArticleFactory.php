<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(mt_rand(3,5)),
            'user_id' => mt_rand(1,20),
            'journal_id' => mt_rand(1,50),
            'publisher_id' => mt_rand(1,50),
            'abstract' => fake()->text(200),
        ];
    }
}
