<!DOCTYPE html>
<html lang="en" class="scroll-smooth p-6 boarder-2 border-gray-300 rounded-lg shadow-lg bg-white dark:bg-gray-800 min-h-screen h-overflow-auto">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Management Product')</title>
        <link rel="icon" type="image/svg+xml" href="{{ asset('logo.svg') }}">
        <link rel="alternate icon" href="{{ asset('logo.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

        
      </head>
      
      <body class="flex flex-col min-h-screen">
        <div>
          <nav class="bg-gray-900 shadow-md fixed top-0 left-0 w-full flex items-center justify-between px-6 py-3 z-20">
            <button id="menu-toggle" class="text-gray-300 text-2xl focus:outline-none">
              ☰
            </button>
  
            <h1 class="text-nav ">FrontEnd Developer Test</h1>
  
            <img src="/logo.svg" alt="Logo" class="w-10 h-10">
          </nav>
  
          <aside id="sidebar" class="fixed top-0 left-0 w-64 h-screen bg-gray-800 text-white flex flex-col transform -translate-x-full transition-transform duration-300 ease-in-out z-30">
            <nav class="flex-1 p-4 space-y-2">
              <a href="{{ route('home') }}" class="block px-4 py-2 rounded hover:bg-gray-700 border-2 border-gray-800 hover:border-2 hover:border-gray-600">Home</a>
              <a href="{{ route('product.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700 border-2 border-gray-800 hover:border-2 hover:border-gray-600">Manage Products</a>
              <a href="{{ route('add.product') }}" class="block px-4 py-2 rounded hover:bg-gray-700 border-2 border-gray-800 hover:border-2 hover:border-gray-600">Add Products</a>
            </nav>
          </aside>
  
          <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-40 z-20"></div>
        </div>

        <main class="flex-1 mt-20">
            @yield('content')

        </main>

    <script>
      const menuBtn = document.getElementById('menu-toggle');
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('overlay');
          
      menuBtn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
      });
    
      overlay.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
      });
    </script>
    </body>

    <footer class="bottom-0 left-0 w-full py-3">
        <p class="text-center text-gray-500 text-sm mt-10">© 2025 Management Product. All rights reserved.</p>
    </footer>
</html>
