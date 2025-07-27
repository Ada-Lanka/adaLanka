<nav {{ $attributes->merge(['class' => 'navbar relative']) }}>
    <div class="flex items-center justify-between px-4 py-2">
        <!-- Logo -->
        <div class="w-auto flex items-center space-x-2">
            <h1 class="text-lg md:text-xl font-bold text-white">Ada Lanka</h1>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex space-x-4 items-center">
            <p class="text-white">follow us</p>
            <div class="flex space-x-3 items-center">
                <a href="#" class="text-white hover:text-gray-300 transition-colors w-6 h-6 flex items-center justify-center">
                    <!--<x-iconpark-facebook class="w-5 h-5" />-->
                </a>
                <a href="#" class="text-white hover:text-gray-300 transition-colors w-6 h-6 flex items-center justify-center">
                    <!--<x-iconpark-instagram-o class="w-5 h-5" />-->
                </a>
                <a href="#" class="text-white hover:text-gray-300 transition-colors w-6 h-6 flex items-center justify-center">
                    <!--<x-iconpark-twitter class="w-5 h-5" />-->
                </a>
                <a href="#" class="text-white hover:text-gray-300 transition-colors w-6 h-6 flex items-center justify-center">
                    <!--<x-iconpark-wechat class="w-5 h-5" />-->
                </a>
            </div>
            <!-- Dark Mode Toggle for Desktop -->
            <button id="darkModeToggle" class="text-white hover:text-gray-300 transition-colors p-1 w-8 h-8 flex items-center justify-center">
                <x-iconpark-moon class="w-5 h-5 moon-icon" />
                <x-iconpark-sun class="w-5 h-5 sun-icon" style="display: none;" />
            </button>
        </div>

        <!-- Mobile Menu Button and Dark Mode -->
        <div class="md:hidden flex items-center space-x-3">
            <!-- Dark Mode Toggle for Mobile -->
            <button id="darkModeToggleMobile" class="text-white hover:text-gray-300 transition-colors p-1 w-8 h-8 flex items-center justify-center">
                <x-iconpark-moon class="w-5 h-5 moon-icon" />
                <x-iconpark-sun class="w-5 h-5 sun-icon" style="display: none;" />
            </button>
            <!-- Mobile Menu Toggle -->
            <button id="mobileMenuToggle" class="text-white hover:text-gray-300 transition-colors p-1 w-8 h-8 flex items-center justify-center">
                <span id="menuIcon">
                    <!--<x-iconpark-applicationmenu class="w-6 h-6" />-->
                </span>
                <span id="closeIcon" class="hidden">
                    <!--<x-iconpark-close class="w-6 h-6" />-->
                </span>
            </button>
        </div>
    </div>

    <!-- Mobile Side Menu -->
    <div id="mobileMenu" class="mobile-menu fixed inset-y-0 right-0 w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden">
        <div class="p-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg font-semibold text-gray-900">Menu</h2>
                <button id="closeMobileMenu" class="text-gray-500 hover:text-gray-700 w-6 h-6 flex items-center justify-center">
                    <!--<x-iconpark-close class="w-5 h-5" />-->
                </button>
            </div>
            
            <!-- Mobile Navigation Links -->
            <div class="space-y-4 mb-6">
                <a href="#" class="block text-gray-900 hover:text-purple-600 transition-colors">Home</a>
                <a href="#" class="block text-gray-900 hover:text-purple-600 transition-colors">About</a>
                <a href="#" class="block text-gray-900 hover:text-purple-600 transition-colors">Services</a>
                <a href="#" class="block text-gray-900 hover:text-purple-600 transition-colors">Contact</a>
            </div>

            <!-- Mobile Social Links -->
            <div class="border-t pt-4 border-gray-300">
                <p class="text-sm text-gray-600 mb-3">Follow us</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-600 hover:text-purple-600 transition-colors w-6 h-6 flex items-center justify-center">
                       <!-- <x-iconpark-facebook class="w-5 h-5" />-->
                    </a>
                    <a href="#" class="text-gray-600 hover:text-purple-600 transition-colors w-6 h-6 flex items-center justify-center">
                        <!--<x-iconpark-instagram-o class="w-5 h-5" />-->
                    </a>
                    <a href="#" class="text-gray-600 hover:text-purple-600 transition-colors w-6 h-6 flex items-center justify-center">
                        <!--<x-iconpark-twitter class="w-5 h-5" />-->
                    </a>
                    <a href="#" class="text-gray-600 hover:text-purple-600 transition-colors w-6 h-6 flex items-center justify-center">
                        <!--<x-iconpark-wechat class="w-5 h-5" />-->
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobileMenuOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden md:hidden"></div>
</nav>