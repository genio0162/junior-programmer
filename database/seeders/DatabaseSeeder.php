<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(20)->create();
        \App\Models\Article::factory(50)->create();
        \App\Models\Fakulty::factory(10)->create();
        \App\Models\Journal::factory(50)->create();
        \App\Models\Major::factory(20)->create();
        \App\Models\Publisher::factory(50)->create();
        \App\Models\Subject::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ],[

        // ]);
    }
}
