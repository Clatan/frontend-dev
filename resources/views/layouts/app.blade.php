<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Management Product')</title>
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
            <img src="/logo.svg" alt="logo" class="mx-auto my-6">
            <p class="text">FrontEnd Developer Test</p>
            <a href="{{ route('add.product') }}" class="bg-blue-500 text-white px-12 py-2 rounded-xl hover:bg-red-800 items-center justify-center align-center mx-80 flex font-semibold">
                Add Product
            </a>
        </main>
    </body>
</html>
