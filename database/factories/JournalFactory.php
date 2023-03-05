<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Journal>
 */
class JournalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'img' => 'journal.jpg',
            'abstract' => fake()->text(250),
            'description' => fake()->text(250),
            'website' => 'www.unmuh.com',
            'publisher_id' => mt_rand(1,50),
            'issn' => fake()->randomNumber(5, true),
            'eissn' =>  fake()->regexify('[1-5]{4}[A-Z]{1}')
        ];
    }
}
