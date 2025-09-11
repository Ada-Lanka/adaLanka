<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'category_name' => 'Politics & Policy', 'slug' => 'politics-policy', 'created_at' => '2025-07-31 00:28:01', 'updated_at' => '2025-08-27 09:06:40'],
            ['id' => 2, 'category_name' => 'Tech', 'slug' => 'tech', 'created_at' => '2025-07-31 00:28:01', 'updated_at' => '2025-08-27 09:06:40'],
            ['id' => 3, 'category_name' => 'Business', 'slug' => 'business', 'created_at' => '2025-07-31 00:28:01', 'updated_at' => '2025-08-27 09:06:40'],
            ['id' => 4, 'category_name' => 'Health', 'slug' => 'health', 'created_at' => '2025-07-31 00:28:01', 'updated_at' => '2025-08-27 09:06:40'],
            ['id' => 5, 'category_name' => 'Energy & Climate', 'slug' => 'energy-climate', 'created_at' => '2025-07-31 00:28:01', 'updated_at' => '2025-08-27 09:06:40'],
            ['id' => 6, 'category_name' => 'Entertainment', 'slug' => 'entertainment', 'created_at' => '2025-07-31 00:28:01', 'updated_at' => '2025-08-27 09:06:40'],
            ['id' => 7, 'category_name' => 'Sports', 'slug' => 'sports', 'created_at' => '2025-07-31 00:28:01', 'updated_at' => '2025-08-27 09:06:40'],
        ]);
    }
}
