@extends('layouts.apu')

@section('title', 'Titik Visual – Digital Creative Studio')

@section('content')
<section class="bg-gradient-to-b from-white via-teal-50 to-green-50 py-24 text-center px-4">
  <div class="max-w-3xl mx-auto">
    <h2 class="text-4xl md:text-5xl font-bold text-blue-700 mb-4">Portfolio Kami</h2>
    <p class="text-gray-600 text-lg md:text-xl leading-relaxed mb-8">
      Jelajahi koleksi karya terbaik kami dalam UI/UX Design, Web Development, Mobile App, dan Digital Marketing
      yang telah membantu klien mencapai tujuan bisnis mereka.
    </p>

    <div class="flex justify-center gap-4 flex-wrap">
      <!-- Tombol Lihat Semua Karya -->
      <a href="#semua-karya" class="inline-flex items-center gap-2 px-5 py-3 bg-gradient-to-r from-purple-500 to-cyan-400 text-white rounded-lg shadow-md hover:opacity-90 transition">
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.73047 8.80729C1.73047 8.80729 3.73047 4.14062 8.39714 4.14062C13.0638 4.14062 15.0638 8.80729 15.0638 8.80729C15.0638 8.80729 13.0638 13.474 8.39714 13.474C3.73047 13.474 1.73047 8.80729 1.73047 8.80729Z" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M8.39844 10.8047C9.50301 10.8047 10.3984 9.90926 10.3984 8.80469C10.3984 7.70012 9.50301 6.80469 8.39844 6.80469C7.29387 6.80469 6.39844 7.70012 6.39844 8.80469C6.39844 9.90926 7.29387 10.8047 8.39844 10.8047Z" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
        Lihat Semua Karya
      </a>

      <!-- Tombol Diskusi Proyek -->
      <a href="#diskusi-proyek" class="inline-flex items-center gap-2 px-5 py-3 border border-purple-400 text-purple-600 bg-white rounded-lg hover:bg-purple-50 transition">
        <svg width="25" height="17" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_245_4065)">
          <path d="M10.5977 2.80469H14.5977V6.80469" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M7.26562 10.138L14.599 2.80469" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M12.5977 9.47135V13.4714C12.5977 13.825 12.4572 14.1641 12.2071 14.4142C11.9571 14.6642 11.6179 14.8047 11.2643 14.8047H3.93099C3.57737 14.8047 3.23823 14.6642 2.98818 14.4142C2.73813 14.1641 2.59766 13.825 2.59766 13.4714V6.13802C2.59766 5.7844 2.73813 5.44526 2.98818 5.19521C3.23823 4.94516 3.57737 4.80469 3.93099 4.80469H7.93099" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <defs>
            <clipPath id="clip0_245_4065">
            <rect width="16" height="16" fill="white" transform="translate(0.597656 0.804688)"/>
            </clipPath>
            </defs>
        </svg>
        Diskusi Proyek
      </a>
    </div>
  </div>
</section>

<!-- featured project -->
<section class="py-24 bg-white text-center px-4">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-4xl font-bold text-purple-700 mb-2">Featured Projects</h2>
    <p class="text-gray-600 mb-12">Karya-karya unggulan yang menjadi kebanggaan kami</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Card 1 -->
<div class="group bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all border">
  <!-- Gambar + Efek Hover -->
  <div class="relative overflow-hidden h-48">
    <img src="{{ asset('images/visual.png') }}"
         alt="Project 1"
         class="w-full h-full object-cover transform transition duration-500 ease-in-out group-hover:scale-110 group-hover:blur-sm group-hover:brightness-75" />

    <!-- Overlay blur & darken -->
    <div class="absolute inset-0 bg-gray-800/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

    <!-- Ikon Play hanya muncul saat hover -->
    <div class="absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition duration-300 z-10">
      <button class="bg-white p-2 rounded-full shadow text-gray-800 hover:bg-gray-100 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z" />
        </svg>
      </button>
    </div>

    <!-- Label Featured -->
    <span class="absolute top-2 left-2 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">
      Featured
    </span>
  </div>

  <!-- Konten -->
  <div class="p-4 text-left">
    <span class="inline-block text-xs font-semibold text-purple-700 bg-purple-100 px-3 py-1 rounded-full mb-3">UI/UX Design</span>
    <div class="flex justify-between items-center">
      <h3 class="font-bold text-lg text-gray-800">E-Commerce Mobile App</h3>
      <span class="text-sm text-gray-500">2024</span>
    </div>
    <p class="text-sm text-gray-600 mt-2">Desain platform e-commerce dengan UX optimal dan conversion tinggi.</p>
    <div class="flex flex-wrap gap-2 mt-3">
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Mobile</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">E-commerce</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">iOS</span>
    </div>
    <div class="mt-4 text-sm text-gray-500 flex items-center justify-between">
  <div>
    Client: <span class="font-medium">ShopNow Indonesia</span>
  </div>
  <a href="#" class="text-purple-500 ml-2">
    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.2539 2H14.2539V6" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6.92188 9.33333L14.2552 2" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M12.2539 8.66667V12.6667C12.2539 13.0203 12.1134 13.3594 11.8634 13.6095C11.6133 13.8595 11.2742 14 10.9206 14H3.58724C3.23362 14 2.89448 13.8595 2.64443 13.6095C2.39438 13.3594 2.25391 13.0203 2.25391 12.6667V5.33333C2.25391 4.97971 2.39438 4.64057 2.64443 4.39052C2.89448 4.14048 3.23362 4 3.58724 4H7.58724" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>
</div>
  </div>
</div>

      <!-- Card 2 -->
<div class="group bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all border">
  <!-- Gambar + Efek Hover -->
  <div class="relative overflow-hidden h-48">
    <img src="{{ asset('images/visual.png') }}"
         alt="Project 1"
         class="w-full h-full object-cover transform transition duration-500 ease-in-out group-hover:scale-110 group-hover:blur-sm group-hover:brightness-75" />

    <!-- Overlay blur & darken -->
    <div class="absolute inset-0 bg-gray-800/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

    <!-- Ikon Play hanya muncul saat hover -->
    <div class="absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition duration-300 z-10">
      <button class="bg-white p-2 rounded-full shadow text-gray-800 hover:bg-gray-100 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z" />
        </svg>
      </button>
    </div>

    <!-- Label Featured -->
    <span class="absolute top-2 left-2 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">
      Featured
    </span>
  </div>

  <!-- Konten -->
  <div class="p-4 text-left">
    <span class="inline-block text-xs font-semibold text-purple-700 bg-purple-100 px-3 py-1 rounded-full mb-3">UI/UX Design</span>
    <div class="flex justify-between items-center">
      <h3 class="font-bold text-lg text-gray-800">saaS Dashboard Desain</h3>
      <span class="text-sm text-gray-500">2024</span>
    </div>
    <p class="text-sm text-gray-600 mt-2">Dashboard design untuk SaaS platform dengan data visualization yang clear dan user-friendly interface</p>
    <div class="flex flex-wrap gap-2 mt-3">
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Web App</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Dashboard</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">saaS</span>
    </div>
    <div class="mt-4 text-sm text-gray-500 flex items-center justify-between">
  <div>
    Client: <span class="font-medium">DataFlow Solutions</span>
  </div>
  <a href="#" class="text-purple-500 ml-2">
    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.2539 2H14.2539V6" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6.92188 9.33333L14.2552 2" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M12.2539 8.66667V12.6667C12.2539 13.0203 12.1134 13.3594 11.8634 13.6095C11.6133 13.8595 11.2742 14 10.9206 14H3.58724C3.23362 14 2.89448 13.8595 2.64443 13.6095C2.39438 13.3594 2.25391 13.0203 2.25391 12.6667V5.33333C2.25391 4.97971 2.39438 4.64057 2.64443 4.39052C2.89448 4.14048 3.23362 4 3.58724 4H7.58724" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>
</div>
  </div>
</div>

      <!-- Card 3 -->
<div class="group bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all border">
  <!-- Gambar + Efek Hover -->
  <div class="relative overflow-hidden h-48">
    <img src="{{ asset('images/visual.png') }}"
         alt="Project 1"
         class="w-full h-full object-cover transform transition duration-500 ease-in-out group-hover:scale-110 group-hover:blur-sm group-hover:brightness-75" />

    <!-- Overlay blur & darken -->
    <div class="absolute inset-0 bg-gray-800/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

    <!-- Ikon Play hanya muncul saat hover -->
    <div class="absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition duration-300 z-10">
      <button class="bg-white p-2 rounded-full shadow text-gray-800 hover:bg-gray-100 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z" />
        </svg>
      </button>
    </div>

    <!-- Label Featured -->
    <span class="absolute top-2 left-2 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">
      Featured
    </span>
  </div>

  <!-- Konten -->
  <div class="p-4 text-left">
    <span class="inline-block text-xs font-semibold text-purple-700 bg-purple-100 px-3 py-1 rounded-full mb-3">Mobile App</span>
    <div class="flex justify-between items-center">
      <h3 class="font-bold text-lg text-gray-800">Banking Mobile App</h3>
      <span class="text-sm text-gray-500">2023</span>
    </div>
    <p class="text-sm text-gray-600 mt-2">Secure dan user-friendly banking app dengan modern interface dan advanced security features</p>
    <div class="flex flex-wrap gap-2 mt-3">
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Mobile App</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Banking</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Security</span>
    </div>
    <div class="mt-4 text-sm text-gray-500 flex items-center justify-between">
  <div>
    Client: <span class="font-medium"> SecureBank Digital</span>
  </div>
  <a href="#" class="text-purple-500 ml-2">
    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.2539 2H14.2539V6" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6.92188 9.33333L14.2552 2" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M12.2539 8.66667V12.6667C12.2539 13.0203 12.1134 13.3594 11.8634 13.6095C11.6133 13.8595 11.2742 14 10.9206 14H3.58724C3.23362 14 2.89448 13.8595 2.64443 13.6095C2.39438 13.3594 2.25391 13.0203 2.25391 12.6667V5.33333C2.25391 4.97971 2.39438 4.64057 2.64443 4.39052C2.89448 4.14048 3.23362 4 3.58724 4H7.58724" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>
</div>
  </div>
</div>

      <!-- Card 4 -->
<div class="group bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all border">
  <!-- Gambar + Efek Hover -->
  <div class="relative overflow-hidden h-48">
    <img src="{{ asset('images/visual.png') }}"
         alt="Project 1"
         class="w-full h-full object-cover transform transition duration-500 ease-in-out group-hover:scale-110 group-hover:blur-sm group-hover:brightness-75" />

    <!-- Overlay blur & darken -->
    <div class="absolute inset-0 bg-gray-800/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

    <!-- Ikon Play hanya muncul saat hover -->
    <div class="absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition duration-300 z-10">
      <button class="bg-white p-2 rounded-full shadow text-gray-800 hover:bg-gray-100 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z" />
        </svg>
      </button>
    </div>

    <!-- Label Featured -->
    <span class="absolute top-2 left-2 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">
      Featured
    </span>
  </div>

  <!-- Konten -->
  <div class="p-4 text-left">
    <span class="inline-block text-xs font-semibold text-purple-700 bg-purple-100 px-3 py-1 rounded-full mb-3">UI/UX Design</span>
    <div class="flex justify-between items-center">
      <h3 class="font-bold text-lg text-gray-800">E-Commerce Mobile App</h3>
      <span class="text-sm text-gray-500">2024</span>
    </div>
    <p class="text-sm text-gray-600 mt-2">Desain platform e-commerce dengan UX optimal dan conversion tinggi.</p>
    <div class="flex flex-wrap gap-2 mt-3">
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Mobile</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">E-commerce</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">iOS</span>
    </div>
    <div class="mt-4 text-sm text-gray-500 flex items-center justify-between">
  <div>
    Client: <span class="font-medium">ShopNow Indonesia</span>
  </div>
  <a href="#" class="text-purple-500 ml-2">
    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.2539 2H14.2539V6" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6.92188 9.33333L14.2552 2" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M12.2539 8.66667V12.6667C12.2539 13.0203 12.1134 13.3594 11.8634 13.6095C11.6133 13.8595 11.2742 14 10.9206 14H3.58724C3.23362 14 2.89448 13.8595 2.64443 13.6095C2.39438 13.3594 2.25391 13.0203 2.25391 12.6667V5.33333C2.25391 4.97971 2.39438 4.64057 2.64443 4.39052C2.89448 4.14048 3.23362 4 3.58724 4H7.58724" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>
</div>
  </div>
</div>

<!-- Card 5 -->
<div class="group bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all border">
  <!-- Gambar + Efek Hover -->
  <div class="relative overflow-hidden h-48">
    <img src="{{ asset('images/visual.png') }}"
         alt="Project 1"
         class="w-full h-full object-cover transform transition duration-500 ease-in-out group-hover:scale-110 group-hover:blur-sm group-hover:brightness-75" />

    <!-- Overlay blur & darken -->
    <div class="absolute inset-0 bg-gray-800/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

    <!-- Ikon Play hanya muncul saat hover -->
    <div class="absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition duration-300 z-10">
      <button class="bg-white p-2 rounded-full shadow text-gray-800 hover:bg-gray-100 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z" />
        </svg>
      </button>
    </div>

    <!-- Label Featured -->
    <span class="absolute top-2 left-2 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">
      Featured
    </span>
  </div>

  <!-- Konten -->
  <div class="p-4 text-left">
    <span class="inline-block text-xs font-semibold text-purple-700 bg-purple-100 px-3 py-1 rounded-full mb-3">UI/UX Design</span>
    <div class="flex justify-between items-center">
      <h3 class="font-bold text-lg text-gray-800">SaaS Dashboard Desain</h3>
      <span class="text-sm text-gray-500">2024</span>
    </div>
    <p class="text-sm text-gray-600 mt-2">Dashboard design untuk SaaS platform dengan data visualization yang clear dan user-friendly interface</p>
    <div class="flex flex-wrap gap-2 mt-3">
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Web app</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Dashboard</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">saaS</span>
    </div>
    <div class="mt-4 text-sm text-gray-500 flex items-center justify-between">
  <div>
    Client: <span class="font-medium">DataFlow Solutions</span>
  </div>
  <a href="#" class="text-purple-500 ml-2">
    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.2539 2H14.2539V6" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6.92188 9.33333L14.2552 2" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M12.2539 8.66667V12.6667C12.2539 13.0203 12.1134 13.3594 11.8634 13.6095C11.6133 13.8595 11.2742 14 10.9206 14H3.58724C3.23362 14 2.89448 13.8595 2.64443 13.6095C2.39438 13.3594 2.25391 13.0203 2.25391 12.6667V5.33333C2.25391 4.97971 2.39438 4.64057 2.64443 4.39052C2.89448 4.14048 3.23362 4 3.58724 4H7.58724" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>
</div>
  </div>
</div>

<!-- Card 6 -->
<div class="group bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all border">
  <!-- Gambar + Efek Hover -->
  <div class="relative overflow-hidden h-48">
    <img src="{{ asset('images/visual.png') }}"
         alt="Project 1"
         class="w-full h-full object-cover transform transition duration-500 ease-in-out group-hover:scale-110 group-hover:blur-sm group-hover:brightness-75" />

    <!-- Overlay blur & darken -->
    <div class="absolute inset-0 bg-gray-800/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

    <!-- Ikon Play hanya muncul saat hover -->
    <div class="absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition duration-300 z-10">
      <button class="bg-white p-2 rounded-full shadow text-gray-800 hover:bg-gray-100 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Konten -->
  <div class="p-4 text-left">
    <span class="inline-block text-xs font-semibold text-purple-700 bg-purple-100 px-3 py-1 rounded-full mb-3">Web Development</span>
    <div class="flex justify-between items-center">
      <h3 class="font-bold text-lg text-gray-800">Corporate Website</h3>
      <span class="text-sm text-gray-500">2024</span>
    </div>
    <p class="text-sm text-gray-600 mt-2">Website Corporate yang modern dan profesional dengan CMS integration untuk easy content management</p>
    <div class="flex flex-wrap gap-2 mt-3">
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Website</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Corporate</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Responsive</span>
    </div>
    <div class="mt-4 text-sm text-gray-500 flex items-center justify-between">
  <div>
    Client: <span class="font-medium">PT. Maju Bersama</span>
  </div>
  <a href="#" class="text-purple-500 ml-2">
    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.2539 2H14.2539V6" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6.92188 9.33333L14.2552 2" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M12.2539 8.66667V12.6667C12.2539 13.0203 12.1134 13.3594 11.8634 13.6095C11.6133 13.8595 11.2742 14 10.9206 14H3.58724C3.23362 14 2.89448 13.8595 2.64443 13.6095C2.39438 13.3594 2.25391 13.0203 2.25391 12.6667V5.33333C2.25391 4.97971 2.39438 4.64057 2.64443 4.39052C2.89448 4.14048 3.23362 4 3.58724 4H7.58724" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>
</div>
  </div>
</div>

<!-- Card 7 -->
<div class="group bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all border">
  <!-- Gambar + Efek Hover -->
  <div class="relative overflow-hidden h-48">
    <img src="{{ asset('images/visual.png') }}"
         alt="Project 1"
         class="w-full h-full object-cover transform transition duration-500 ease-in-out group-hover:scale-110 group-hover:blur-sm group-hover:brightness-75" />

    <!-- Overlay blur & darken -->
    <div class="absolute inset-0 bg-gray-800/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

    <!-- Ikon Play hanya muncul saat hover -->
    <div class="absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition duration-300 z-10">
      <button class="bg-white p-2 rounded-full shadow text-gray-800 hover:bg-gray-100 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z" />
        </svg>
      </button>
    </div>

    <!-- Label Featured -->
    <span class="absolute top-2 left-2 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">
      Featured
    </span>
  </div>

  <!-- Konten -->
  <div class="p-4 text-left">
    <span class="inline-block text-xs font-semibold text-purple-700 bg-purple-100 px-3 py-1 rounded-full mb-3">Mobile App</span>
    <div class="flex justify-between items-center">
      <h3 class="font-bold text-lg text-gray-800">Banking Mobile App</h3>
      <span class="text-sm text-gray-500">2023</span>
    </div>
    <p class="text-sm text-gray-600 mt-2">Secure dan User-frendly banking app dengan modern interface dan advanced security features</p>
    <div class="flex flex-wrap gap-2 mt-3">
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Mobile App</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Banking</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Security</span>
    </div>
    <div class="mt-4 text-sm text-gray-500 flex items-center justify-between">
  <div>
    Client: <span class="font-medium">SecureBank Digital</span>
  </div>
  <a href="#" class="text-purple-500 ml-2">
    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.2539 2H14.2539V6" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6.92188 9.33333L14.2552 2" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M12.2539 8.66667V12.6667C12.2539 13.0203 12.1134 13.3594 11.8634 13.6095C11.6133 13.8595 11.2742 14 10.9206 14H3.58724C3.23362 14 2.89448 13.8595 2.64443 13.6095C2.39438 13.3594 2.25391 13.0203 2.25391 12.6667V5.33333C2.25391 4.97971 2.39438 4.64057 2.64443 4.39052C2.89448 4.14048 3.23362 4 3.58724 4H7.58724" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>
</div>
  </div>
</div>

<!-- Card 8 -->
<div class="group bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all border">
  <!-- Gambar + Efek Hover -->
  <div class="relative overflow-hidden h-48">
    <img src="{{ asset('images/visual.png') }}"
         alt="Project 1"
         class="w-full h-full object-cover transform transition duration-500 ease-in-out group-hover:scale-110 group-hover:blur-sm group-hover:brightness-75" />

    <!-- Overlay blur & darken -->
    <div class="absolute inset-0 bg-gray-800/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

    <!-- Ikon Play hanya muncul saat hover -->
    <div class="absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition duration-300 z-10">
      <button class="bg-white p-2 rounded-full shadow text-gray-800 hover:bg-gray-100 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Konten -->
  <div class="p-4 text-left">
    <span class="inline-block text-xs font-semibold text-purple-700 bg-purple-100 px-3 py-1 rounded-full mb-3">Branding</span>
    <div class="flex justify-between items-center">
      <h3 class="font-bold text-lg text-gray-800">Brand Identity package</h3>
      <span class="text-sm text-gray-500">2024</span>
    </div>
    <p class="text-sm text-gray-600 mt-2">Complete brand Identity package termasuk logo, color pallete, typography, dan Brand Guidelines</p>
    <div class="flex flex-wrap gap-2 mt-3">
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Logo</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Brand Identity</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Guidelines</span>
    </div>
    <div class="mt-4 text-sm text-gray-500 flex items-center justify-between">
  <div>
    Client: <span class="font-medium">GrenTech Startup</span>
  </div>
  <a href="#" class="text-purple-500 ml-2">
    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.2539 2H14.2539V6" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6.92188 9.33333L14.2552 2" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M12.2539 8.66667V12.6667C12.2539 13.0203 12.1134 13.3594 11.8634 13.6095C11.6133 13.8595 11.2742 14 10.9206 14H3.58724C3.23362 14 2.89448 13.8595 2.64443 13.6095C2.39438 13.3594 2.25391 13.0203 2.25391 12.6667V5.33333C2.25391 4.97971 2.39438 4.64057 2.64443 4.39052C2.89448 4.14048 3.23362 4 3.58724 4H7.58724" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>
</div>
  </div>
</div>

<!-- Card 9 -->
<div class="group bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all border">
  <!-- Gambar + Efek Hover -->
  <div class="relative overflow-hidden h-48">
    <img src="{{ asset('images/visual.png') }}"
         alt="Project 1"
         class="w-full h-full object-cover transform transition duration-500 ease-in-out group-hover:scale-110 group-hover:blur-sm group-hover:brightness-75" />

    <!-- Overlay blur & darken -->
    <div class="absolute inset-0 bg-gray-800/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

    <!-- Ikon Play hanya muncul saat hover -->
    <div class="absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition duration-300 z-10">
      <button class="bg-white p-2 rounded-full shadow text-gray-800 hover:bg-gray-100 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Konten -->
  <div class="p-4 text-left">
    <span class="inline-block text-xs font-semibold text-purple-700 bg-purple-100 px-3 py-1 rounded-full mb-3">Social media</span>
    <div class="flex justify-between items-center">
      <h3 class="font-bold text-lg text-gray-800">Sosial media campaign</h3>
      <span class="text-sm text-gray-500">2024</span>
    </div>
    <p class="text-sm text-gray-600 mt-2">Sosial media campaign design untuk fashion brand dengan consisten visual Identity dan engaging content </p>
    <div class="flex flex-wrap gap-2 mt-3">
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Sosial media</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">campaign</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Instagram</span>
    </div>
    <div class="mt-4 text-sm text-gray-500 flex items-center justify-between">
  <div>
    Client: <span class="font-medium">Fashion Brand Co</span>
  </div>
  <a href="#" class="text-purple-500 ml-2">
    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.2539 2H14.2539V6" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6.92188 9.33333L14.2552 2" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M12.2539 8.66667V12.6667C12.2539 13.0203 12.1134 13.3594 11.8634 13.6095C11.6133 13.8595 11.2742 14 10.9206 14H3.58724C3.23362 14 2.89448 13.8595 2.64443 13.6095C2.39438 13.3594 2.25391 13.0203 2.25391 12.6667V5.33333C2.25391 4.97971 2.39438 4.64057 2.64443 4.39052C2.89448 4.14048 3.23362 4 3.58724 4H7.58724" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>
</div>
  </div>
</div>

<!-- Card 10 -->
<div class="group bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all border">
  <!-- Gambar + Efek Hover -->
  <div class="relative overflow-hidden h-48">
    <img src="{{ asset('images/visual.png') }}"
         alt="Project 1"
         class="w-full h-full object-cover transform transition duration-500 ease-in-out group-hover:scale-110 group-hover:blur-sm group-hover:brightness-75" />

    <!-- Overlay blur & darken -->
    <div class="absolute inset-0 bg-gray-800/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

    <!-- Ikon Play hanya muncul saat hover -->
    <div class="absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition duration-300 z-10">
      <button class="bg-white p-2 rounded-full shadow text-gray-800 hover:bg-gray-100 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Konten -->
  <div class="p-4 text-left">
    <span class="inline-block text-xs font-semibold text-purple-700 bg-purple-100 px-3 py-1 rounded-full mb-3">Web Development</span>
    <div class="flex justify-between items-center">
      <h3 class="font-bold text-lg text-gray-800">Restaurant Website</h3>
      <span class="text-sm text-gray-500">2023</span>
    </div>
    <p class="text-sm text-gray-600 mt-2">Website Restaurant dengan online menu, table booking system, dan gallery yang menarik</p>
    <div class="flex flex-wrap gap-2 mt-3">
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Website</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Restaurant</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Online Menu</span>
    </div>
    <div class="mt-4 text-sm text-gray-500 flex items-center justify-between">
  <div>
    Client: <span class="font-medium">Rasa Nusantara</span>
  </div>
  <a href="#" class="text-purple-500 ml-2">
    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.2539 2H14.2539V6" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6.92188 9.33333L14.2552 2" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M12.2539 8.66667V12.6667C12.2539 13.0203 12.1134 13.3594 11.8634 13.6095C11.6133 13.8595 11.2742 14 10.9206 14H3.58724C3.23362 14 2.89448 13.8595 2.64443 13.6095C2.39438 13.3594 2.25391 13.0203 2.25391 12.6667V5.33333C2.25391 4.97971 2.39438 4.64057 2.64443 4.39052C2.89448 4.14048 3.23362 4 3.58724 4H7.58724" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>
</div>
  </div>
</div>

<!-- Card 11 -->
<div class="group bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all border">
  <!-- Gambar + Efek Hover -->
  <div class="relative overflow-hidden h-48">
    <img src="{{ asset('images/visual.png') }}"
         alt="Project 1"
         class="w-full h-full object-cover transform transition duration-500 ease-in-out group-hover:scale-110 group-hover:blur-sm group-hover:brightness-75" />

    <!-- Overlay blur & darken -->
    <div class="absolute inset-0 bg-gray-800/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

    <!-- Ikon Play hanya muncul saat hover -->
    <div class="absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition duration-300 z-10">
      <button class="bg-white p-2 rounded-full shadow text-gray-800 hover:bg-gray-100 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z" />
        </svg>
      </button>
    </div>

    <!-- Label Featured -->
    <span class="absolute top-2 left-2 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">
      Featured
    </span>
  </div>

  <!-- Konten -->
  <div class="p-4 text-left">
    <span class="inline-block text-xs font-semibold text-purple-700 bg-purple-100 px-3 py-1 rounded-full mb-3">UI/UX Design</span>
    <div class="flex justify-between items-center">
      <h3 class="font-bold text-lg text-gray-800">Fitnes App UI/UX</h3>
      <span class="text-sm text-gray-500">2024</span>
    </div>
    <p class="text-sm text-gray-600 mt-2">Fitnes tracking app dengan motivational design dan comprehensive workout planning features</p>
    <div class="flex flex-wrap gap-2 mt-3">
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Mobile</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Fitnes</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Health</span>
    </div>
    <div class="mt-4 text-sm text-gray-500 flex items-center justify-between">
  <div>
    Client: <span class="font-medium">FitLive Indonesia</span>
  </div>
  <a href="#" class="text-purple-500 ml-2">
    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.2539 2H14.2539V6" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6.92188 9.33333L14.2552 2" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M12.2539 8.66667V12.6667C12.2539 13.0203 12.1134 13.3594 11.8634 13.6095C11.6133 13.8595 11.2742 14 10.9206 14H3.58724C3.23362 14 2.89448 13.8595 2.64443 13.6095C2.39438 13.3594 2.25391 13.0203 2.25391 12.6667V5.33333C2.25391 4.97971 2.39438 4.64057 2.64443 4.39052C2.89448 4.14048 3.23362 4 3.58724 4H7.58724" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>
</div>
  </div>
</div>

<!-- Card 12 -->
<div class="group bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all border">
  <!-- Gambar + Efek Hover -->
  <div class="relative overflow-hidden h-48">
    <img src="{{ asset('images/visual.png') }}"
         alt="Project 1"
         class="w-full h-full object-cover transform transition duration-500 ease-in-out group-hover:scale-110 group-hover:blur-sm group-hover:brightness-75" />

    <!-- Overlay blur & darken -->
    <div class="absolute inset-0 bg-gray-800/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

    <!-- Ikon Play hanya muncul saat hover -->
    <div class="absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition duration-300 z-10">
      <button class="bg-white p-2 rounded-full shadow text-gray-800 hover:bg-gray-100 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Konten -->
  <div class="p-4 text-left">
    <span class="inline-block text-xs font-semibold text-purple-700 bg-purple-100 px-3 py-1 rounded-full mb-3">Web Development</span>
    <div class="flex justify-between items-center">
      <h3 class="font-bold text-lg text-gray-800">E-Learning platform</h3>
      <span class="text-sm text-gray-500">2023</span>
    </div>
    <p class="text-sm text-gray-600 mt-2">E-learning platform dengan interactive course content dan comprehensive student management system</p>
    <div class="flex flex-wrap gap-2 mt-3">
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Web</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">Education</span>
      <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">LMS</span>
    </div>
    <div class="mt-4 text-sm text-gray-500 flex items-center justify-between">
  <div>
    Client: <span class="font-medium">EduTech Indonesia</span>
  </div>
  <a href="#" class="text-purple-500 ml-2">
    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.2539 2H14.2539V6" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6.92188 9.33333L14.2552 2" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M12.2539 8.66667V12.6667C12.2539 13.0203 12.1134 13.3594 11.8634 13.6095C11.6133 13.8595 11.2742 14 10.9206 14H3.58724C3.23362 14 2.89448 13.8595 2.64443 13.6095C2.39438 13.3594 2.25391 13.0203 2.25391 12.6667V5.33333C2.25391 4.97971 2.39438 4.64057 2.64443 4.39052C2.89448 4.14048 3.23362 4 3.58724 4H7.58724" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>
</div>
    </div>
  </div>
</div>

    </div>
  </div>
</section>

<!-- CTA Gradient Atas -->
<section class="bg-gradient-to-r from-purple-500 via-indigo-400 to-cyan-400 text-white text-center py-16 px-4">
  <h2 class="text-3xl font-bold mb-3">Tertarik dengan layanan kami?</h2>
  <p class="mb-6 text-lg">Mari diskusikan bagaimana kami bisa membantu mewujudkan visi digital anda </p>

  <div class="flex flex-col md:flex-row items-center justify-center gap-4">
    <!-- Tombol Mulai Diskusi -->
    <a href="#whatsapp" class="inline-flex items-center gap-2 px-6 py-2 bg-white text-purple-600 font-semibold rounded-md shadow hover:bg-purple-100 transition">
     <svg width="25" height="17" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_245_4065)">
          <path d="M10.5977 2.80469H14.5977V6.80469" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M7.26562 10.138L14.599 2.80469" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M12.5977 9.47135V13.4714C12.5977 13.825 12.4572 14.1641 12.2071 14.4142C11.9571 14.6642 11.6179 14.8047 11.2643 14.8047H3.93099C3.57737 14.8047 3.23823 14.6642 2.98818 14.4142C2.73813 14.1641 2.59766 13.825 2.59766 13.4714V6.13802C2.59766 5.7844 2.73813 5.44526 2.98818 5.19521C3.23823 4.94516 3.57737 4.80469 3.93099 4.80469H7.93099" stroke="#9333EA" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <defs>
            <clipPath id="clip0_245_4065">
            <rect width="16" height="16" fill="white" transform="translate(0.597656 0.804688)"/>
            </clipPath>
            </defs>
        </svg>
       Diskusi Proyek
    </a>

    <!-- Tombol Lihat Portofolio -->
    <a href="#portfolio" class="inline-flex items-center gap-2 px-6 py-2 border border-white text-white font-semibold rounded-md hover:bg-white hover:text-purple-600 transition">
      <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.73047 8.80729C1.73047 8.80729 3.73047 4.14062 8.39714 4.14062C13.0638 4.14062 15.0638 8.80729 15.0638 8.80729C15.0638 8.80729 13.0638 13.474 8.39714 13.474C3.73047 13.474 1.73047 8.80729 1.73047 8.80729Z" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M8.39844 10.8047C9.50301 10.8047 10.3984 9.90926 10.3984 8.80469C10.3984 7.70012 9.50301 6.80469 8.39844 6.80469C7.29387 6.80469 6.39844 7.70012 6.39844 8.80469C6.39844 9.90926 7.29387 10.8047 8.39844 10.8047Z" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Lihat Portfolio
    </a>
  </div>
</section>
@endsection
