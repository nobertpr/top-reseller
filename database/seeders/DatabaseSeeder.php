<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::factory()->create([
            'category_name' => 'Shirt',
        ]);
        \App\Models\Category::factory()->create([
            'category_name' => 'Bag',
        ]);

        \App\Models\Category::factory()->create([
            'category_name' => 'Shoes',
        ]);


        \App\Models\Category::factory()->create([
            'category_name' => 'Dress',
        ]);

        // \App\Models\Category::factory(4)->create();

        \App\Models\Item::factory(50)->create();
        \App\Models\Brand::factory(10)->create();
    }
}
