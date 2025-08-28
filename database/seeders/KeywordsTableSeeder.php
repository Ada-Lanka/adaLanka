<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeywordsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('keywords')->insert([
            ['id' => 1, 'keyword' => 'Sri Lanka'],
            ['id' => 2, 'keyword' => 'oil prices'],
            ['id' => 3, 'keyword' => 'example'],
            ['id' => 4, 'keyword' => 'tech'],
            ['id' => 5, 'keyword' => 'AI'],
            ['id' => 6, 'keyword' => 'innovation'],
            ['id' => 7, 'keyword' => 'Sri Lanka wildlife'],
            ['id' => 8, 'keyword' => 'eco tourism'],
            ['id' => 9, 'keyword' => 'Apple'],
            ['id' => 10, 'keyword' => 'iPhone 16 Pro'],
            ['id' => 11, 'keyword' => 'flood'],
            ['id' => 12, 'keyword' => 'Colombo'],
            ['id' => 13, 'keyword' => 'travel'],
            ['id' => 14, 'keyword' => 'Asia'],
            ['id' => 15, 'keyword' => 'budget destinations'],
            ['id' => 16, 'keyword' => 'remote work'],
            ['id' => 17, 'keyword' => 'productivity'],
            ['id' => 18, 'keyword' => 'Thailand'],
            ['id' => 19, 'keyword' => 'green energy'],
            ['id' => 20, 'keyword' => 'renewable'],
            ['id' => 21, 'keyword' => 'dengue'],
            ['id' => 22, 'keyword' => 'vaccine'],
            ['id' => 23, 'keyword' => 'health'],
            ['id' => 24, 'keyword' => 'real estate'],
            ['id' => 25, 'keyword' => 'remote work Asia'],
            ['id' => 26, 'keyword' => 'housing market'],
            ['id' => 27, 'keyword' => 'Politics'],
            ['id' => 28, 'keyword' => 'Policy'],
            ['id' => 29, 'keyword' => 'Business'],
            ['id' => 30, 'keyword' => 'alth'],
            ['id' => 31, 'keyword' => 'Energy'],
            ['id' => 32, 'keyword' => 'Climate'],
            ['id' => 33, 'keyword' => 'Entertainment'],
            ['id' => 34, 'keyword' => 'Sports'],
            ['id' => 35, 'keyword' => 'AI technology'],
            ['id' => 36, 'keyword' => 'machine learning'],
            ['id' => 37, 'keyword' => 'conservation'],
            ['id' => 38, 'keyword' => 'wildlife protection'],
            ['id' => 39, 'keyword' => 'Apple event'],
            ['id' => 40, 'keyword' => 'smartphones'],
            ['id' => 41, 'keyword' => 'natural disaster'],
            ['id' => 42, 'keyword' => 'rainfall'],
            ['id' => 43, 'keyword' => 'tourism'],
            ['id' => 44, 'keyword' => 'budget travel'],
            ['id' => 45, 'keyword' => 'work from home'],
        ]);
    }
}
