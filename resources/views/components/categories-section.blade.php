<section class="categories-section bg-white py-6 border-b border-gray-200">
    <div class="container mx-auto px-4">
        <!-- Categories -->
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-900 mb-4 text-center">Browse Categories</h2>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="/" class="category-link bg-purple-100 hover:bg-purple-200 text-purple-800 hover:text-purple-900 px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200">
                    Politics
                </a>
                <a href="/" class="category-link bg-purple-100 hover:bg-purple-200 text-purple-800 hover:text-purple-900 px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200">
                    Health
                </a>
                <a href="/" class="category-link bg-purple-100 hover:bg-purple-200 text-purple-800 hover:text-purple-900 px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200">
                    Energy
                </a>
                <a href="/" class="category-link bg-purple-100 hover:bg-purple-200 text-purple-800 hover:text-purple-900 px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200">
                    Tech
                </a>
                <a href="/" class="category-link bg-purple-100 hover:bg-purple-200 text-purple-800 hover:text-purple-900 px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200">
                    Entertainment
                </a>
                <a href="/" class="category-link bg-purple-100 hover:bg-purple-200 text-purple-800 hover:text-purple-900 px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200">
                    Business
                </a>
                <a href="/" class="category-link bg-purple-100 hover:bg-purple-200 text-purple-800 hover:text-purple-900 px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200">
                    Sports
                </a>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="max-w-2xl mx-auto">
            <div class="relative">
                <input 
                    type="text" 
                    id="search-input"
                    placeholder="Search for news, articles, topics..." 
                    class="w-full px-4 py-3 pr-12 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent placeholder-gray-500"
                    autocomplete="off"
                >
                <button 
                    type="button" 
                    id="search-button"
                    class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-purple-600 hover:bg-purple-700 text-white p-2 rounded-md transition-colors duration-200"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </div>

            <!-- Search Suggestions (hidden by default) -->
            <div id="search-suggestions" class="absolute z-10 w-full max-w-2xl bg-white border border-gray-300 rounded-lg mt-1 shadow-lg hidden">
                <!-- Search suggestions will be populated here by JavaScript -->
            </div>
        </div>
    </div>
</section>
