<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSubCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('post_sub_categories')->insert([
            ['id' => 1, 'postid' => 4,  'subCategory_id' => 1],
            ['id' => 2, 'postid' => 4,  'subCategory_id' => 2],
            ['id' => 3, 'postid' => 5,  'subCategory_id' => 1],
            ['id' => 4, 'postid' => 5,  'subCategory_id' => 2],
            ['id' => 5, 'postid' => 6,  'subCategory_id' => 1],
            ['id' => 6, 'postid' => 6,  'subCategory_id' => 2],
            ['id' => 7, 'postid' => 7,  'subCategory_id' => 1],
            ['id' => 8, 'postid' => 7,  'subCategory_id' => 2],
            ['id' => 9, 'postid' => 8,  'subCategory_id' => 1],
            ['id' => 10, 'postid' => 8, 'subCategory_id' => 2],
            ['id' => 11, 'postid' => 9, 'subCategory_id' => 1],
            ['id' => 12, 'postid' => 9, 'subCategory_id' => 2],
            ['id' => 13, 'postid' => 10, 'subCategory_id' => 2],
            ['id' => 14, 'postid' => 11, 'subCategory_id' => 1],
            ['id' => 15, 'postid' => 11, 'subCategory_id' => 2],
            ['id' => 16, 'postid' => 12, 'subCategory_id' => 1],
            ['id' => 17, 'postid' => 12, 'subCategory_id' => 2],
        ]);
    }
}

