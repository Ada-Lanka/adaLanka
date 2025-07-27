<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    // Show the form to create a news post
    public function create()
    {
        return view('admin.createPost');  // loads resources/views/admin/createPost.blade.php
    }
     

    // Handle form submission for adding news
    public function store(Request $request)
    {
        // Validate inputs
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumbnail' => 'nullable|string', // or file if you upload
            // add other validations as needed
        ]);

        // Save post logic here (you'll likely use Post model)

        // Example:
        // Post::create([
        //     'title' => $validated['title'],
        //     'description' => $validated['description'],
        //     'thumbnail' => $validated['thumbnail'],
        //     'creator' => auth()->id(),
        // ]);

        return redirect()->route('admin.add_news2')->with('success', 'News posted successfully!');
    }
}
