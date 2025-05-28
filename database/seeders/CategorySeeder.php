<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Subcategory;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->truncate();
        DB::table('subcategories')->truncate();

        $categories = [
            ['name' => 'LaraBB', 'slug' => 'lara-bb', 'order' => 0],
            ['name' => 'Community', 'slug' => 'community', 'order' => 1],
        ];

        $subcategories = [
            [
                'category_id' => 1,
                'name' => 'Announcements',
                'slug' => 'announcements',
                'order' => 0,
                'description' => 'Announcements about LaraBB',
            ],
            [
                'category_id' => 1,
                'name' => 'Guides',
                'slug' => 'guides',
                'order' => 1,
                'description' => 'Learn how to install and configure LaraBB',
            ],
            [
                'category_id' => 2,
                'name' => 'Help',
                'slug' => 'help',
                'order' => 0,
                'description' => 'Get help installing and configuring PunkwebBB',
            ],
            [
                'category_id' => 2,
                'name' => 'Built with PunkwebBB',
                'slug' => 'built-with-lara-bb',
                'order' => 1,
                'description' => 'Let others know about your community',
            ],
            [
                'category_id' => 2,
                'name' => 'Random',
                'slug' => 'random',
                'order' => 2,
                'description' => 'For everything else!',
            ],

        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        foreach ($subcategories as $subcategory) {
            Subcategory::create($subcategory);
        }
    }
}
