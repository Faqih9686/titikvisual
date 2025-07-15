@extends('layouts.apu')

@section('title', 'Website & Aplikasi Professional - Titik Visual')

@section('content')

<!-- Breadcrumb di atas section -->
<div class="bg-white border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 py-4">
    <nav class="text-sm text-gray-500">
      <ol class="flex space-x-2">
        <li><a href="#" class="hover:underline">Home</a></li>
        <li>/</li>
        <li><a href="#" class="hover:underline">Services</a></li>
        <li>/</li>
        <li class="text-purple-600 font-semibold">Website & Aplikasi Professional</li>
      </ol>
    </nav>
  </div>
</div>


<!-- Konten -->
<section class="bg-gradient-to-b from-white to-teal-50 min-h-screen px-4 py-12">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">

    <!-- Kiri: Konten -->
    <div>
      <!-- Tag -->
      <span   class="transition duration-75 ease-in-out hover:opacity-20 hover:duration-75 text-xs px-3 py-1 bg-purple-100 text-purple-600 rounded-full font-semibold inline-flex items-center gap-1 mb-3 cursor-pointer"
>
  <!-- Ikon SVG -->
  <svg width="20" height="20" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
       <path d="M12.3984 22C17.9213 22 22.3984 17.5228 22.3984 12C22.3984 6.47715 17.9213 2 12.3984 2C6.87559 2 2.39844 6.47715 2.39844 12C2.39844 17.5228 6.87559 22 12.3984 22Z" stroke="#1E40AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
       <path d="M12.3984 2C9.83067 4.69615 8.39844 8.27674 8.39844 12C8.39844 15.7233 9.83067 19.3038 12.3984 22C14.9662 19.3038 16.3984 15.7233 16.3984 12C16.3984 8.27674 14.9662 4.69615 12.3984 2Z" stroke="#1E40AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
       <path d="M2.39844 12H22.3984" stroke="#1E40AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
 </svg>
          Website & Aplikasi Development
      </span>


      <!-- Judul -->
      <h1 class="text-4xl font-bold leading-snug mb-3">
        <span class="text-purple-600">Website & Aplikasi Professional</span> <br>
        yang Converd
      </h1>

      <!-- Deskripsi -->
      <p class="text-gray-600 text-base mb-6 max-w-xl">
        Bangun presence online yang kuat dengan website responsif, cepat, dan SEO-friendly. Dari landing page high-converting hingga e-commerce platform lengkap, kami ciptakan website yang mendorong pertumbuhan
        bisnis Anda. Selain itu, kami juga mengembangkan aplikasi mobile yang inovatif dan user-friendly.
      </p>

      <!-- Tombol CTA -->
<div class="flex space-x-4">
  <!-- Tombol Konsultasi Gratis -->
  <a href="#" class="inline-flex items-center gap-2 px-5 py-2.5 
  bg-gradient-to-r from-purple-600 to-cyan-400 
  text-white text-sm font-semibold rounded-lg shadow 
  hover:brightness-110 transition">
    <!-- Ikon Chat -->
    <svg width="16" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0_332_2025)">
        <path d="M5.6638 14.1276C6.93619 14.7803 8.39986 14.9571 9.79106 14.6262C11.1823 14.2952 12.4095 13.4782 13.2516 12.3224C14.0938 11.1667 14.4954 9.74811 14.3842 8.32241C14.273 6.89671 13.6562 5.55762 12.645 4.54643C11.6338 3.53525 10.2947 2.91847 8.86903 2.80725C7.44333 2.69602 6.02478 3.09767 4.86902 3.9398C3.71325 4.78193 2.89626 6.00918 2.56528 7.40038C2.2343 8.79158 2.4111 10.2553 3.0638 11.5276L1.73047 15.461L5.6638 14.1276Z" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      </g>
      <defs>
        <clipPath id="clip0_332_2025">
          <rect width="16" height="16" fill="white" transform="translate(0.398438 0.796875)"/>
        </clipPath>
      </defs>
    </svg>
    Konsultasi Gratis
  </a>

<!-- Tombol Lihat Portfolio -->
<a href="#portfolio"
  class="inline-flex items-center gap-2 px-6 py-2 
         border border-blue-600 
         text-blue-500 
         font-semibold 
         rounded-md 
         hover:bg-blue-600 
         hover:text-white 
         transition duration-150 ease-in-out">

  <!-- Ikon Mata -->
  <svg class="w-5 h-5 text-blue-500 hover:text-white transition duration-150" 
       fill="none" stroke="currentColor" stroke-width="2" 
       viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round"
          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
    <path stroke-linecap="round" stroke-linejoin="round"
          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 
             9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
  </svg>

  Lihat Portfolio
</a>
</div>
    </div>

    <!-- Kanan: Gambar -->
    <div class="relative">
      <div class="rounded-xl shadow-xl overflow-hidden p-4 bg-white">
        <img src="{{ asset('images/web.png') }}" alt="UI/UX Illustration" class="w-full h-auto object-contain rounded-md">
      </div>
      <!-- Lingkaran Gradient -->
      <div class="absolute -top-4 -right-4 w-8 h-8 rounded-full bg-gradient-to-br from-pink-400 to-yellow-400 shadow-md"></div>
    </div>

  </div>
</section>


<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <!-- Judul -->
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-indigo-600">Mengapa Memilih Website Kami ?</h2>
      <p class="text-gray-600 mt-2">Website yang kami buat tidak hanya cantik, Tapi juga powerfull dan result-oriented</p>
    </div>

    <!-- Box Penawaran -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-20">
      <!-- Item 1 -->
<div class="border rounded-xl p-6 transform hover:scale-105 hover:shadow-lg transition duration-300">
  <!-- Bungkus ikon dengan flex center -->
  <div class="flex justify-center mb-4">
    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.3984 3.60156H4.39844C3.29387 3.60156 2.39844 4.49699 2.39844 5.60156V15.6016C2.39844 16.7061 3.29387 17.6016 4.39844 17.6016H20.3984C21.503 17.6016 22.3984 16.7061 22.3984 15.6016V5.60156C22.3984 4.49699 21.503 3.60156 20.3984 3.60156Z" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M8.39844 21.6016H16.3984" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M12.3984 17.6016V21.6016" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
  </div>
  <h4 class="font-semibold mb-2">User Research & Analysis</h4>
  <p class="text-sm text-gray-500">Riset mendalam tentang target user dan behavior analysis</p>
</div>

      <!-- Item 2 -->
      <div class="border rounded-xl p-6 transform hover:scale-105 hover:shadow-lg transition duration-300">
       <div class="flex justify-center mb-4">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.3984 19.6016C15.8167 19.6016 19.3984 16.0198 19.3984 11.6016C19.3984 7.18328 15.8167 3.60156 11.3984 3.60156C6.98016 3.60156 3.39844 7.18328 3.39844 11.6016C3.39844 16.0198 6.98016 19.6016 11.3984 19.6016Z" stroke="#2563EB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21.3977 21.6047L17.0977 17.3047" stroke="#2563EB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h4 class="font-semibold mb-2">Wireframing & Prototyping</h4>
        <p class="text-sm text-gray-500">Pembuatan wireframe dan prototype interaktif</p>
      </div>

      <!-- Item 3 -->
      <div class="border rounded-xl p-6 transform hover:scale-105 hover:shadow-lg transition duration-300">
        <div class="flex justify-center mb-4">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.39794 14.6042C4.20871 14.6048 4.02317 14.5518 3.86289 14.4511C3.70262 14.3505 3.57418 14.2065 3.49249 14.0358C3.41081 13.8651 3.37923 13.6748 3.40144 13.4868C3.42365 13.2989 3.49872 13.1211 3.61794 12.9742L13.5179 2.77417C13.5922 2.68845 13.6934 2.63052 13.8049 2.6099C13.9164 2.58928 14.0317 2.60718 14.1317 2.66067C14.2317 2.71416 14.3105 2.80006 14.3553 2.90427C14.4 3.00849 14.408 3.12482 14.3779 3.23417L12.4579 9.25417C12.4013 9.40569 12.3823 9.56869 12.4025 9.72917C12.4228 9.88966 12.4816 10.0428 12.574 10.1756C12.6665 10.3083 12.7897 10.4167 12.9332 10.4913C13.0767 10.566 13.2362 10.6047 13.3979 10.6042H20.3979C20.5872 10.6035 20.7727 10.6566 20.933 10.7572C21.0933 10.8578 21.2217 11.0018 21.3034 11.1725C21.3851 11.3432 21.4166 11.5336 21.3944 11.7215C21.3722 11.9094 21.2972 12.0872 21.1779 12.2342L11.2779 22.4342C11.2037 22.5199 11.1025 22.5778 10.991 22.5984C10.8794 22.6191 10.7642 22.6012 10.6642 22.5477C10.5642 22.4942 10.4854 22.4083 10.4406 22.3041C10.3959 22.1998 10.3879 22.0835 10.4179 21.9742L12.3379 15.9542C12.3946 15.8026 12.4136 15.6396 12.3934 15.4792C12.3731 15.3187 12.3143 15.1655 12.2219 15.0327C12.1294 14.9 12.0062 14.7917 11.8627 14.717C11.7192 14.6424 11.5597 14.6036 11.3979 14.6042H4.39794Z" stroke="#2563EB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h4 class="font-semibold mb-2">Visual Design System</h4>
        <p class="text-sm text-gray-500">Design system yang konsisten dan scalable</p>
      </div>

      <!-- Item 4 -->
      <div class="border rounded-xl p-6 transform hover:scale-105 hover:shadow-lg transition duration-300">
        <div class="flex justify-center mb-4">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.3984 13.602C20.3984 18.602 16.8984 21.102 12.7384 22.552C12.5206 22.6258 12.284 22.6223 12.0684 22.542C7.89844 21.102 4.39844 18.602 4.39844 13.602V6.60201C4.39844 6.3368 4.50379 6.08244 4.69133 5.89491C4.87887 5.70737 5.13322 5.60201 5.39844 5.60201C7.39844 5.60201 9.89844 4.40201 11.6384 2.88201C11.8503 2.70101 12.1198 2.60156 12.3984 2.60156C12.6771 2.60156 12.9466 2.70101 13.1584 2.88201C14.9084 4.41201 17.3984 5.60201 19.3984 5.60201C19.6637 5.60201 19.918 5.70737 20.1055 5.89491C20.2931 6.08244 20.3984 6.3368 20.3984 6.60201V13.602Z" stroke="#2563EB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h4 class="font-semibold mb-2">Usability Testing</h4>
        <p class="text-sm text-gray-500">Testing dengan real users untuk optimal experience</p>
      </div>
    </div>
  </div>
</section>

<!-- teknologi yang kami gunakkan -->
<section class="bg-gray-50 py-16 px-4">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-blue-600 mb-2">
      Teknologi yang Kami Gunakan untuk Website & Aplikasi
    </h2>
    <p class="text-gray-600 mb-12 text-sm md:text-base">
      Platform dan teknologi terdepan untuk hasil yang optimal
    </p>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 md:gap-8">

      <!-- React/Next.js -->
      <div class="bg-white shadow-sm rounded-xl p-6 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-blue-50 mb-3 text-[#444fe8d7]">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.3984 18.2031L22.3984 12.2031L16.3984 6.20312" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8.39844 6.20312L2.39844 12.2031L8.39844 18.2031" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="text-sm font-medium text-gray-700">React/Next.js</div>
      </div>

      <!-- Vue/Nuxt.js -->
      <div class="bg-white shadow-sm rounded-xl p-6 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-green-50 mb-3 text-[#189b18f1]">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.3984 18.2031L22.3984 12.2031L16.3984 6.20312" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8.39844 6.20312L2.39844 12.2031L8.39844 18.2031" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="text-sm font-medium text-gray-700">Vue.js/Nuxt.js</div>
      </div>

      <!-- Angular -->
      <div class="bg-white shadow-sm rounded-xl p-6 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-red-50 mb-3 text-[#7d1c33f1]">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.3984 18.2031L22.3984 12.2031L16.3984 6.20312" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8.39844 6.20312L2.39844 12.2031L8.39844 18.2031" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="text-sm font-medium text-gray-700">Angular</div>
      </div>

      <!-- WordPress -->
      <div class="bg-white shadow-sm rounded-xl p-6 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-indigo-50 mb-3">
          <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.3984 22C17.9213 22 22.3984 17.5228 22.3984 12C22.3984 6.47715 17.9213 2 12.3984 2C6.87559 2 2.39844 6.47715 2.39844 12C2.39844 17.5228 6.87559 22 12.3984 22Z" stroke="#1E40AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12.3984 2C9.83067 4.69615 8.39844 8.27674 8.39844 12C8.39844 15.7233 9.83067 19.3038 12.3984 22C14.9662 19.3038 16.3984 15.7233 16.3984 12C16.3984 8.27674 14.9662 4.69615 12.3984 2Z" stroke="#1E40AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M2.39844 12H22.3984" stroke="#1E40AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="text-sm font-medium text-gray-700">WordPress</div>
      </div>

      <!-- Laravel -->
      <div class="bg-white shadow-sm rounded-xl p-6 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-rose-100 mb-3 text-[#7d1c33f1]">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.3984 18.2031L22.3984 12.2031L16.3984 6.20312" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8.39844 6.20312L2.39844 12.2031L8.39844 18.2031" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="text-sm font-medium text-gray-700">Laravel/PHP</div>
      </div>

      <!-- Node.js -->
      <div class="bg-white shadow-sm rounded-xl p-6 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-green-100 mb-3 text-[#10B981]">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.3984 18.2031L22.3984 12.2031L16.3984 6.20312" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8.39844 6.20312L2.39844 12.2031L8.39844 18.2031" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="text-sm font-medium text-gray-700">Node.js</div>
      </div>

      <!-- Python/Django -->
      <div class="bg-white shadow-sm rounded-xl p-6 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-blue-100 mb-3 text-[#3a61e3ee]">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.3984 18.2031L22.3984 12.2031L16.3984 6.20312" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8.39844 6.20312L2.39844 12.2031L8.39844 18.2031" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="text-sm font-medium text-gray-700">Python/Django</div>
      </div>

      <!-- Shopify -->
<div class="bg-white shadow-sm rounded-xl p-6 flex flex-col items-center text-center hover:shadow-md transition">
  <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-orange-100 mb-3 text-orange-500">
    <svg width="17" height="23" viewBox="0 0 17 23" fill="none" xmlns="http://www.w3.org/2000/svg"
         class="w-6 h-6">
      <path d="M13.3984 1.20312H3.39844C2.29387 1.20312 1.39844 2.09856 1.39844 3.20312V19.2031C1.39844 20.3077 2.29387 21.2031 3.39844 21.2031H13.3984C14.503 21.2031 15.3984 20.3077 15.3984 19.2031V3.20312C15.3984 2.09856 14.503 1.20312 13.3984 1.20312Z"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </div>
  <div class="text-sm font-medium text-gray-700">Shopify</div>
</div>

      <!-- Flutter -->
      <div class="bg-white shadow-sm rounded-xl p-6 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-sky-100 mb-3">
          <svg width="17" height="23" viewBox="0 0 17 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.3984 1.20312H3.39844C2.29387 1.20312 1.39844 2.09856 1.39844 3.20312V19.2031C1.39844 20.3077 2.29387 21.2031 3.39844 21.2031H13.3984C14.503 21.2031 15.3984 20.3077 15.3984 19.2031V3.20312C15.3984 2.09856 14.503 1.20312 13.3984 1.20312Z" stroke="#60A5FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="text-sm font-medium text-gray-700">Flutter</div>
      </div>

      <!-- React Native -->
      <div class="bg-white shadow-sm rounded-xl p-6 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-purple-100 mb-3">
          <svg width="17" height="23" viewBox="0 0 17 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.3984 1.20312H3.39844C2.29387 1.20312 1.39844 2.09856 1.39844 3.20312V19.2031C1.39844 20.3077 2.29387 21.2031 3.39844 21.2031H13.3984C14.503 21.2031 15.3984 20.3077 15.3984 19.2031V3.20312C15.3984 2.09856 14.503 1.20312 13.3984 1.20312Z" stroke="#60A5FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="text-sm font-medium text-gray-700">React Native</div>
      </div>

      <!-- MySQL/PostgreSQL -->
      <div class="bg-white shadow-sm rounded-xl p-6 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-orange-100 mb-3">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.3984 18.2031L22.3984 12.2031L16.3984 6.20312" stroke="#EA580C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8.39844 6.20312L2.39844 12.2031L8.39844 18.2031" stroke="#EA580C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="text-sm font-medium text-gray-700">MySQL/PostgreSQL</div>
      </div>

      <!-- MongoDB -->
      <div class="bg-white shadow-sm rounded-xl p-6 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-emerald-100 mb-3">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.3984 18.2031L22.3984 12.2031L16.3984 6.20312" stroke="#EA580C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8.39844 6.20312L2.39844 12.2031L8.39844 18.2031" stroke="#EA580C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="text-sm font-medium text-gray-700">MongoDB</div>
      </div>

    </div>
  </div>
</section>



<section class="bg-white py-16 px-4">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-blue-600 mb-2">Proses Development</h2>
    <p class="text-gray-600 mb-12">Metodologi yang terbukti untuk website berkualitas tinggi</p>

    <div class="grid md:grid-cols-3 gap-6 text-left">

      <!-- Langkah 1 -->
      <div class="bg-white shadow-sm rounded-xl p-6 border hover:shadow-md transition">
        <div class="flex items-start space-x-4">
          <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white font-bold text-sm">01</div>
          <div>
            <h3 class="font-semibold text-lg mb-1">Discovery & Planning</h3>
            <p class="text-gray-600 text-sm mb-2">Analisis kebutuhan, target audience, dan goals bisnis</p>
            <div class="inline-flex items-center text-xs bg-blue-50 text-blue-600 px-2 py-1 rounded-full">
              <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              1-2 hari
            </div>
          </div>
        </div>
      </div>

      <!-- Langkah 2 -->
      <div class="bg-white shadow-sm rounded-xl p-6 border hover:shadow-md transition">
        <div class="flex items-start space-x-4">
          <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white font-bold text-sm">02</div>
          <div>
            <h3 class="font-semibold text-lg mb-1">Design & Wireframe</h3>
            <p class="text-gray-600 text-sm mb-2">Pembuatan wireframe dan design mockup</p>
            <div class="inline-flex items-center text-xs bg-blue-50 text-blue-600 px-2 py-1 rounded-full">
              <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              3-5 hari
            </div>
          </div>
        </div>
      </div>

      <!-- Langkah 3 -->
      <div class="bg-white shadow-sm rounded-xl p-6 border hover:shadow-md transition">
        <div class="flex items-start space-x-4">
          <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white font-bold text-sm">03</div>
          <div>
            <h3 class="font-semibold text-lg mb-1">Development</h3>
            <p class="text-gray-600 text-sm mb-2">Coding dan development website dengan teknologi modern</p>
            <div class="inline-flex items-center text-xs bg-blue-50 text-blue-600 px-2 py-1 rounded-full">
              <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              2-4 minggu
            </div>
          </div>
        </div>
      </div>

      <!-- Langkah 4 -->
      <div class="bg-white shadow-sm rounded-xl p-6 border hover:shadow-md transition">
        <div class="flex items-start space-x-4">
          <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white font-bold text-sm">04</div>
          <div>
            <h3 class="font-semibold text-lg mb-1">Testing & QA</h3>
            <p class="text-gray-600 text-sm mb-2">Testing functionality, responsiveness, dan performance</p>
            <div class="inline-flex items-center text-xs bg-blue-50 text-blue-600 px-2 py-1 rounded-full">
              <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              2-3 hari
            </div>
          </div>
        </div>
      </div>

      <!-- Langkah 5 -->
      <div class="bg-white shadow-sm rounded-xl p-6 border hover:shadow-md transition">
        <div class="flex items-start space-x-4">
          <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white font-bold text-sm">05</div>
          <div>
            <h3 class="font-semibold text-lg mb-1">Launch & Support</h3>
            <p class="text-gray-600 text-sm mb-2">Deploy website dan training penggunaan CMS</p>
            <div class="inline-flex items-center text-xs bg-blue-50 text-blue-600 px-2 py-1 rounded-full">
              <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              1-2 hari
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="bg-white py-16 px-4">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-blue-600 mb-2">Portfolio Website</h2>
    <p class="text-gray-600 mb-12">Beberapa website terbaik yang telah kami kembangkan</p>

    <div class="grid md:grid-cols-3 gap-6 text-left">

      <!-- Card 1 -->
      <div class="bg-white rounded-xl border shadow-sm hover:shadow-md transition">
        <img src="{{ asset('images/dev.png') }}" alt="Portfolio 1" class="w-full h-48 object-cover rounded-t-xl">
        <div class="p-5">
          <span class="inline-block bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full mb-3">Business Website</span>
          <h3 class="font-bold text-lg mb-1">Corporate Website</h3>
          <p class="text-gray-600 text-sm mb-3">Website corporate modern dengan CMS integration dan multi-language support</p>
          <div class="flex flex-wrap gap-2 text-xs">
            <span class="px-2 py-1 bg-gray-100 rounded">Multi-page</span>
            <span class="px-2 py-1 bg-gray-100 rounded">CMS</span>
            <span class="px-2 py-1 bg-gray-100 rounded">Contact Forms</span>
            <span class="px-2 py-1 bg-gray-100 rounded">Gallery</span>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-xl border shadow-sm hover:shadow-md transition">
        <img src="{{ asset('images/dev.png') }}" alt="Portfolio 2" class="w-full h-48 object-cover rounded-t-xl">
        <div class="p-5">
          <span class="inline-block bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full mb-3">Online Store</span>
          <h3 class="font-bold text-lg mb-1">E-Commerce Platform</h3>
          <p class="text-gray-600 text-sm mb-3">Platform e-commerce lengkap dengan payment gateway dan inventory management</p>
          <div class="flex flex-wrap gap-2 text-xs">
            <span class="px-2 py-1 bg-gray-100 rounded">Shopping Cart</span>
            <span class="px-2 py-1 bg-gray-100 rounded">Payment Gateway</span>
            <span class="px-2 py-1 bg-gray-100 rounded">Admin Panel</span>
            <span class="px-2 py-1 bg-gray-100 rounded">Analytics</span>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl border shadow-sm hover:shadow-md transition">
        <img src="{{ asset('images/dev.png') }}" alt="Portfolio 3" class="w-full h-48 object-cover rounded-t-xl">
        <div class="p-5">
          <span class="inline-block bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full mb-3">Marketing Landing</span>
          <h3 class="font-bold text-lg mb-1">Landing Page Campaign</h3>
          <p class="text-gray-600 text-sm mb-3">Landing page high-converting untuk campaign marketing dan lead generation</p>
          <div class="flex flex-wrap gap-2 text-xs">
            <span class="px-2 py-1 bg-gray-100 rounded">Lead Forms</span>
            <span class="px-2 py-1 bg-gray-100 rounded">A/B Testing</span>
            <span class="px-2 py-1 bg-gray-100 rounded">Analytics</span>
            <span class="px-2 py-1 bg-gray-100 rounded">Mobile Optimized</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Tombol -->
    <div class="mt-10">
      <a href="#"
        class="inline-flex items-center px-5 py-2 rounded-full border border-blue-500 text-blue-600 hover:bg-blue-50 transition font-medium text-sm">
        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_348_10389)">
            <path d="M2.23047 8.01042C2.23047 8.01042 4.23047 3.34375 8.89714 3.34375C13.5638 3.34375 15.5638 8.01042 15.5638 8.01042C15.5638 8.01042 13.5638 12.6771 8.89714 12.6771C4.23047 12.6771 2.23047 8.01042 2.23047 8.01042Z" stroke="#2563EB" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8.89844 10.0078C10.003 10.0078 10.8984 9.11238 10.8984 8.00781C10.8984 6.90324 10.003 6.00781 8.89844 6.00781C7.79387 6.00781 6.89844 6.90324 6.89844 8.00781C6.89844 9.11238 7.79387 10.0078 8.89844 10.0078Z" stroke="#2563EB" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          </g>
          <defs>
            <clipPath id="clip0_348_10389">
                <rect width="16" height="16" fill="white" transform="translate(0.898438 0.0078125)"/>
            </clipPath>
          </defs>
        </svg>
        Lihat Semua Portfolio
      </a>
    </div>
  </div>
</section>


@php
$paketUiux = [
  [
    'nama' => 'Landing Page',
    'harga' => 'Rp 3.500.000',
    'durasi' => '1-2 minggu',
    'keterangan' => 'Best for: Campaign  Marketing',
    'fitur' => [
      'Single page desain',
      'Responsive layouts',
      'Contact from',
      'SEO Basic',
      'Gogle analystic',
      '2x Responsive',
      '1 Bulan',
    ],
    'buttonStyle' => 'bg-gray-100 text-gray-700',
    'highlight' => false
  ],
  [
    'nama' => 'Business Website',
    'harga' => 'Rp 7.500.000',
    'durasi' => '3-4 minggu',
    'keterangan' => 'Best for: Corporate & SME',
    'fitur' => [
      'Multi-page website (5-10 pages)',
      'CMS integration',
      'Contact from',
      'Gallery & portfolio',
      'SEO Optimization',
      'Gogle analystic',
      '3x Revisions',
      '3 Bulan support',
    ],
    'buttonStyle' => 'bg-gradient-to-r from-purple-500 to-blue-400 text-white',
    'highlight' => true
  ],
  [
    'nama' => 'E-Commerce',
    'harga' => 'Rp 15.000.000',
    'durasi' => '4-6 minggu',
    'keterangan' => 'Best for: Online store',
    'fitur' => [
      'Full E-commerce platform',
      'Product management',
      'Shopping chart & checkout',
      'payment gateway integration',
      'Admin Dashboard',
      'inventory management',
      'Seo analystic',
      'Unlimited Revisions',
      '6 Bulan support',
    ],
    'buttonStyle' => 'bg-gray-100 text-gray-700',
    'highlight' => false
  ]
];
@endphp
<section class="py-12 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-purple-700 mb-2">Paket UI/UX Design</h2>
    <p class="text-center text-gray-500 mb-10">Pilih paket yang sesuai dengan kebutuhan proyek Anda</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      @foreach($paketUiux as $paket)
      <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition duration-300 {{ $paket['highlight'] ? 'border-2 border-purple-400' : '' }}">
        <h3 class="text-lg font-semibold text-center">{{ $paket['nama'] }}</h3>
        <p class="text-2xl font-bold text-center text-purple-600 mt-2">{{ $paket['harga'] }}</p>
        <p class="text-center text-sm text-gray-500 mb-6">{{ $paket['durasi'] }}</p>
        <p class="text-center text-xs font-semibold text-blue-500 bg-blue-100 rounded-full inline-block px-3 py-1 mt-2">
            {{ $paket['keterangan'] }}
        </p>
        <ul class="space-y-2 text-sm text-gray-700 mb-6">
          @foreach($paket['fitur'] as $fitur)
          <li class="flex items-start gap-2">
  <!-- Ikon SVG -->
  <svg width="18" height="18" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="mt-1">
    <path d="M18.7995 9.43081V10.1975C18.7985 11.9945 18.2166 13.743 17.1406 15.1823C16.0646 16.6216 14.5522 17.6745 12.8289 18.1841C11.1057 18.6936 9.26386 18.6324 7.5782 18.0096C5.89255 17.3869 4.45336 16.2359 3.47528 14.7284C2.4972 13.2208 2.03264 11.4375 2.15088 9.64441C2.26911 7.85128 2.96382 6.14442 4.13138 4.77837C5.29894 3.41233 6.8768 2.4603 8.62964 2.06427C10.3825 1.66824 12.2164 1.84943 13.8578 2.58081" stroke="#22C55E" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M7.96484 9.36458L10.4648 11.8646L18.7982 3.53125" stroke="#22C55E" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
  {{ $fitur }}
</li>
          @endforeach
        </ul>
        <button class="w-full py-2 rounded font-semibold hover:opacity-90 transition {{ $paket['buttonStyle'] }}">
          → Pilih Paket
        </button>
      </div>
      @endforeach
    </div>
  </div>
</section>


<!-- apa kata client kami -->
<section class="py-12 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-purple-700 mb-2">Apa Kata Klien Kami</h2>
    <p class="text-center text-gray-500 mb-10">Testimoni dari klien yang puas dengan layanan UI/UX Design kami</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Testimoni 1 -->
      <div class="p-6 border rounded-lg shadow-md hover:shadow-lg transition duration-300 bg-white">
        <div class="flex items-center mb-4 text-yellow-400">
          <span class="text-xl">★★★★★</span>
        </div>
        <p class="text-gray-700 mb-6">
          "Website yang dibuat Titik Visual sangat profesional dan user-friendly. Traffic website kami meningkat 200% setelah redesign!"
        </p>
        <div class="flex items-center gap-4">
          <img src="/images/web.png" alt="Sarah Johnson" class="w-12 h-12 rounded-full border" />
          <div>
            <p class="font-semibold text-black">Budi Santoso</p>
            <p class="text-sm text-gray-500">Marketing Direktor at PT. Maju Bersama</p>
          </div>
        </div>
      </div>

      <!-- Testimoni 2 -->
      <div class="p-6 border rounded-lg shadow-md hover:shadow-lg transition duration-300 bg-white">
        <div class="flex items-center mb-4 text-yellow-400">
          <span class="text-xl">★★★★★</span>
        </div>
        <p class="text-gray-700 mb-6">
          "E-commerce platform yang dibuat sangat membantu bisnis online kami. Penjualan meningkat drastis!"
        </p>
        <div class="flex items-center gap-4">
          <img src="/images/web.png" alt="Ahmad Rizki" class="w-12 h-12 rounded-full border" />
          <div>
            <p class="font-semibold text-black">Sari dewi</p>
            <p class="text-sm text-gray-500">Owner at Toko Online Fashionista</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- CTA Gradient Atas -->
<section class="bg-gradient-to-r from-purple-500 via-indigo-400 to-cyan-400 text-white text-center py-16 px-4">
  <h2 class="text-3xl font-bold mb-3">Siap Membuat Website & Aplikasi Impian Anda?</h2>
  <p class="mb-6 text-lg">Konsultasikan kebutuhan website dan aplikasi anda dengan tim developer kami secara gratis</p>

  <div class="flex flex-col md:flex-row items-center justify-center gap-4">
    <!-- Tombol Mulai Diskusi -->
    <a href="#whatsapp" class="inline-flex items-center gap-2 px-6 py-2 bg-white text-purple-600 font-semibold rounded-md shadow hover:bg-purple-100 transition">
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M20.52 3.48A11.936 11.936 0 0012 0C5.37 0 .009 5.371.009 12c0 2.108.544 4.097 1.578 5.856L0 24l6.281-1.647A11.944 11.944 0 0012 24c6.627 0 12-5.373 12-12 0-3.191-1.243-6.212-3.48-8.52zM12 21.75a9.77 9.77 0 01-4.949-1.335l-.352-.203-3.732.977.996-3.63-.23-.376A9.746 9.746 0 012.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
      </svg>
      WhatsApp Sekarang
    </a>

    <!-- Tombol Lihat Portofolio -->
    <a href="#portfolio" class="inline-flex items-center gap-2 px-6 py-2 border border-white text-white font-semibold rounded-md hover:bg-white hover:text-purple-600 transition">
      <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_348_3358)">
            <path d="M14.3984 10.8047V13.4714C14.3984 13.825 14.258 14.1641 14.0079 14.4142C13.7579 14.6642 13.4187 14.8047 13.0651 14.8047H3.73177C3.37815 14.8047 3.03901 14.6642 2.78896 14.4142C2.53891 14.1641 2.39844 13.825 2.39844 13.4714V10.8047" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M5.06641 7.46875L8.39974 10.8021L11.7331 7.46875" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8.39844 10.8047V2.80469" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          </g>
          <defs>
            <clipPath id="clip0_348_3358">
                <rect width="16" height="16" fill="white" transform="translate(0.398438 0.804688)"/>
            </clipPath>
          </defs>
        </svg>
      Download Portofolio
    </a>
  </div>
</section>

@endsection

