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
 
         /* Run this in production level
        $this->call([
            AdminUserSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
        ]);
         */

        // Run this for testing
        $this->call([
            UsersTableSeeder::class,
            AdminTableSeeder::class,
            CategoriesTableSeeder::class,
            SubCategoriesTableSeeder::class,
            PostsTableSeeder::class,
            CommentsTableSeeder::class,
            KeywordsTableSeeder::class,
            PostCategoriesTableSeeder::class,
            PostSubCategoriesTableSeeder::class,
            PostKeywordsTableSeeder::class,
        ]);



       
    }
}

