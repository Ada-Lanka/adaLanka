<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\keyword;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($slug)
    {
        $post = Post::with(['categories', 'subCategories', 'keywords', 'comments'])
                    ->where('slug', $slug)
                    ->firstOrFail();        
        $keywords = $post->keywords?->pluck('keyword')->filter()?->implode(', ') ?? '';
        return view('news.show', compact('post', 'keywords'));
    }

    public function submitComment(Request $request, $slug)
    {
        $request->validate([
            'email' => 'required|email',
            'comment' => 'required|string|max:1000',
        ]);

        $post = Post::where('slug', $slug)->firstOrFail();

        Comment::create([
            'postid' => $post->postid,
            'email' => $request->email,
            'comment' => $request->comment,
            'created_at' => now(),
        ]);

        return redirect()->route('news.show', ['slug' => $slug])->with('success', 'Comment added successfully.');
    }
}
