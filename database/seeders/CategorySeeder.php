<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'LaraBB', 'slug' => 'lara-bb', 'order' => 0],
            ['name' => 'Community', 'slug' => 'community', 'order' => 1],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
