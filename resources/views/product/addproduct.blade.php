<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Add Product')</title>
        <link rel="icon" type="svg+xml" href="{{ asset('/logo.svg') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <script src="https://cdn.tailwindcss.com"></script>

    </head>

    <body class="dark:bg-black">
        <main class="p-6">
            @yield('content')
            
        </main>
    </body>
</html>
