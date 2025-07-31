<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
<body class="antialiased bg-gray-100 text-gray-800 font-sans">
    <!-- Navbar -->
    <header class="w-full bg-white shadow-md fixed top-0 left-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo Gambar -->
            <div>
                <a href="{{ url('/') }}">
                    <img src="{{ asset('image.png') }}" alt="Logo" class="h-10 w-auto ">
                </a>
            </div>

            <!-- Auth Links -->
            <div class="space-x-4">
                <a href="{{ url('/login') }}" class="text-blue-600 font-semibold hover:underline">Login</a>
                <a href="{{ url('/register') }}" class="text-white bg-blue-600 px-4 py-2 rounded hover:bg-blue-700 transition">Register</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-32 min-h-screen flex flex-col items-center justify-center text-center px-4">
        <h1 class="text-4xl font-bold text-blue-600 mb-6">Welcome to Laravel</h1>
        <p class="text-lg text-gray-600 mb-4">This is the default landing page using Tailwind CSS & Vite.</p>
    </main>
</body>
</html>
