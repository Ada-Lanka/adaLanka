<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class BackfillCategorySlugsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::whereNull('slug')->orWhere('slug', '')->get();

        foreach ($categories as $category) {
            $category->slug = Str::slug($category->category_name, '-');
            $category->save();
        }

        $this->command->info('✅ Slugs backfilled for categories without slugs.');
    }
}
