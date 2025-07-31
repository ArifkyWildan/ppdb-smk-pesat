<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="//unpkg.com/alpinejs" defer></script>
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
            <!-- Logo -->
            <div>
                <a href="{{ url('/') }}">
                    <img src="{{ asset('image.png') }}" alt="Logo" class="h-10 w-auto">
                </a>
            </div>

            <!-- Navigation -->
            <div class="flex items-center space-x-6">
                <!-- Dropdown: Daftar Kunjungan -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="text-gray-700 font-semibold hover:text-blue-600 focus:outline-none">
                        Daftar Kunjungan
                    </button>
                    <div x-show="open" @click.away="open = false" x-cloak class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md z-50">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Kunjungan Gabungan</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Kunjungan SMK</a>
                    </div>
                </div>

                <!-- Dropdown: Portal PPDB -->
                <div x-data="{ open: false, subOpen1: false, subOpen2: false }" class="relative">
                    <button @click="open = !open" class="text-gray-700 font-semibold hover:text-blue-600 focus:outline-none">
                        Portal PPDB
                    </button>
                    <div x-show="open" @click.away="open = false" x-cloak class="absolute left-0 mt-2 w-56 bg-white shadow-lg rounded-md z-50">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Link Pendaftaran</a>

                        <!-- Submenu Website -->
                        <div @mouseenter="subOpen1 = true" @mouseleave="subOpen1 = false" class="relative">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Website</a>
                            <div x-show="subOpen1" x-cloak class="absolute left-full top-0 mt-0 w-40 bg-white shadow-lg rounded-md z-50">
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">SMP</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">SMA</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">SMK</a>
                            </div>
                        </div>

                        <!-- Submenu Dana Investasi -->
                        <div @mouseenter="subOpen2 = true" @mouseleave="subOpen2 = false" class="relative">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dana Investasi</a>
                            <div x-show="subOpen2" x-cloak class="absolute left-full top-0 mt-0 w-40 bg-white shadow-lg rounded-md z-50">
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">SMP</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">SMA</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">SMK</a>
                            </div>
                        </div>

                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Pembayaran Pendaftaran</a>
                    </div>
                </div>

                <!-- Auth Links -->
                <div class="space-x-4">
                    <a href="{{ url('/login') }}" class="text-blue-600 font-semibold hover:underline">Login</a>
                    <a href="{{ url('/register') }}" class="text-white bg-blue-600 px-4 py-2 rounded hover:bg-blue-700 transition">Register</a>
                </div>
            </div>
        </div>
    </header>

    
</body>
</html>
