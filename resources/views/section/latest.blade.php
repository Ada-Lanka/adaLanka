<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

        {{-- Column 1-3: Latest Cards Loop --}}
        <div class="md:col-span-3 space-y-6">

            @foreach ($posts as $post)
                <div class="flex flex-col md:flex-row bg-white rounded-xl shadow-lg overflow-hidden max-w-4xl">
                    <!-- Left Side -->
                    <div class="p-6 flex flex-col justify-between md:w-2/3">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800 mb-2">
                                {{ $post->title }}
                            </h2>
                            <p class="text-gray-600">
                                {{ \Illuminate\Support\Str::words(strip_tags($post->description), 20, '...') }}
                            </p>
                        </div>
                        <div class="mt-4">

                        <a href="{{ route('news.show', ['slug' => $post->slug]) }}"  
   class="inline-block px-6 py-2 border-2 border-purple-700 text-purple-800 font-semibold rounded-full hover:bg-purple-700 hover:text-white transition">
    Read more <i class="fas fa-angle-right ml-1"></i>
</a>

                        </div>
                    </div>

                    <!-- Right Side with Image -->
                    <div class="relative md:w-1/3 h-60 md:h-auto">
                        <img src="{{ $post->thumbnail }}" alt="Post Thumbnail" class="w-full h-full object-cover">
                        <div class="absolute bottom-2 right-2">
                            <button class="bg-black/70 text-white text-xs px-3 py-1 rounded">
                                {{ $post->created_at->diffForHumans() }}
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Column 4: Reserved for Ads --}}
        <div class="bg-gray-100 rounded-xl min-h-[300px] flex items-center justify-center text-gray-400">
            <span>Ad Space</span>
        </div>

    </div>
</div>
