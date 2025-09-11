<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostKeywordsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('post_keywords')->insert([
            ['id' => 1, 'postid' => 1, 'keyword_id' => 1],
            ['id' => 2, 'postid' => 1, 'keyword_id' => 2],
            ['id' => 3, 'postid' => 2, 'keyword_id' => 3],
            ['id' => 4, 'postid' => 3, 'keyword_id' => 4],
            ['id' => 5, 'postid' => 3, 'keyword_id' => 5],
            ['id' => 6, 'postid' => 3, 'keyword_id' => 6],
            ['id' => 7, 'postid' => 4, 'keyword_id' => 7],
            ['id' => 8, 'postid' => 4, 'keyword_id' => 8],
            ['id' => 9, 'postid' => 5, 'keyword_id' => 9],
            ['id' => 10, 'postid' => 5, 'keyword_id' => 10],
            ['id' => 11, 'postid' => 6, 'keyword_id' => 11],
            ['id' => 12, 'postid' => 6, 'keyword_id' => 12],
            ['id' => 13, 'postid' => 7, 'keyword_id' => 13],
            ['id' => 14, 'postid' => 7, 'keyword_id' => 14],
            ['id' => 15, 'postid' => 7, 'keyword_id' => 15],
            ['id' => 16, 'postid' => 8, 'keyword_id' => 16],
            ['id' => 17, 'postid' => 8, 'keyword_id' => 17],
            ['id' => 18, 'postid' => 9, 'keyword_id' => 18],
            ['id' => 19, 'postid' => 9, 'keyword_id' => 19],
            ['id' => 20, 'postid' => 9, 'keyword_id' => 20],
            ['id' => 21, 'postid' => 10, 'keyword_id' => 21],
            ['id' => 22, 'postid' => 10, 'keyword_id' => 22],
            ['id' => 23, 'postid' => 10, 'keyword_id' => 23],
            ['id' => 24, 'postid' => 11, 'keyword_id' => 24],
            ['id' => 25, 'postid' => 11, 'keyword_id' => 25],
            ['id' => 26, 'postid' => 11, 'keyword_id' => 26],
            ['id' => 27, 'postid' => 1, 'keyword_id' => 27],
            ['id' => 28, 'postid' => 1, 'keyword_id' => 28],
            ['id' => 29, 'postid' => 2, 'keyword_id' => 29],
            ['id' => 30, 'postid' => 2, 'keyword_id' => 30],
            ['id' => 31, 'postid' => 3, 'keyword_id' => 31],
            ['id' => 32, 'postid' => 3, 'keyword_id' => 32],
            ['id' => 33, 'postid' => 4, 'keyword_id' => 33],
            ['id' => 34, 'postid' => 4, 'keyword_id' => 34],
            ['id' => 35, 'postid' => 5, 'keyword_id' => 35],
            ['id' => 36, 'postid' => 5, 'keyword_id' => 36],
            ['id' => 37, 'postid' => 6, 'keyword_id' => 37],
            ['id' => 38, 'postid' => 6, 'keyword_id' => 38],
            ['id' => 39, 'postid' => 7, 'keyword_id' => 39],
            ['id' => 40, 'postid' => 7, 'keyword_id' => 40],
            ['id' => 41, 'postid' => 8, 'keyword_id' => 41],
            ['id' => 42, 'postid' => 8, 'keyword_id' => 42],
            ['id' => 43, 'postid' => 9, 'keyword_id' => 43],
            ['id' => 44, 'postid' => 9, 'keyword_id' => 44],
            ['id' => 45, 'postid' => 10, 'keyword_id' => 45],
            ['id' => 46, 'postid' => 11, 'keyword_id' => 1],
            ['id' => 47, 'postid' => 11, 'keyword_id' => 2],
            ['id' => 48, 'postid' => 11, 'keyword_id' => 3],
            ['id' => 49, 'postid' => 12, 'keyword_id' => 4],
            ['id' => 50, 'postid' => 12, 'keyword_id' => 5],
            ['id' => 51, 'postid' => 12, 'keyword_id' => 6],
            ['id' => 52, 'postid' => 12, 'keyword_id' => 7],
        ]);
    }
}
