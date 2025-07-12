<!-- TOPBAR -->
<div class="bg-gray-900 text-white text-sm">
  <div class="max-w-7xl mx-auto px-4 py-2 flex justify-between items-center">
    <div class="flex space-x-6">
      <div class="flex items-center space-x-1">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h2l3.6 7.59L5.25 17H19v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12L8.1 13h7.45c.75 0 1.41-.41 1.75-1.03L21 6H5.21" />
        </svg>
        <span>081804376001</span>
      </div>
      <div class="flex items-center space-x-1">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16 12l-4-4-4 4m8 0l-4 4-4-4" />
        </svg>
        <span>titikvisualjogja@gmail.com</span>
      </div>
    </div>
    <div class="flex space-x-3">
      <a href="#" class="hover:text-purple-400"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="hover:text-purple-400"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
</div>

<!-- NAVBAR -->
<header class="bg-gradient-to-r from-purple-500 via-blue-400 to-cyan-400">
  <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

    <!-- Logo + Nama -->
    <div class="flex items-center space-x-4 relative">
      <div class="relative">
        <img src="{{ asset('images/profil.png') }}" alt="Logo" class="w-16 h-16">
        <div class="absolute top-0 right-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.398438" y="0.203125" width="16" height="16" rx="8" fill="url(#paint0_linear)"/>
            <defs>
              <linearGradient id="paint0_linear" x1="0.398438" y1="8.20312" x2="16.3984" y2="8.20312" gradientUnits="userSpaceOnUse">
                <stop stop-color="#FB923C"/>
                <stop offset="1" stop-color="#F472B6"/>
              </linearGradient>
            </defs>
          </svg>
        </div>
      </div>
    </div>

    <!-- Menu -->
    <nav class="space-x-6 text-white font-medium hidden md:block">
      <a href="#" class="hover:underline">Home</a>
      <a href="#" class="font-bold underline">Profile</a>
      <a href="#" class="hover:underline">Layanan</a>
      <a href="#" class="hover:underline">Portfolio</a>
      <a href="#" class="hover:underline">Kontak</a>
    </nav>
  </div>
</header>
