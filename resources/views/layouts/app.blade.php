<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Titik Visual')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  {{-- Tailwind --}}
</head>

<body class="font-sans antialiased">

  {{-- Header/Navbar --}}
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 flex justify-between items-center py-4">

      <!-- Kiri: Logo + Judul -->
      <div class="flex items-center space-x-4 relative">
        <!-- Logo -->
        <div class="relative">
          <img src="{{ asset('images/profil.png') }}" alt="Logo" class="w-16 h-16">
          <!-- Ikon Bulat di Kanan Atas -->
          <div class="absolute top-0 right-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="0.398438" y="0.203125" width="16" height="16" rx="8" fill="url(#paint0_linear_6_2614)" />
              <defs>
                <linearGradient id="paint0_linear_6_2614" x1="0.398438" y1="8.20312" x2="16.3984" y2="8.20312" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FB923C" />
                  <stop offset="1" stop-color="#F472B6" />
                </linearGradient>
              </defs>
            </svg>
          </div>
        </div>

        <!-- Teks Judul -->
        <div>
          <div class="text-2xl font-bold text-gray-800">Titik Visual</div>
          <div class="text-sm text-gray-500">Digital Creative Studio</div>
        </div>
      </div>

      <!-- Navigasi -->
      <nav class="space-x-6 text-gray-700 font-medium hidden md:block">
        <a href="#" class="hover:text-blue-600 hover:underline transition duration-200">Home</a>
        <a href="{{ route('about.profil') }}" class="hover:text-blue-600 hover:underline transition duration-200">About</a>
        <a href="#" class="hover:text-blue-600 hover:underline transition duration-200">Services</a>
        <a href="{{ route('portofolio.index') }}" class="hover:text-blue-600 hover:underline transition duration-200">Portfolio</a>
        <a href="#" class="hover:text-blue-600 hover:underline transition duration-200">Careers</a>
        <a href="{{ route('contact.konsultasi') }}" class="hover:text-blue-600 hover:underline transition duration-200">Contact</a>
      </nav>
    </div>
  </header>

  {{-- Isi Konten --}}
  <main class="bg-white">
    @yield('content')
  </main>

</body>

</html>