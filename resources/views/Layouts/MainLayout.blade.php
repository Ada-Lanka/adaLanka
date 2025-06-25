<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite( 'resources/css/app.css')
    @vite( 'resources/js/app.js')
    <title>Ada Lanka</title>
</head>
<body class="h-full bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-200">
    <main class="container mx-auto min-h-screen flex flex-col">
        <nav class="w-full p-2">
            <x-nav-bar />
        </nav>

        <div class="p-4 flex-grow">
            @yield('content')
        </div>

        <footer class="bg-gray-800 dark:bg-gray-950 text-white p-4 mt-4 transition-colors duration-200">
            <p>&copy; 2023 Ada Lanka. All rights reserved.</p>
        </footer>
    </main>
</body>
</html>