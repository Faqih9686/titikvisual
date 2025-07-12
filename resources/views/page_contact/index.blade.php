@extends('layouts.apu')

@section('title', 'Konsultasi Gratis - Titik Visual')

@section('content')

<!-- Hero Section -->
<section class="text-center py-20 px-6 bg-gradient-to-b from-white to-green-50">
    <span class="text-xs px-3 py-1 bg-purple-100 text-purple-600 rounded-full font-semibold mb-4 inline-block">💬 Get In Touch</span>
    <h1 class="text-4xl font-extrabold mb-2">
        <span class="text-purple-600">Mari Diskusi</span><br>
        <span class="text-gray-900">Proyek Anda</span>
    </h1>
    <p class="text-gray-600 max-w-2xl mx-auto mt-4">
        Siap mewujudkan visi kreatif Anda? Tim ahli kami siap membantu dari konsultasi digital hingga produksi merchandise custom. Hubungi kami sekarang untuk konsultasi gratis!
    </p>
</section>

<!-- Kontak Card -->
<section class="text-center py-16 bg-white">
    <h2 class="text-2xl font-bold text-blue-600 mb-2">Hubungi Kami</h2>
    <p class="text-gray-600 mb-10">Pilih cara yang paling nyaman untuk Anda</p>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 max-w-6xl mx-auto px-4">

        <!-- WhatsApp -->
<div class="border rounded-lg p-6 hover:shadow active:shadow-lg transition duration-150 transform hover:scale-105 active:scale-95">
  <div class="bg-green-50 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-4">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20.52 3.48A11.936 11.936 0 0012 0C5.37 0 .009 5.371.009 12c0 2.108.544 4.097 1.578 5.856L0 24l6.281-1.647A11.944 11.944 0 0012 24c6.627 0 12-5.373 12-12 0-3.191-1.243-6.212-3.48-8.52zM12 21.75a9.77 9.77 0 01-4.949-1.335l-.352-.203-3.732.977.996-3.63-.23-.376A9.746 9.746 0 012.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
            </svg>
  </div>
  <h3 class="font-bold">WhatsApp</h3>
  <p class="text-purple-600 font-semibold">081804376001</p>
  <p class="text-sm text-gray-500 mt-2">Chat langsung untuk konsultasi cepat</p>
</div>

        <!-- Email -->
        <div class="border rounded-lg p-6 hover:shadow active:shadow-lg transition duration-150 transform hover:scale-105 active:scale-95">
            <div class="bg-green-50 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            </div>
            <h3 class="font-bold">Email</h3>
            <p class="text-purple-600 font-semibold">titikvisualjogja@gmail.com</p>
            <p class="text-sm text-gray-500 mt-2">Untuk inquiry detail dan proposal</p>
        </div>

        <!-- Telepon -->
        <div class="border rounded-lg p-6 hover:shadow active:shadow-lg transition duration-150 transform hover:scale-105 active:scale-95">
            <div class="bg-green-50 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-4">
                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.5344 14.7928V17.2928C18.5353 17.5249 18.4878 17.7546 18.3948 17.9672C18.3018 18.1799 18.1655 18.3708 17.9944 18.5277C17.8234 18.6846 17.6215 18.804 17.4017 18.8784C17.1818 18.9527 16.9488 18.9803 16.7177 18.9595C14.1534 18.6808 11.6902 17.8046 9.52603 16.4011C7.51256 15.1217 5.80548 13.4146 4.52603 11.4011C3.11768 9.22713 2.24124 6.75195 1.9677 4.17612C1.94688 3.94568 1.97426 3.71342 2.04812 3.49414C2.12197 3.27486 2.24068 3.07336 2.39667 2.90247C2.55267 2.73158 2.74254 2.59505 2.95419 2.50156C3.16585 2.40807 3.39465 2.35967 3.62603 2.35946H6.12603C6.53046 2.35548 6.92253 2.49869 7.22917 2.7624C7.53581 3.02611 7.7361 3.39233 7.7927 3.79279C7.89822 4.59284 8.09391 5.37839 8.37604 6.13446C8.48815 6.43273 8.51242 6.75688 8.44596 7.06852C8.37949 7.38016 8.22509 7.66621 8.00103 7.89279L6.9427 8.95112C8.129 11.0374 9.85641 12.7648 11.9427 13.9511L13.001 12.8928C13.2276 12.6687 13.5137 12.5143 13.8253 12.4479C14.1369 12.3814 14.4611 12.4057 14.7594 12.5178C15.5154 12.7999 16.301 12.9956 17.101 13.1011C17.5058 13.1582 17.8755 13.3621 18.1398 13.674C18.4041 13.9859 18.5445 14.3841 18.5344 14.7928Z" stroke="#374151" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </div>
            <h3 class="font-bold">Telepon</h3>
            <p class="text-purple-600 font-semibold">081804376001</p>
            <p class="text-sm text-gray-500 mt-2">Hubungi langsung untuk diskusi</p>
        </div>

        <!-- Lokasi -->
        <div class="border rounded-lg p-6 hover:shadow active:shadow-lg transition duration-150 transform hover:scale-105 active:scale-95">
            <div class="bg-green-50 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-4">
                <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M12 11c1.656 0 3-1.343 3-3s-1.344-3-3-3-3 1.343-3 3 1.344 3 3 3z"/>
                    <path d="M12 2C8.13 2 5 5.134 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.866-3.13-7-7-7z"/>
                </svg>
            </div>
            <h3 class="font-bold">Lokasi</h3>
            <p class="text-purple-600 font-semibold">Yogyakarta, Indonesia</p>
            <p class="text-sm text-gray-500 mt-2">Bisa meeting langsung by appointment</p>
        </div>
    </div>

    <!-- Tombol Aksi -->
<div class="flex justify-center gap-5 flex-wrap mt-8 mb-4">
  <!-- Tombol WhatsApp -->
  <a href="https://wa.me/6281804376001" target="_blank"
     class="flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white font-medium px-6 py-2 rounded-lg transition">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
      <path
        d="M20.52 3.48a11.88 11.88 0 00-16.8 0 11.9 11.9 0 00-2.7 4.56 11.86 11.86 0 001.32 10.74l-1.4 5.1 5.22-1.38a11.9 11.9 0 005.28 1.32h.06a11.87 11.87 0 0011.88-11.88 11.87 11.87 0 00-3.86-8.16zM12 20.44a9.53 9.53 0 01-4.88-1.32l-.35-.2-3.1.82.84-3.02-.23-.38a9.61 9.61 0 01-1.26-4.76 9.58 9.58 0 012.82-6.78 9.55 9.55 0 016.78-2.82 9.58 9.58 0 016.78 2.82 9.56 9.56 0 012.82 6.78 9.58 9.58 0 01-2.82 6.78 9.58 9.58 0 01-6.78 2.82z" />
    </svg>
    <span>WhatsApp Sekarang</span>
  </a>

  <!-- Tombol Email -->
  <a href="mailto:titikvisualjogja@gmail.com"
     class="flex items-center gap-2 border border-purple-500 text-purple-600 font-medium px-6 py-2 rounded-lg transition hover:bg-purple-50">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round"d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
    </svg>
    <span>Kirim Email</span>
  </a>
</div>
</section>

<!-- Section: Project Inquiry Form -->
<section class="bg-gray-50 py-16 px-4 md:px-10">
  <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-8">
    
    <!-- Form Kolom Kiri (2/3) -->
    <div class="md:col-span-2">
<h2 class="text-2xl md:text-3xl font-bold text-purple-600 mb-2">Project Inquiry Form</h2>
  <p class="text-gray-600 mb-8 max-w-2xl">
    Konsultasikan kebutuhan digital creative dan custom merchandise Anda dengan tim ahli kami.
    Dapatkan penawaran terbaik untuk proyek atau produk impian Anda!
  </p>

  <form class="grid md:grid-cols-2 gap-6">
    <!-- Nama Lengkap -->
    <div>
      <label class="block text-sm font-medium mb-1">Nama Lengkap *</label>
      <div class="flex items-center border rounded-lg px-3 py-2 bg-white">
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.0638 14.8906V13.5573C13.0638 12.85 12.7829 12.1718 12.2828 11.6717C11.7827 11.1716 11.1044 10.8906 10.3971 10.8906H6.39714C5.68989 10.8906 5.01161 11.1716 4.51152 11.6717C4.01142 12.1718 3.73047 12.85 3.73047 13.5573V14.8906" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M8.39714 8.22396C9.86989 8.22396 11.0638 7.03005 11.0638 5.55729C11.0638 4.08453 9.86989 2.89062 8.39714 2.89062C6.92438 2.89062 5.73047 4.08453 5.73047 5.55729C5.73047 7.03005 6.92438 8.22396 8.39714 8.22396Z" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <input type="text" class="w-full outline-none" placeholder="Masukkan nama lengkap" />
      </div>
    </div>

    <!-- Email -->
    <div>
      <label class="block text-sm font-medium mb-1">Email *</label>
      <div class="flex items-center border rounded-lg px-3 py-2 bg-white">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
        <input type="email" class="w-full outline-none" placeholder="nama@email.com" />
      </div>
    </div>

    <!-- WhatsApp -->
    <div>
      <label class="block text-sm font-medium mb-1">No. WhatsApp *</label>
      <div class="flex items-center border rounded-lg px-3 py-2 bg-white">
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.0634 12.1733V14.1733C15.0642 14.359 15.0262 14.5427 14.9518 14.7129C14.8774 14.883 14.7683 15.0357 14.6315 15.1612C14.4947 15.2867 14.3331 15.3823 14.1573 15.4418C13.9814 15.5012 13.795 15.5233 13.6101 15.5066C11.5587 15.2837 9.5881 14.5827 7.85677 13.46C6.24598 12.4364 4.88032 11.0707 3.85677 9.45996C2.73008 7.72076 2.02893 5.74062 1.8101 3.67996C1.79344 3.49561 1.81535 3.3098 1.87443 3.13438C1.93352 2.95895 2.02848 2.79775 2.15328 2.66104C2.27807 2.52433 2.42997 2.4151 2.59929 2.34031C2.76862 2.26552 2.95166 2.2268 3.13677 2.22663H5.13677C5.4603 2.22344 5.77396 2.33801 6.01927 2.54898C6.26459 2.75995 6.42482 3.05292 6.4701 3.37329C6.55451 4.01334 6.71107 4.64178 6.93677 5.24663C7.02646 5.48524 7.04587 5.74457 6.9927 5.99388C6.93953 6.24319 6.81601 6.47203 6.63677 6.65329L5.7901 7.49996C6.73914 9.16899 8.12107 10.5509 9.7901 11.5L10.6368 10.6533C10.818 10.4741 11.0469 10.3505 11.2962 10.2974C11.5455 10.2442 11.8048 10.2636 12.0434 10.3533C12.6483 10.579 13.2767 10.7355 13.9168 10.82C14.2406 10.8656 14.5364 11.0288 14.7478 11.2783C14.9592 11.5278 15.0715 11.8463 15.0634 12.1733Z" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <input type="text" class="w-full outline-none" placeholder="08xxxxxxxxxx" />
      </div>
    </div>

    <!-- Nama Perusahaan -->
    <div>
      <label class="block text-sm font-medium mb-1">Nama Perusahaan</label>
      <div class="flex items-center border rounded-lg px-3 py-2 bg-white">
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12.3997 2.22656H4.39974C3.66336 2.22656 3.06641 2.82352 3.06641 3.5599V14.2266C3.06641 14.9629 3.66336 15.5599 4.39974 15.5599H12.3997C13.1361 15.5599 13.7331 14.9629 13.7331 14.2266V3.5599C13.7331 2.82352 13.1361 2.22656 12.3997 2.22656Z" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M6.39844 15.5573V12.8906H10.3984V15.5573" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M5.73047 4.89062H5.73714" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11.0664 4.89062H11.0731" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M8.39844 4.89062H8.4051" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M8.39844 7.55469H8.4051" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M8.39844 10.2266H8.4051" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11.0664 7.55469H11.0731" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11.0664 10.2266H11.0731" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M5.73047 7.55469H5.73714" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M5.73047 10.2266H5.73714" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <input type="text" class="w-full outline-none" placeholder="PT. Nama Perusahaan" />
      </div>
    </div>

    <!-- Layanan -->
    <div>
      <label class="block text-sm font-medium mb-1">Layanan yang Dibutuhkan *</label>
      <div class="flex items-center border rounded-lg px-3 py-2 bg-white">
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.02469 11.2267C6.96517 10.996 6.84492 10.7855 6.67644 10.617C6.50796 10.4485 6.29741 10.3282 6.06669 10.2687L1.97669 9.21406C1.90691 9.19426 1.8455 9.15223 1.80177 9.09436C1.75804 9.03649 1.73438 8.96593 1.73438 8.8934C1.73438 8.82086 1.75804 8.7503 1.80177 8.69243C1.8455 8.63456 1.90691 8.59253 1.97669 8.57273L6.06669 7.5174C6.29732 7.45793 6.50782 7.33778 6.67629 7.16942C6.84477 7.00106 6.96507 6.79065 7.02469 6.56006L8.07936 2.47006C8.09896 2.40001 8.14095 2.33829 8.19891 2.29432C8.25686 2.25036 8.32761 2.22656 8.40036 2.22656C8.4731 2.22656 8.54385 2.25036 8.60181 2.29432C8.65977 2.33829 8.70175 2.40001 8.72136 2.47006L9.77536 6.56006C9.83488 6.79078 9.95513 7.00133 10.1236 7.16981C10.2921 7.33829 10.5026 7.45854 10.7334 7.51806L14.8234 8.57206C14.8937 8.59146 14.9557 8.6334 14.9999 8.69145C15.0441 8.74949 15.0681 8.82044 15.0681 8.8934C15.0681 8.96635 15.0441 9.0373 14.9999 9.09534C14.9557 9.15339 14.8937 9.19533 14.8234 9.21473L10.7334 10.2687C10.5026 10.3282 10.2921 10.4485 10.1236 10.617C9.95513 10.7855 9.83488 10.996 9.77536 11.2267L8.72069 15.3167C8.70109 15.3868 8.6591 15.4485 8.60114 15.4925C8.54319 15.5364 8.47244 15.5602 8.39969 15.5602C8.32695 15.5602 8.2562 15.5364 8.19824 15.4925C8.14028 15.4485 8.0983 15.3868 8.07869 15.3167L7.02469 11.2267Z" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M13.7305 2.89062V5.55729" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M15.0651 4.22656H12.3984" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M3.06641 12.2266V13.5599" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M3.73177 12.8906H2.39844" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <select class="w-full outline-none bg-white">
          <option>Pilih layanan</option>
        </select>
      </div>
    </div>

    <!-- Timeline -->
    <div>
      <label class="block text-sm font-medium mb-1">Timeline Proyek</label>
      <div class="flex items-center border rounded-lg px-3 py-2 bg-white">
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.73047 2.22656V4.89323" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11.0664 2.22656V4.89323" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M13.0651 3.55469H3.73177C2.99539 3.55469 2.39844 4.15164 2.39844 4.88802V14.2214C2.39844 14.9577 2.99539 15.5547 3.73177 15.5547H13.0651C13.8015 15.5547 14.3984 14.9577 14.3984 14.2214V4.88802C14.3984 4.15164 13.8015 3.55469 13.0651 3.55469Z" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M2.39844 7.55469H14.3984" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <select class="w-full outline-none bg-white">
          <option>Pilih timeline</option>
        </select>
      </div>
    </div>

    <!-- Budget -->
    <div class="md:col-span-2">
      <label class="block text-sm font-medium mb-1">Budget Range</label>
      <div class="flex items-center border rounded-lg px-3 py-2 bg-white">
        <input type="text" class="w-full outline-none" placeholder="Pilih budget range" />
      </div>
    </div>

    <!-- Detail Proyek -->
<div class="md:col-span-2">
  <label class="block text-sm font-medium mb-1 text-gray-700">
    <!-- Ikon + Teks tanpa flex -->
    <span class="inline-block align-middle mr-1">
      <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.3997 1.625H4.39974C4.04612 1.625 3.70698 1.76548 3.45693 2.01552C3.20688 2.26557 3.06641 2.60471 3.06641 2.95833V13.625C3.06641 13.9786 3.20688 14.3178 3.45693 14.5678C3.70698 14.8179 4.04612 14.9583 4.39974 14.9583H12.3997C12.7534 14.9583 13.0925 14.8179 13.3425 14.5678C13.5926 14.3178 13.7331 13.9786 13.7331 13.625V4.95833L10.3997 1.625Z" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M9.73047 1.625V4.29167C9.73047 4.64529 9.87094 4.98443 10.121 5.23448C10.371 5.48452 10.7102 5.625 11.0638 5.625H13.7305" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M7.0638 6.28906H5.73047" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M11.0638 8.95312H5.73047" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M11.0638 11.625H5.73047" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </span>
    <span class="inline-block align-middle">Detail Proyek *</span>
  </label>

  <div class="border rounded-lg px-3 py-2 bg-white">
    <textarea rows="4" class="w-full outline-none resize-none"
      placeholder="Ceritakan detail proyek/kebutuhan merchandise Anda, tujuan bisnis, target audience, spesifikasi produk, quantity, referensi design, dll."></textarea>
  </div>
</div>

    <!-- Tombol Submit -->
    <div class="md:col-span-2 text-right mt-4">
      <button type="submit"
        class="w-full md:w-auto bg-gradient-to-r from-purple-500 to-cyan-500 text-white font-medium py-2 px-6 rounded-lg flex items-center justify-center gap-2">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M10 14L21 3M21 3l-6.5 17-2.5-7L3 9l18-6z" />
        </svg>
        Kirim Inquiry
      </button>
    </div>
  </form>
    </div>

    <!-- Informasi Tambahan (1/3) -->
    <div class="space-y-6">
      <!-- Jam Operasional -->
      <div class="bg-white rounded-xl shadow p-6">
        <h3 class="font-semibold text-lg mb-4 flex items-center gap-2">
          <span>🕒</span> Jam Operasional
        </h3>
        <div class="text-sm text-gray-700 space-y-2">
          <div class="flex justify-between"><span>Senin - Jumat</span><span>09:00 - 18:00 WIB</span></div>
          <div class="flex justify-between"><span>Sabtu</span><span>09:00 - 15:00 WIB</span></div>
          <div class="flex justify-between"><span>Minggu</span><span>Closed</span></div>
        </div>
      </div>

      <!-- Response Time -->
      <div class="bg-white rounded-xl shadow p-6">
        <h3 class="font-semibold text-lg mb-4 flex items-center gap-2">
          <span>💬</span> Response Time
        </h3>
        <ul class="text-sm text-gray-700 space-y-2">
          <li><span class="inline-block w-3 h-3 rounded-full bg-green-500 mr-2"></span> WhatsApp – Kurang dari 1 jam (jam kerja)</li>
          <li><span class="inline-block w-3 h-3 rounded-full bg-blue-500 mr-2"></span> Email – Kurang dari 24 jam</li>
          <li><span class="inline-block w-3 h-3 rounded-full bg-purple-500 mr-2"></span> Form Inquiry – Kurang dari 24 jam</li>
        </ul>
      </div>

      <!-- FAQ -->
      <div class="bg-white rounded-xl shadow p-6">
        <h3 class="font-semibold text-lg mb-4">Frequently Asked</h3>
        <div class="space-y-4 text-sm text-gray-700">
          <div>
            <strong>Apakah konsultasi gratis?</strong><br>
            Ya, konsultasi awal dan diskusi kebutuhan proyek gratis.
          </div>
          <div>
            <strong>Berapa lama proses quotation?</strong><br>
            Biasanya 1-3 hari kerja setelah brief lengkap diterima.
          </div>
          <div>
            <strong>Apakah bisa meeting online?</strong><br>
            Tentu! Kami support meeting via Zoom, Google Meet, atau platform lainnya.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- CTA Gradient Atas -->
<section class="bg-gradient-to-r from-purple-500 via-indigo-400 to-cyan-400 text-white text-center py-16 px-4">
  <h2 class="text-3xl font-bold mb-3">Butuh Respon cepat?</h2>
  <p class="mb-6 text-lg">Untuk Diskusi Urgent tentang proyek digital satu order merchhandise,langsung chat whassap kami</p>
  <div class="flex justify-center gap-4 flex-wrap">
    <a href="#" class="inline-flex items-center gap-2 px-6 py-2 bg-white text-purple-600 font-semibold rounded-md shadow hover:bg-purple-50 transition">
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20.52 3.48A11.936 11.936 0 0012 0C5.37 0 .009 5.371.009 12c0 2.108.544 4.097 1.578 5.856L0 24l6.281-1.647A11.944 11.944 0 0012 24c6.627 0 12-5.373 12-12 0-3.191-1.243-6.212-3.48-8.52zM12 21.75a9.77 9.77 0 01-4.949-1.335l-.352-.203-3.732.977.996-3.63-.23-.376A9.746 9.746 0 012.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
            </svg>
      Mulai Diskusi
    </a>
  </div>
</section>

@endsection

