<div class="flex gap-4 flex-wrap justify-center py-4">
    @foreach ($categories as $category)
        @php
            $isActive = strtolower($category->category_name) === strtolower($active);
        @endphp

        <a href="{{ url('/categories/' . $category->slug . '/1') }}"
           class="px-4 py-2 rounded-full border font-semibold transition-all"
           style="{{ $isActive
                ? 'background: linear-gradient(90deg,#C500B1,#5F0055); color:#fff; border-color:transparent; box-shadow:0 4px 6px rgba(0,0,0,0.2);'
                : 'color:#5F0055; border:1px solid #C500B1;' }}"
           onmouseover="if(!{{ $isActive ? 'true' : 'false' }}){this.style.background='linear-gradient(90deg,#C500B1,#5F0055)';this.style.color='#fff';}"
           onmouseout="if(!{{ $isActive ? 'true' : 'false' }}){this.style.background='transparent';this.style.color='#5F0055';}">
            {{ $category->category_name }}
        </a>
    @endforeach
</div>
