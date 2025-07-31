<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;


class LatestPostController extends Controller
{
    public function index()
    {
        // Get latest 5 posts
        $posts = Post::latest()->take(5)->get();

        return view('latest', compact('posts'));
    }
}
