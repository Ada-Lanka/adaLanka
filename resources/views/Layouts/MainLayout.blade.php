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
        <header class="bg-blue-500 text-white p-4">
            <h1 class="text-2xl">Ada Lanka</h1>
        </header>

        <nav class="bg-gray-200 p-4">
            <ul class="flex space-x-4">
                <li><a href="#" class="text-blue-500">Home</a></li>
                <li><a href="#" class="text-blue-500">About</a></li>
                <li><a href="#" class="text-blue-500">Contact</a></li>
            </ul>
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