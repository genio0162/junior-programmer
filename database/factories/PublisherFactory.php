<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publisher>
 */
class PublisherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->words(2, true),
            "img" => 'unmuh.jpg',
            "alias" => 'UI',
            'regency_id' => mt_rand(1,514),
            'province_id' => mt_rand(1,33),
            'website' => "www.unmuh.com"
        ];
    }
}
