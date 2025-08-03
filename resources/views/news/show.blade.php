@extends('Layouts.news-post')

@section('title', $post->title)

@section('meta')
    <meta name="description" content="{{ Str::words(strip_tags($post->description), 25) }}">
<meta name="keywords" content="{{ $keywords }}">


    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:image" content="{{ $post->thumbnail }}">
    <meta property="og:description" content="{{ Str::words(strip_tags($post->description), 25) }}">
@endsection

@section('content')
<div class="container mx-auto px-4 py-10 max-w-4xl bg-white shadow-md rounded-xl">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">{{ $post->title }}</h1>

    <div class="flex items-center justify-between text-sm text-gray-500 mb-6">
        <span>
            Category: 
            {{ optional($post->categories)->pluck('category_name')->implode(', ') ?? 'Uncategorized' }}
        </span>
        <span><i class="fas fa-clock"></i> {{ $post->created_at->diffForHumans() }}</span>
    </div>

    <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}" class="w-full h-auto rounded-lg mb-6">

    <div class="prose prose-lg max-w-full">
        {!! $post->description !!}
    </div>

    <hr class="my-10">

    {{-- Comments --}}
    <div>
        <h2 class="text-2xl font-semibold mb-4">Comments</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @forelse ($post->comments as $comment)
            <div class="border border-gray-200 p-4 rounded mb-4">
                <p class="text-sm text-gray-600 mb-1">
                    <i class="fas fa-user"></i> {{ $comment->email }} • {{ $comment->created_at->diffForHumans() }}
                </p>
                <p>{{ $comment->comment }}</p>
            </div>
        @empty
            <p class="text-gray-500">No comments yet.</p>
        @endforelse

        {{-- Add Comment Form --}}
        <form method="POST" action="{{ route('news.comment', $post->slug) }}" class="mt-6 space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-semibold">Email</label>
                <input type="email" name="email" id="email" required class="w-full border rounded px-3 py-2">
            </div>
            <div>
                <label for="comment" class="block text-sm font-semibold">Comment</label>
                <textarea name="comment" id="comment" required rows="4" class="w-full border rounded px-3 py-2"></textarea>
            </div>
            <button type="submit" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
                Submit Comment
            </button>
        </form>
    </div>
</div>
@endsection
