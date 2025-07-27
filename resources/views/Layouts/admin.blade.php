<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite( 'resources/css/app.css')
    @vite( 'resources/js/app.js')
    @vite( 'resources/js/search.js')
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ada Lanka</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md">
        @yield('content')
    </div>
</body>
</html>