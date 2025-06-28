<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite( 'resources/css/app.css')
    @vite( 'resources/js/app.js')
    <title>Ada Lanka</title>
</head>
<body class="h-full transition-colors duration-200 flex flex-col min-h-screen">
    <nav class="w-full p-2">
        <x-nav-bar />
    </nav>

    <main class="container mx-auto flex-grow transition-colors duration-200">
        <div class="p-4">
            @yield('content')
        </div>
    </main>

    <x-site-footer />
</body>
</html>