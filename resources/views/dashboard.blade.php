<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PPDB Pesat</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <script src="https://unpkg.com/alpinejs" defer></script>
  <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="bg-gray-100 text-gray-800 font-sans antialiased">

  <!-- Navbar -->
  <header x-data="{ open: false }" class="w-full bg-white shadow fixed top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
      <!-- Logo -->
      <a href="{{ url('/') }}" class="flex items-center gap-2">
        <img src="{{ asset('image.png') }}" class="h-10 w-auto" alt="Logo">
        <span class="text-xl font-semibold text-blue-700">PPDB Pesat</span>
      </a>

      <!-- Desktop Menu -->
      <nav class="hidden md:flex items-center gap-6">
        <!-- Daftar Kunjungan -->
        <div x-data="{ open: false }" class="relative">
          <button @click="open = !open" class="text-sm text-gray-700 font-medium hover:text-blue-600 transition">Daftar Kunjungan</button>
          <div x-show="open" @click.away="open = false" x-cloak class="absolute mt-2 bg-white shadow rounded w-48 z-50">
            <a href="#" class="block px-4 py-2 hover:bg-blue-50 transition">Kunjungan Gabungan</a>
            <a href="#" class="block px-4 py-2 hover:bg-blue-50 transition">Kunjungan SMK</a>
          </div>
        </div>

        <!-- Portal PPDB -->
        <div x-data="{ open: false, subOpen1: false, subOpen2: false }" class="relative">
          <button @click="open = !open" class="text-sm text-gray-700 font-medium hover:text-blue-600 transition">Portal PPDB</button>
          <div x-show="open" @click.away="open = false" x-cloak class="absolute mt-2 bg-white shadow rounded w-56 z-50">
            <a href="#" class="block px-4 py-2 hover:bg-blue-50 transition">Link Pendaftaran</a>

            <!-- Website submenu -->
            <div @mouseenter="subOpen1 = true" @mouseleave="subOpen1 = false" class="relative">
              <a href="#" class="block px-4 py-2 hover:bg-blue-50 transition">Website</a>
              <div x-show="subOpen1" x-cloak class="absolute left-full top-0 ml-1 bg-white shadow rounded w-40 z-50">
                <a href="#" class="block px-4 py-2 hover:bg-blue-100">SMP</a>
                <a href="#" class="block px-4 py-2 hover:bg-blue-100">SMA</a>
                <a href="#" class="block px-4 py-2 hover:bg-blue-100">SMK</a>
              </div>
            </div>

            <!-- Dana Investasi submenu -->
            <div @mouseenter="subOpen2 = true" @mouseleave="subOpen2 = false" class="relative">
              <a href="#" class="block px-4 py-2 hover:bg-blue-50 transition">Dana Investasi</a>
              <div x-show="subOpen2" x-cloak class="absolute left-full top-0 ml-1 bg-white shadow rounded w-40 z-50">
                <a href="#" class="block px-4 py-2 hover:bg-blue-100">SMP</a>
                <a href="#" class="block px-4 py-2 hover:bg-blue-100">SMA</a>
                <a href="#" class="block px-4 py-2 hover:bg-blue-100">SMK</a>
              </div>
            </div>

            <a href="#" class="block px-4 py-2 hover:bg-blue-50 transition">Pembayaran Pendaftaran</a>
          </div>
        </div>

        <!-- Auth Buttons -->
        <div class="flex items-center gap-3">
          <a href="{{ url('/login') }}" class="text-sm text-blue-600 hover:underline transition">Login</a>
          <a href="{{ url('/register') }}" class="px-4 py-2 text-sm text-white bg-blue-600 hover:bg-blue-700 rounded-md shadow transition">Register</a>
        </div>
      </nav>

      <!-- Mobile Hamburger -->
      <div class="md:hidden">
        <button @click="open = !open" class="text-gray-700 focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
               stroke-linecap="round" stroke-linejoin="round">
            <path x-show="!open" d="M4 6h16M4 12h16M4 18h16"/>
            <path x-show="open" x-cloak d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-cloak class="md:hidden px-4 pb-4 bg-white shadow-md space-y-2">
      <a href="#" class="block py-2 text-sm text-gray-700 hover:text-blue-600">Kunjungan Gabungan</a>
      <a href="#" class="block py-2 text-sm text-gray-700 hover:text-blue-600">Kunjungan SMK</a>
      <a href="#" class="block py-2 text-sm text-gray-700 hover:text-blue-600">Link Pendaftaran</a>

      <!-- Website -->
      <div class="pl-4">
        <p class="text-sm font-semibold mt-2 text-gray-700">Website</p>
        <a href="#" class="block py-1 text-sm text-gray-600 hover:text-blue-500">SMP</a>
        <a href="#" class="block py-1 text-sm text-gray-600 hover:text-blue-500">SMA</a>
        <a href="#" class="block py-1 text-sm text-gray-600 hover:text-blue-500">SMK</a>

        <p class="text-sm font-semibold mt-2 text-gray-700">Dana Investasi</p>
        <a href="#" class="block py-1 text-sm text-gray-600 hover:text-blue-500">SMP</a>
        <a href="#" class="block py-1 text-sm text-gray-600 hover:text-blue-500">SMA</a>
        <a href="#" class="block py-1 text-sm text-gray-600 hover:text-blue-500">SMK</a>
      </div>

      <a href="#" class="block py-2 text-sm text-gray-700 hover:text-blue-600">Pembayaran Pendaftaran</a>
      <a href="{{ url('/login') }}" class="block py-2 text-sm text-blue-600 hover:underline">Login</a>
      <a href="{{ url('/register') }}" class="block py-2 bg-blue-600 text-white text-sm text-center rounded-md hover:bg-blue-700 transition">Register</a>
    </div>
  </header>

  <!-- Main Content -->
  <main class="pt-36 px-4 min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-100 flex flex-col items-center justify-center text-center">
    <h1 class="text-4xl md:text-5xl font-extrabold text-blue-700 mb-4">Selamat Datang di PPDB Pesat</h1>
    <p class="text-lg md:text-xl text-gray-700 mb-6">Sistem Pendaftaran Peserta Didik Baru secara online.</p>
    <a href="{{ url('/login') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md text-base transition">Mulai Sekarang</a>
  </main>

</body>
</html>
