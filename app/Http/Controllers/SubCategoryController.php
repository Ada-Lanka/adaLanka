<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function showTopNews()
{
    $topNews = SubCategory::where('subCategory_name', 'Top News')->first();

    $topPosts = $topNews
        ? $topNews->posts()->latest()->take(5)->get()
        : collect();

    return view('section.top-news', compact('topPosts'));
}

public function showTrending()
{
    $trending = SubCategory::where('subCategory_name', 'Trending')->first();

    $trendingPosts = $trending
        ? $trending->posts()->latest()->take(5)->get()
        : collect();

    return view('section.trending', compact('trendingPosts'));
}

}
