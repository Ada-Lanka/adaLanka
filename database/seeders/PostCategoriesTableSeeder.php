<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('post_categories')->insert([
            ['id' => 1, 'postid' => 4, 'category_id' => 5],
            ['id' => 2, 'postid' => 5, 'category_id' => 2],
            ['id' => 3, 'postid' => 6, 'category_id' => 5],
            ['id' => 4, 'postid' => 7, 'category_id' => 6],
            ['id' => 5, 'postid' => 8, 'category_id' => 2],
            ['id' => 6, 'postid' => 8, 'category_id' => 3],
            ['id' => 7, 'postid' => 8, 'category_id' => 6],
            ['id' => 8, 'postid' => 9, 'category_id' => 5],
            ['id' => 9, 'postid' => 10, 'category_id' => 4],
            ['id' => 10, 'postid' => 11, 'category_id' => 3],
            ['id' => 11, 'postid' => 12, 'category_id' => 1],
            ['id' => 12, 'postid' => 12, 'category_id' => 2],
            ['id' => 13, 'postid' => 12, 'category_id' => 3],
        ]);
    }
}
