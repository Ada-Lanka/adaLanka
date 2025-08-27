<div class="flex gap-4 flex-wrap justify-center py-4">
    @foreach ($categories as $category)
        @php
            $isActive = strtolower($category->category_name) === strtolower($active);
        @endphp
<a href="{{ url('/categories/' . $category->slug . '/1') }}"
   class="px-4 py-2 rounded-full border font-semibold transition-all
          {{ $isActive ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white shadow-lg' : 'text-purple-800 border-purple-700 hover:bg-purple-100' }}">
    {{ $category->category_name }}
</a>

    @endforeach
</div>
