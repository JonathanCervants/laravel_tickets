<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::facory(10)->create();
        $categories  = Categories::factory()
        User::factory()
            ->count(5)
            ->has(
                Product::factory(10)->state(function () use($categories){
                    return ['category_id' => $categories->]         
                })
            )
        create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
