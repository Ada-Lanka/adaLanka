<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Politics & Policy',
            'Tech',
            'Business',
            'Health',
            'Energy & Climate',
            'Entertainment',
            'Sports',
        ];

        foreach ($categories as $categoryName) {
            Category::create(['category_name' => $categoryName]);
        }
    }
}
