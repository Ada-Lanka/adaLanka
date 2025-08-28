<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('comments')->insert([
            ['id' => 1, 'postid' => 8, 'email' => 'example@gmail.com', 'comment' => 'example comment 1', 'created_at' => '2025-07-31 11:25:17'],
            ['id' => 2, 'postid' => 12, 'email' => 'abc@gmail.com', 'comment' => 'new', 'created_at' => '2025-08-27 10:01:01'],
        ]);
    }
}
