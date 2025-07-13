<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Titik Visual')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
    <li><a href="#" class="hover:text-blue-400 transition">About Us</a></li>
    <li><a href="#" class="hover:text-blue-400 transition">Portfolio</a></li>
    <li><a href="#" class="hover:text-blue-400 transition">Services</a></li>
    <li><a href="#" class="hover:text-blue-400 transition">Careers</a></li>
    <li><a href="#" class="hover:text-blue-400 transition">Blog</a></li>
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
          <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.0634 11.2827V13.2827C15.0642 13.4683 15.0262 13.6521 14.9518 13.8222C14.8774 13.9924 14.7683 14.1451 14.6315 14.2706C14.4947 14.3961 14.3331 14.4917 14.1573 14.5511C13.9814 14.6106 13.795 14.6327 13.6101 14.616C11.5587 14.3931 9.5881 13.6921 7.85677 12.5693C6.24598 11.5458 4.88032 10.1801 3.85677 8.56934C2.73008 6.83014 2.02893 4.85 1.8101 2.78934C1.79344 2.60498 1.81535 2.41918 1.87443 2.24375C1.93352 2.06833 2.02848 1.90713 2.15328 1.77042C2.27807 1.6337 2.42997 1.52448 2.59929 1.44968C2.76862 1.37489 2.95166 1.33618 3.13677 1.336H5.13677C5.4603 1.33282 5.77396 1.44739 6.01927 1.65836C6.26459 1.86933 6.42482 2.1623 6.4701 2.48267C6.55451 3.12271 6.71107 3.75115 6.93677 4.356C7.02646 4.59462 7.04587 4.85395 6.9927 5.10326C6.93953 5.35257 6.81601 5.58141 6.63677 5.76267L5.7901 6.60934C6.73914 8.27837 8.12107 9.6603 9.7901 10.6093L10.6368 9.76267C10.818 9.58343 11.0469 9.4599 11.2962 9.40673C11.5455 9.35356 11.8048 9.37297 12.0434 9.46267C12.6483 9.68837 13.2767 9.84492 13.9168 9.92934C14.2406 9.97502 14.5364 10.1381 14.7478 10.3877C14.9592 10.6372 15.0715 10.9557 15.0634 11.2827Z" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          081804376001
        </li>
        <li class="flex items-center gap-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
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
