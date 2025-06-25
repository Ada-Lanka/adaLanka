<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite( 'resources/css/app.css')
    @vite( 'resources/js/app.js')
    <title>Ada Lanka</title>
</head>
<body>
    <main class="container mx-auto">
        <nav class="w-full p-2">
            <x-nav-bar />
        </nav>

        <div class="p-4">
            @yield('content')
        </div>

        <footer class="bg-gray-800 text-white p-4 mt-4">
            <p>&copy; 2023 Ada Lanka. All rights reserved.</p>
        </footer>
    </main>
</body>
</html>