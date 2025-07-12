<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Titik Visual')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased">

    {{-- Navbar Putih --}}
    @include('components.navbar-biru')

    {{-- Isi Konten --}}
    <main class="bg-white">
        @yield('content')
    </main>

<!-- Footer -->
<footer class="bg-gray-900 text-white pt-16 pb-10 px-4">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">
    
    <!-- Logo & Deskripsi -->
    <div>
      <div class="flex items-center space-x-3 mb-4">
        <img src="{{ asset('images/bintang.png') }}" alt="Logo" class="w-10 h-10">
        <div>
          <div class="text-xl font-bold">Titik Visual</div>
          <div class="text-sm text-gray-400">Digital Creative Studio</div>
        </div>
      </div>
      <p class="text-gray-400 text-sm">
        Digital creative studio yang mengutamakan kualitas dan inovasi dalam setiap karya.
      </p>
    </div>

    <!-- Company -->
<div>
  <h4 class="text-lg font-semibold mb-4">Company</h4>
  <ul class="space-y-2 text-gray-400 text-sm">
    <li><a href="#" class="hover:text-green-300 transition">About Us</a></li>
    <li><a href="#" class="hover:text-green-300 transition">Portfolio</a></li>
    <li><a href="#" class="hover:text-green-300 transition">Services</a></li>
    <li><a href="#" class="hover:text-green-300 transition">Careers</a></li>
    <li><a href="#" class="hover:text-green-300 transition">Blog</a></li>
  </ul>
</div>


    <!-- Services -->
    <div>
      <h4 class="text-lg font-semibold mb-4">Services</h4>
      <ul class="space-y-2 text-gray-400 text-sm">
        <li><a href="#" class="hover:text-white">UI/UX Design</a></li>
        <li><a href="#" class="hover:text-white">Web Development</a></li>
        <li><a href="#" class="hover:text-white">Mobile App</a></li>
        <li><a href="#" class="hover:text-white">Branding</a></li>
        <li><a href="#" class="hover:text-white">Digital Marketing</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div>
      <h4 class="text-lg font-semibold mb-4">Contact</h4>
      <ul class="space-y-3 text-gray-400 text-sm">
        <li class="flex items-center gap-2">
          <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3 5h2l3.6 7.59L5.25 17H19v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12L8.1 13h7.45c.75 0 1.41-.41 1.75-1.03L21 6H5.21" />
          </svg>
          081804376001
        </li>
        <li class="flex items-center gap-2">
          <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M16 12l-4-4-4 4m8 0l-4 4-4-4" />
          </svg>
          titikvisualjogja@gmail.com
        </li>
        <li class="flex items-center gap-2">
          <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M17.657 16.657L13.414 12.414a4 4 0 10-1.414 1.414l4.243 4.243a1 1 0 001.414-1.414z" />
          </svg>
          Yogyakarta, Indonesia
        </li>
      </ul>
    </div>

  </div>

  <!-- Bottom -->
  <div class="text-center text-gray-500 text-sm mt-10 border-t border-gray-700 pt-4">
    © 2024 Titik Visual. All rights reserved.
  </div>
</footer>

</body>
</html>
