@if ($topPosts->isNotEmpty())
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-6 text-black">Top News</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {{-- Left: Big Latest Card --}}
            <div class="md:col-span-2">
                @php $mainPost = $topPosts->first(); @endphp
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <img src="{{ $mainPost->thumbnail }}" alt="{{ $mainPost->title }}" class="w-full h-64 object-cover">

                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-black mb-2">{{ $mainPost->title }}</h3>
                        <p class="text-gray-700 mb-4">
                            {{ \Illuminate\Support\Str::words(strip_tags($mainPost->description), 35, '...') }}
                        </p>
                        <div class="text-sm text-gray-500 flex items-center">
                            <i class="fas fa-clock mr-1"></i> {{ $mainPost->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: 4 Small Cards --}}
            <div class="flex flex-col space-y-4">
                @foreach ($topPosts->skip(1)->take(4) as $post)
                    <div class="flex bg-gradient-to-r from-pink-100 to-pink-200 rounded-xl overflow-hidden shadow-sm">
                        <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}" class="w-24 h-24 object-cover">
                        <div class="p-3 flex flex-col justify-between w-full">
                            <p class="text-sm font-semibold text-gray-800 leading-snug">
                                {{ \Illuminate\Support\Str::limit($post->title, 55, '...') }}
                            </p>
                            <div class="text-xs text-gray-600 flex items-center justify-end mt-1">
                                <i class="fas fa-clock mr-1 text-sm"></i>{{ $post->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
