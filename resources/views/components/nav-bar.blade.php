<nav {{ $attributes->merge(['class' => 'navbar']) }}>
    <div class="flex items-center justify-between px-4 py-2">
        <div class="w-auto flex items-center space-x-2">
            //TODO: Add logo image (This is a placeholder for the logo)
            <h1 class="text-lg md:text-xl font-bold text-white dark:text-gray-900">Ada Lanka</h1>
        </div>
        <div class="navbar-nav flex space-x-4">
            <a href="#" class="nav-link text-gray-700 hover:text-purple-800 transition-colors">Home</a>
            <a href="#" class="nav-link text-gray-700 hover:text-purple-800 transition-colors">About</a>
            <a href="#" class="nav-link text-gray-700 hover:text-purple-800 transition-colors">Contact</a>
        </div>
    </div>
</nav>