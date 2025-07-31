<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    public function show($categoryName, $page = 1)
    {
        $category = Category::where('category_name', $categoryName)->firstOrFail();

        // Get posts in this category, paginate 10 per page
        $postsQuery = $category->posts()->orderBy('created_at', 'desc');

        $posts = $postsQuery->paginate(10, ['*'], 'page', $page);

        return view('category', compact('category', 'posts'));
    }
}
