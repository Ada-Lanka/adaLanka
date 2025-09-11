<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite( 'resources/css/app.css')
    @vite( 'resources/js/app.js')
    @vite( 'resources/js/search.js')
    <title>Ada Lanka</title>
</head>
<body class="h-full transition-colors duration-200 flex flex-col min-h-screen">
    <!-- Header Section -->
   <nav class="w-full p-2">
     <x-nav-bar>
   </nav>
    <!-- Main Layout wrapper -->
    <main class="container mx-auto flex-grow transition-colors duration-200">
        <!-- Categories Section -->
        <x-categories-section />
        <!-- Main Content -->
        <div class="p-4">
            @yield('content')
        </div>
    </main>
    <!-- Footer Section -->
    <x-site-footer />
</body>
</html>