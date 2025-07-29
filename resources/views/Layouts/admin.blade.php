<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.tiny.cloud/1/efoa5t98c3rshimuzeo4whmhkdbvrhdmsyt5h44827pdunfn/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite( 'resources/css/variables.css')
    @vite( 'resources/js/app.js')
    @vite( 'resources/js/search.js')
    <title>Ada Lanka</title>
</head>
<body class="">

    <div class="">
        @yield('content')
    </div>

    @yield('scripts')
</body>
</html>
