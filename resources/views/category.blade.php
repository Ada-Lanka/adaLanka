@extends('Layouts.Category')

@section('content')
<div class="container mx-auto px-4 py-8">

    <!-- Category Title -->
    <h1 class="text-3xl font-bold mb-6 uppercase">{{ $category->category_name }}</h1>

    <div class="grid grid-cols-1 gap-8">
        @foreach ($posts->chunk(2) as $chunk)
            <div class="flex gap-6">
                <!-- Left: 3/4 width for 2 cards -->
                <div class="w-3/4 grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($chunk as $post)
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden relative">
                            <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}" class="w-full h-60 object-cover rounded-t-2xl">

                            <div class="absolute bottom-4 right-4 bg-white px-3 py-1 rounded-full shadow text-sm text-gray-800 flex items-center">
                                <i class="fas fa-clock mr-1 text-sm"></i> {{ $post->created_at->diffForHumans() }}
                            </div>

                            <div class="p-6">
                                <h3 class="text-xl font-extrabold text-black mb-2 uppercase tracking-tight">
                                    {{ $post->title }}
                                </h3>
                                <p class="text-gray-700 mb-6">
                                    {{ \Illuminate\Support\Str::words(strip_tags($post->description), 25, '...') }}
                                </p>

                                <a href="{{ route('news.show', ['slug' => $post->slug]) }}" target="_blank" class="inline-block px-6 py-2 border-2 border-purple-700 text-purple-800 font-semibold rounded-full hover:bg-purple-700 hover:text-white transition">
                                    Read more <i class="fas fa-angle-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Right: 1/4 width for Ads -->
                <div class="w-1/4 bg-gray-100 p-4 rounded-2xl shadow-inner flex items-center justify-center">
                    <!-- Your ad content here -->
                    <p class="text-center text-gray-500">Ad Space</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-10 flex justify-center">
        {{ $posts->withPath(url("/categories/{$category->category_name}"))->links() }}
    </div>

</div>
@endsection
