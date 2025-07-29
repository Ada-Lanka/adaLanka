<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Keyword;
use App\Models\Category;
use App\Models\SubCategory;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AdminPostController extends Controller
{
    public function create()
    {
    //Grab categories & Sub categories list from database
        try {
            $categories = Category::all();
            $subcategories = SubCategory::all();
            return view('admin.createPost', compact('categories', 'subcategories'));

        } catch (\Exception $e) {
            Log::error('Error loading post creation form: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Failed to load the post creation form.']);
        }
    }

    public function store(Request $request)
    {
    // Validate all inputs here
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'required|string',
            'keywords' => 'nullable|string',
            'categories' => 'nullable|array',
            'subcategories' => 'nullable|array',
        ]);

        
        try {
            if (!$request->hasFile('thumbnail')) {
                return redirect()->back()->withInput()->withErrors(['thumbnail' => 'Thumbnail image is required.']);
            }

    // Upload thubnail image into Cloudinary and getting the image url

        Log::info('Uploading image to Cloudinary...');
           $uploadResult = Cloudinary::uploadApi()->upload($request->file('thumbnail')->getRealPath(), [
                'folder' => 'thumbnails'
            ]);

            if (!isset($uploadResult['secure_url'])) {
                Log::error('Invalid Cloudinary response.');
                return redirect()->back()->withInput()->withErrors(['thumbnail' => 'Failed to upload image.']);
            }

            $uploadedFileUrl = $uploadResult['secure_url'];
            Log::info('Image uploaded successfully: ' . $uploadedFileUrl);

            DB::beginTransaction();

    // Increae post count by 1 in admin table
            $admin = \App\Models\Admin::where('user_id', Auth::id())->first();

            if ($admin) {
                $admin->increment('post_count');
                Log::info('Admin post_count incremented.');
            }

    // Create the post by adding all data into the tables
            $post = Post::create([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'thumbnail' => $uploadedFileUrl,
                'creator' => Auth::id(),
            ]);

            Log::info('Post created with ID: ' . $post->id);

    // Attach categories
            if (!empty($validated['categories']) && method_exists($post, 'categories')) {
                $post->categories()->sync($validated['categories']);
                Log::info('Categories attached.');
            }

    // Attach subcategories
            if (!empty($validated['subcategories']) && method_exists($post, 'subcategories')) {
                $post->subcategories()->sync($validated['subcategories']);
                Log::info('Subcategories attached.');
            }

    // Attach keywords
            if (!empty($validated['keywords']) && method_exists($post, 'keywords')) {
                $keywords = array_filter(array_map('trim', explode(',', $validated['keywords'])));
                $keywordIds = [];

                foreach ($keywords as $word) {
                    $keyword = Keyword::firstOrCreate(['keyword' => $word]);
                    $keywordIds[] = $keyword->id;
                }

                $post->keywords()->sync($keywordIds);
                Log::info('Keywords synced.');
            }

            DB::commit();

            return redirect()->route('admin.add_news2')->with('success', 'Post created successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error storing post: ' . $e->getMessage());
            return redirect()->back()->withInput()->withErrors(['error' => 'An unexpected error occurred while creating the post.']);
        }
    }

// Handle inline image upload (Upload each image into Cloudinary then grab url and show it on TinyMCE editor)
    public function uploadImage(Request $request)
    {
        // verify file is received
       if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $file = $request->file('file');
            
        // Upload to Cloudinary
            $cloudinary = Cloudinary::uploadApi()->upload($file->getRealPath(), [
            'folder' => 'news-images'
        ]);

            // Return JSON response with image URL as required by TinyMCE
            return response()->json([
                'location' => $cloudinary['secure_url']
            ], 200);
        }

        return response()->json(['error' => 'Invalid file upload'], 400);
    }


}
