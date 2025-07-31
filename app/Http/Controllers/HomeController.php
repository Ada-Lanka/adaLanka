<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Post;
class HomeController extends Controller
{
    public function index()
{
    // Top News
    $topNews = SubCategory::where('subCategory_name', 'Top News')->first();
    $topPosts = $topNews ? $topNews->posts()->latest()->take(5)->get() : collect();

    // Trending
    $trending = SubCategory::where('subCategory_name', 'Trending')->first();
    $trendingPosts = $trending ? $trending->posts()->latest()->take(5)->get() : collect();

    // Latest (optional)
    $latestPosts = \App\Models\Post::latest()->take(5)->get();

    return view('index', compact('topPosts', 'trendingPosts', 'latestPosts'));
}

}
