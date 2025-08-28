<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('sub_categories')->insert([
            ['id' => 1, 'subCategory_name' => 'Top News', 'created_at' => '2025-07-31 00:28:00', 'updated_at' => '2025-07-31 00:28:00'],
            ['id' => 2, 'subCategory_name' => 'Trending', 'created_at' => '2025-07-31 00:28:00', 'updated_at' => '2025-07-31 00:28:00'],
        ]);
    }
}
