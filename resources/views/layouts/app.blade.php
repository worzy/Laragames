<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Video Game App</title>

        <link rel="stylesheet" href="/css/main.css">

        <livewire:styles>

    </head>
    <body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between justify px-4 py-6">
            <div class="flex flex-col lg:flex-row items-center">
                <a href="/">
                    <img src="/logo.svg" alt="laracasts" class="w-32 flex-none">
                </a>
                <ul class="flex ml-0 lg:ml-16 space-x-8 mt-6 lg:mt-0">
                    <li><a href="#" class="hover:text-gray-400">Games</li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</li>
                    <li><a href="#" class="hover:text-gray-400">Coming Soon</li>
                </ul>
            </div>
            <div class="flex items-center mt-6 lg:mt-0">
                <div class="relative">
                    <input type="text" class="bg-gray-800 text-sm rounded-full focus:outline-none focus:shadow-outline pl-8 px-3 py-1 w-64" placeholder="Search...">
                    <div class="absolute top-0 flex items-center h-full ml-2">
                        <svg class="fill-current text-gray-400 w-4" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
                <div class="ml-6">
                    <a href="#">
                        <img src="/avatar.jpg" alt="avatar" class="rounded-full w-8">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-8">
        @yield('content')
    </main>
    <footer class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            Powered by <a target="_blank" href="https://www.igdb.com/api" class="underline hover:text-gray-800">IGDB API</a>
        </div>
    </footer>

    <livewire:scripts>

    </body>
</html>
