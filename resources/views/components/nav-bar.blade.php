<nav {{ $attributes->merge(['class' => 'navbar relative']) }}>
    <div class="flex items-center justify-between px-4 py-2">
        <!-- Logo -->
        <div class="w-auto flex items-center space-x-2">
            <h1 class="text-lg md:text-xl font-bold text-white dark:text-gray-900">Ada Lanka</h1>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex space-x-4 items-center">
            <p class="text-white">follow us</p>
            <div class="flex space-x-3 items-center">
                <a href="#" class="text-white hover:text-gray-300 transition-colors">
                    <x-iconpark-facebook />
                </a>
                <a href="#" class="text-white hover:text-gray-300 transition-colors">
                    <x-iconpark-instagram-o />
                </a>
                <a href="#" class="text-white hover:text-gray-300 transition-colors">
                    <x-bi-twitter-x />
                </a>
                <a href="#" class="text-white hover:text-gray-300 transition-colors">
                    <x-lineawesome-whatsapp />
                </a>
            </div>
            <!-- Dark Mode Toggle for Desktop -->
            <button id="darkModeToggle" class="text-white hover:text-gray-300 transition-colors p-1">
                <span id="darkModeIcon">
                    <span class="dark:hidden">
                        <x-heroicon-s-moon />
                    </span>
                    <span class="hidden dark:inline">
                        <x-akar-sun />
                    </span>
                </span>
            </button>
        </div>

        <!-- Mobile Menu Button and Dark Mode -->
        <div class="md:hidden flex items-center space-x-3">
            <!-- Dark Mode Toggle for Mobile -->
            <button id="darkModeToggleMobile" class="text-white hover:text-gray-300 transition-colors p-1">
                <span id="darkModeIconMobile">
                    <span class="dark:hidden">
                        <x-heroicon-s-moon />
                    </span>
                    <span class="hidden dark:inline">
                        <x-akar-sun />
                    </span>
                </span>
            </button>
            <!-- Mobile Menu Toggle -->
            <button id="mobileMenuToggle" class="text-white hover:text-gray-300 transition-colors p-1">
                <span id="menuIcon">
                    <x-zondicon-menu />
                </span>
                <span id="closeIcon" class="hidden">
                    <x-akar-cross />
                </span>
            </button>
        </div>
    </div>

    <!-- Mobile Side Menu -->
    <div id="mobileMenu" class="fixed inset-y-0 right-0 w-64 bg-white dark:bg-gray-800 shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden">
        <div class="p-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Menu</h2>
                <button id="closeMobileMenu" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                    <x-akar-cross />
                </button>
            </div>
            
            <!-- Mobile Navigation Links -->
            <div class="space-y-4 mb-6">
                <a href="#" class="block text-gray-900 dark:text-white hover:text-purple-600 dark:hover:text-purple-400 transition-colors">Home</a>
                <a href="#" class="block text-gray-900 dark:text-white hover:text-purple-600 dark:hover:text-purple-400 transition-colors">About</a>
                <a href="#" class="block text-gray-900 dark:text-white hover:text-purple-600 dark:hover:text-purple-400 transition-colors">Services</a>
                <a href="#" class="block text-gray-900 dark:text-white hover:text-purple-600 dark:hover:text-purple-400 transition-colors">Contact</a>
            </div>

            <!-- Mobile Social Links -->
            <div class="border-t pt-4 dark:border-gray-600">
                <p class="text-sm text-gray-600 dark:text-gray-300 mb-3">Follow us</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-600 hover:text-purple-600 dark:text-gray-300 dark:hover:text-purple-400 transition-colors">
                        <x-iconpark-facebook />
                    </a>
                    <a href="#" class="text-gray-600 hover:text-purple-600 dark:text-gray-300 dark:hover:text-purple-400 transition-colors">
                        <x-iconpark-instagram-o />
                    </a>
                    <a href="#" class="text-gray-600 hover:text-purple-600 dark:text-gray-300 dark:hover:text-purple-400 transition-colors">
                        <x-bi-twitter-x />
                    </a>
                    <a href="#" class="text-gray-600 hover:text-purple-600 dark:text-gray-300 dark:hover:text-purple-400 transition-colors">
                        <x-lineawesome-whatsapp />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobileMenuOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden md:hidden"></div>
</nav>