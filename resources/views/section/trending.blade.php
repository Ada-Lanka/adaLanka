@if ($latestPosts->isNotEmpty())
<div class="container mx-auto px-4 py-8">

<!-- gradient to news Trending -->
    <div class="flex items-center space-x-1 mb-6">
        <div class="flex-1" style="height: 4px; background: linear-gradient(90deg, #F5F5F5, #C500B1, #5F0055);"></div>
            <h2 class="text-xl font-bold text-white px-4 py-2 whitespace-nowrap"
            style="background: linear-gradient(90deg, #C500B1, #5F0055); border-radius: 30px;"
            >Trending</h2>
        <div class="flex-1" style="height: 4px; background: linear-gradient(90deg, #C500B1, #5F0055, #F5F5F5);"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 items-start">
        {{-- Left: Latest Posts --}}
        <div class="md:col-span-3 grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($latestPosts->take(2) as $post)
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
                     <a href="{{ route('news.show', ['slug' => $post->slug]) }}"  
   class="inline-block px-6 py-2 border-2 border-purple-700 text-purple-800 font-semibold rounded-full hover:bg-purple-700 hover:text-white transition">
   Read more <i class="fas fa-angle-right ml-1"></i>
</a>

                    </div>
                </div>
            @endforeach
        </div>

        {{-- Right: Advertisement --}}
        <div class="bg-gray-200 rounded-xl h-full min-h-[300px] flex items-center justify-center text-gray-600 font-semibold uppercase text-sm">
            Advertisement
        </div>
    </div>
</div>
@endif
