<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubCategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subCategories = [
            ['subCategory_name' => 'Top News'],
            ['subCategory_name' => 'Trending'],
        ];

        foreach ($subCategories as $data) {
            SubCategory::create($data);
        }
    }
}
