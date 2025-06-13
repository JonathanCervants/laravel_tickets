<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Ticket;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::facory(10)->create();
        $categories  = Category::factory()->count(10)->create();

        User::factory()
            ->count(5)
            ->has(
                Product::factory(10)->state(function () use($categories){
                    return ['category_id' => $categories->random()->id];         
                })
            )
            ->create();
        
        Ticket::Factory()->count(10)->create();
    }
}
