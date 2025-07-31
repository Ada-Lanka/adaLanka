<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') - YourSiteName</title>

    {{-- Meta tags --}}
    @yield('meta')

    {{-- Tailwind CSS CDN --}}
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    {{-- FontAwesome CDN for icons --}}
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-papBvFFoNNJLQwT+y7QG7X8Ms67f7HRv+mxKhN9zoR3SXp18JU4GLmQU5NiU6HROUS29jv+u2uMqxA0Kw8BCg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    {{-- Add any other head scripts or styles here --}}
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">

    {{-- Optional: Header --}}
    <header class="bg-white shadow-md p-4 mb-6">

    </header>

    {{-- Main Content --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Optional: Footer --}}
    <footer class="bg-white border-t mt-12 py-6 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} YourSiteName. All rights reserved.
    </footer>

</body>
</html>
