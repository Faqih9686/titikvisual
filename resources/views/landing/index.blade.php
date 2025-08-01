@extends('layouts.app')

@section('title', 'Titik Visual – Digital Creative Studio')

@section('content')
<div class="bg-gradient-to-b from-white to-blue-50 py-20 text-center">
  <div class="max-w-3xl mx-auto px-4">

    <!-- Badge -->
    <div class="inline-flex items-center bg-purple-100 text-purple-700 text-xs px-3 py-1 rounded-full mb-4">
      <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.88407 10.9299C6.82455 10.6991 6.70429 10.4886 6.53581 10.3201C6.36733 10.1516 6.15678 10.0314 5.92607 9.97185L1.83607 8.91719C1.76629 8.89738 1.70487 8.85535 1.66114 8.79748C1.61741 8.73961 1.59375 8.66906 1.59375 8.59652C1.59375 8.52398 1.61741 8.45343 1.66114 8.39556C1.70487 8.33769 1.76629 8.29566 1.83607 8.27585L5.92607 7.22052C6.1567 7.16106 6.36719 7.0409 6.53567 6.87255C6.70414 6.70419 6.82444 6.49378 6.88407 6.26319L7.93873 2.17319C7.95834 2.10313 8.00032 2.04141 8.05828 1.99745C8.11624 1.95349 8.18699 1.92969 8.25973 1.92969C8.33248 1.92969 8.40323 1.95349 8.46119 1.99745C8.51914 2.04141 8.56113 2.10313 8.58073 2.17319L9.63473 6.26319C9.69425 6.4939 9.81451 6.70445 9.98299 6.87293C10.1515 7.04141 10.362 7.16167 10.5927 7.22119L14.6827 8.27519C14.7531 8.29459 14.8151 8.33653 14.8593 8.39457C14.9035 8.45262 14.9274 8.52356 14.9274 8.59652C14.9274 8.66948 14.9035 8.74042 14.8593 8.79847C14.8151 8.85651 14.7531 8.89845 14.6827 8.91785L10.5927 9.97185C10.362 10.0314 10.1515 10.1516 9.98299 10.3201C9.81451 10.4886 9.69425 10.6991 9.63473 10.9299L8.58007 15.0199C8.56046 15.0899 8.51848 15.1516 8.46052 15.1956C8.40256 15.2396 8.33181 15.2634 8.25907 15.2634C8.18632 15.2634 8.11557 15.2396 8.05761 15.1956C7.99966 15.1516 7.95767 15.0899 7.93807 15.0199L6.88407 10.9299Z" stroke="#7E22CE" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M13.5898 2.59375V5.26042" stroke="#7E22CE" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M14.9245 3.92969H12.2578" stroke="#7E22CE" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M2.92578 11.9297V13.263" stroke="#7E22CE" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M3.59115 12.5938H2.25781" stroke="#7E22CE" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Titik Visual – Digital Creative Studio Yogyakarta
    </div>

    <!-- Judul -->
    <h1 class="text-5xl font-extrabold leading-tight mb-4">
      <span class="bg-clip-text text-transparent bg-gradient-to-r from-violet-700 via-purple-500 to-cyan-500">Titik</span>
      <span class="text-violet-500">Visual</span>
      <br>
      <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-purple-500 to-cyan-500">
        Creative Studio
      </span>
    </h1>

    <!-- Subjudul -->
    <p class="text-lg text-gray-700 mb-2">
      Dari Ide Menjadi Kenyataan dengan
      <span class="text-pink-500 font-semibold">Sentuhan Kreativitas</span>
    </p>

    <!-- Deskripsi -->
    <p class="text-gray-600 mb-6">
      Titik Visual adalah Digital Creative Studio yang berpengalaman dalam UI/UX Design, Web Development, Mobile App, Social Media Management, dan Custom Merchandise Premium.
      Kami menghadirkan solusi kreatif lengkap untuk mengembangkan bisnis Anda di Yogyakarta dan seluruh Indonesia.
    </p>

    <!-- Tombol -->
    <div class="flex justify-center space-x-4">
 <!-- Tombol Lihat Portofolio -->
  <a href="#"
     class="bg-gradient-to-r from-purple-500 to-cyan-500 text-white px-5 py-2 rounded-full font-medium shadow hover:opacity-90 inline-flex items-center space-x-2">
     
    <!-- SVG Icon -->
    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M6.88407 10.9299C6.82455 10.6991 6.70429 10.4886 6.53581 10.3201C6.36733 10.1516 6.15678 10.0314 5.92607 9.97185L1.83607 8.91719C1.76629 8.89738 1.70487 8.85535 1.66114 8.79748C1.61741 8.73961 1.59375 8.66906 1.59375 8.59652C1.59375 8.52398 1.61741 8.45343 1.66114 8.39556C1.70487 8.33769 1.76629 8.29566 1.83607 8.27585L5.92607 7.22052C6.1567 7.16106 6.36719 7.0409 6.53567 6.87255C6.70414 6.70419 6.82444 6.49378 6.88407 6.26319L7.93873 2.17319C7.95834 2.10313 8.00032 2.04141 8.05828 1.99745C8.11624 1.95349 8.18699 1.92969 8.25973 1.92969C8.33248 1.92969 8.40323 1.95349 8.46119 1.99745C8.51914 2.04141 8.56113 2.10313 8.58073 2.17319L9.63473 6.26319C9.69425 6.4939 9.81451 6.70445 9.98299 6.87293C10.1515 7.04141 10.362 7.16167 10.5927 7.22119L14.6827 8.27519C14.7531 8.29459 14.8151 8.33653 14.8593 8.39457C14.9035 8.45262 14.9274 8.52356 14.9274 8.59652C14.9274 8.66948 14.9035 8.74042 14.8593 8.79847C14.8151 8.85651 14.7531 8.89845 14.6827 8.91785L10.5927 9.97185C10.362 10.0314 10.1515 10.1516 9.98299 10.3201C9.81451 10.4886 9.69425 10.6991 9.63473 10.9299L8.58007 15.0199C8.56046 15.0899 8.51848 15.1516 8.46052 15.1956C8.40256 15.2396 8.33181 15.2634 8.25907 15.2634C8.18632 15.2634 8.11557 15.2396 8.05761 15.1956C7.99966 15.1516 7.95767 15.0899 7.93807 15.0199L6.88407 10.9299Z" stroke="#fff" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M13.5898 2.59375V5.26042" stroke="#fff" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M14.9245 3.92969H12.2578" stroke="#fff" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M2.92578 11.9297V13.263" stroke="#fff" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M3.59115 12.5938H2.25781" stroke="#fff" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <span>Lihat Portofolio</span>
  </a>

      <a href="#"
   class="border border-gray-300 px-5 py-2 rounded-full font-medium text-gray-700 hover:bg-gray-100 inline-flex items-center space-x-2">
  <span>💬</span>
  <span>Konsultasi Gratis</span>
</a>
    </div>
  </div>
</div>

<!-- service -->
<section class="py-20 bg-white text-center">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
      Layanan Unggulan Titik Visual
    </h2>
    <p class="text-gray-500 mb-12 text-lg">
      Solusi kreatif terlengkap dari Titik Visual untuk mengembangkan bisnis digital Anda
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ($services as $service)
      <div class="border rounded-xl p-6 hover:shadow-xl transition duration-300 ease-in-out">
        <div class="bg-purple-50 w-14 h-14 rounded-xl flex items-center justify-center mx-auto mb-4">
          <!-- Optional: jika kamu punya ikon di DB -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
          </svg>
        </div>
        <h3 class="font-bold text-lg text-gray-800 mb-2">{{ $service->name }}</h3>
        <p class="text-sm text-gray-500">{{ $service->description }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>


<!-- Section: Mengapa Memilih Titik Visual -->
<section class="bg-white py-20">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-4xl font-extrabold text-gray-900 mb-4">
      Semua Layanan <span class="text-gray-900">Titik Visual?</span>
    </h2>
    <p class="text-gray-600 text-lg mb-14">
      Solusi kreatif dari titik visual untuk kebutuhan digital dan 
      merchandise Anda
    </p>

    <!-- Judul Digital Creative Services -->
    <h3 class="text-3xl font-extrabold mb-10 text-left">
      <span class="text-blue-700">Digital Creative </span>
      <span class="bg-gradient-to-r from-blue-500 to-pink-500 text-transparent bg-clip-text">Services</span>
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
      @foreach ($services as $service)
        <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-md hover:shadow-lg transition duration-300 relative flex items-start justify-between">
          <!-- Kiri: Ikon dan Teks -->
          <div class="flex gap-4">
            <!-- Ikon -->
            <div class="w-12 h-12 flex items-center justify-center bg-purple-100 text-purple-600 text-2xl rounded-xl">
              {{-- Bisa diganti jadi SVG dinamis dari DB jika tersedia --}}
              <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                <path d="M12 2l9 5-9 5-9-5 9-5z" />
                <path d="M12 22V12" />
              </svg>
            </div>

            <!-- Teks -->
            <div>
              <h3 class="text-base font-bold text-gray-900">{{ $service->title }}</h3>
              <p class="text-sm text-gray-600">{{ $service->short_description ?? 'Deskripsi belum tersedia.' }}</p>
              <p class="text-sm text-purple-600 mt-2 font-semibold">
                Mulai Rp {{ number_format($service->price_min ?? 0, 0, ',', '.') }}
              </p>
            </div>
          </div>

          <!-- Label Populer -->
          @if ($service->is_featured)
            <span class="absolute top-4 right-4 bg-gradient-to-r from-orange-400 to-pink-500 text-white text-xs font-semibold px-3 py-1 rounded-full">
              Populer
            </span>
          @endif

          <!-- Ikon panah -->
          <div class="absolute bottom-4 right-4 text-purple-600">
            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.25 8H13.5833" stroke="#9333EA" stroke-width="1.33333"
                stroke-linecap="round" stroke-linejoin="round" />
              <path d="M8.91797 3.33594L13.5846 8.0026L8.91797 12.6693" stroke="#9333EA"
                stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>


<!-- Section: Custom Merchandise -->
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4">

    <!-- Judul -->
    <div class="flex items-center justify-between mb-10">
      <h2 class="text-3xl font-extrabold bg-gradient-to-r from-orange-500 to-pink-500 text-transparent bg-clip-text">
        Custom Merchandise <span class="text-pink-600">Titik Visual</span>
      </h2>
      <span class="inline-flex items-center gap-1 bg-pink-100 text-pink-600 text-xs font-semibold px-3 py-1 rounded-full">
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.931 6.14062H3.26432C2.89613 6.14062 2.59766 6.4391 2.59766 6.80729V8.14062C2.59766 8.50881 2.89613 8.80729 3.26432 8.80729H13.931C14.2992 8.80729 14.5977 8.50881 14.5977 8.14062V6.80729C14.5977 6.4391 14.2992 6.14062 13.931 6.14062Z" stroke="#C2410C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M8.59766 6.14062V14.8073" stroke="#C2410C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M13.263 8.80469V13.4714C13.263 13.825 13.1225 14.1641 12.8725 14.4142C12.6224 14.6642 12.2833 14.8047 11.9297 14.8047H5.26302C4.9094 14.8047 4.57026 14.6642 4.32021 14.4142C4.07016 14.1641 3.92969 13.825 3.92969 13.4714V8.80469" stroke="#C2410C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M5.59635 6.13831C5.15433 6.13831 4.7304 5.96272 4.41784 5.65016C4.10528 5.3376 3.92969 4.91367 3.92969 4.47165C3.92969 4.02962 4.10528 3.6057 4.41784 3.29313C4.7304 2.98057 5.15433 2.80498 5.59635 2.80498C6.23948 2.79377 6.8697 3.10582 7.40485 3.70042C7.93999 4.29502 8.3552 5.14458 8.59635 6.13831C8.8375 5.14458 9.25272 4.29502 9.78786 3.70042C10.323 3.10582 10.9532 2.79377 11.5964 2.80498C12.0384 2.80498 12.4623 2.98057 12.7749 3.29313C13.0874 3.6057 13.263 4.02962 13.263 4.47165C13.263 4.91367 13.0874 5.3376 12.7749 5.65016C12.4623 5.96272 12.0384 6.13831 11.5964 6.13831" stroke="#C2410C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Kualitas Premium
      </span>
    </div>

    <!-- Grid Produk -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
      <!-- Card Item -->
      <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm hover:shadow-md transition relative">
        <!-- Icon -->
        <div class="w-12 h-12 mb-4 mx-auto flex items-center justify-center rounded-xl">
  <!-- Ikon SVG Kopi -->
  <svg width="48" height="48" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="0.398438" y="0.601562" width="56" height="56" rx="12" fill="#ECFDF5"/>
    <path d="M26.3984 18.6016V20.6016" stroke="#EA580C" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M30.3984 18.6016V20.6016" stroke="#EA580C" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M32.3984 24.6016C32.6637 24.6016 32.918 24.7069 33.1055 24.8945C33.2931 25.082 33.3984 25.3363 33.3984 25.6016V33.6016C33.3984 34.6624 32.977 35.6798 32.2269 36.43C31.4767 37.1801 30.4593 37.6016 29.3984 37.6016H23.3984C22.3376 37.6016 21.3202 37.1801 20.57 36.43C19.8199 35.6798 19.3984 34.6624 19.3984 33.6016V25.6016C19.3984 25.3363 19.5038 25.082 19.6913 24.8945C19.8789 24.7069 20.1332 24.6016 20.3984 24.6016H34.3984C35.4593 24.6016 36.4767 25.023 37.2269 25.7731C37.977 26.5233 38.3984 27.5407 38.3984 28.6016C38.3984 29.6624 37.977 30.6798 37.2269 31.43C36.4767 32.1801 35.4593 32.6016 34.3984 32.6016H33.3984" stroke="#EA580C" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M22.3984 18.6016V20.6016" stroke="#EA580C" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
</div>
        <!-- Judul -->
        <h3 class="text-base font-bold text-center text-gray-800">Custom Drinkware</h3>
        <!-- Label -->
        <div class="flex justify-center mt-1 mb-2">
          <span class="text-xs font-semibold bg-green-100 text-green-600 px-3 py-0.5 rounded-full">Terbaik</span>
        </div>
        <!-- Deskripsi -->
        <p class="text-sm text-center text-gray-500 mb-4">Botol minum, tumbler, mug, gelas kaca custom</p>
        <!-- Harga -->
        <div class="flex justify-between items-center">
          <p class="text-sm font-semibold text-orange-500">Mulai Rp 25rb/pcs</p>
          <span class="text-orange-500">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.92969 8.60156H13.263" stroke="#EA580C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M8.59766 3.9375L13.2643 8.60417L8.59766 13.2708" stroke="#EA580C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </div>
      </div>

      <!-- Ulangi Card untuk lainnya -->
      <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm hover:shadow-md transition relative">
  <div class="w-12 h-12 mb-4 mx-auto flex items-center justify-center rounded-xl bg-green-50">
    <!-- Ikon SVG Tas -->
    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M6.39844 2.60156L3.39844 6.60156V20.6016C3.39844 21.132 3.60915 21.6407 3.98422 22.0158C4.3593 22.3908 4.868 22.6016 5.39844 22.6016H19.3984C19.9289 22.6016 20.4376 22.3908 20.8127 22.0158C21.1877 21.6407 21.3984 21.132 21.3984 20.6016V6.60156L18.3984 2.60156H6.39844Z" 
        stroke="#EA580C" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M3.39844 6.60156H21.3984" 
        stroke="#EA580C" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M16.3984 10.6016C16.3984 11.6624 15.977 12.6798 15.2269 13.43C14.4767 14.1801 13.4593 14.6016 12.3984 14.6016C11.3376 14.6016 10.3202 14.1801 9.57001 13.43C8.81986 12.6798 8.39844 11.6624 8.39844 10.6016" 
        stroke="#EA580C" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </div>
  <h3 class="text-base font-bold text-center text-gray-800">Custom Bags</h3>
  <div class="flex justify-center mt-1 mb-2">
    <span class="text-xs font-semibold bg-green-100 text-green-600 px-3 py-0.5 rounded-full">Terbaik</span>
  </div>
        <p class="text-sm text-center text-gray-500 mb-4">Totebag canvas, tas furing, tas kertas branded</p>
        <div class="flex justify-between items-center">
          <p class="text-sm font-semibold text-orange-500">Mulai Rp 15rb/pcs</p>
          <span class="text-orange-500">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.92969 8.60156H13.263" stroke="#EA580C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M8.59766 3.9375L13.2643 8.60417L8.59766 13.2708" stroke="#EA580C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </div>
      </div>

      <!-- Item: Corporate Gifts -->
<div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm hover:shadow-md transition relative">
  <div class="w-12 h-12 mb-4 mx-auto flex items-center justify-center rounded-xl bg-green-50">
    <!-- Ikon SVG Corporate Gifts -->
    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M20.3984 8.60156H4.39844C3.84615 8.60156 3.39844 9.04928 3.39844 9.60156V11.6016C3.39844 12.1538 3.84615 12.6016 4.39844 12.6016H20.3984C20.9507 12.6016 21.3984 12.1538 21.3984 11.6016V9.60156C21.3984 9.04928 20.9507 8.60156 20.3984 8.60156Z" 
        stroke="#EA580C" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
      <path d="M12.3984 8.60156V21.6016" 
        stroke="#EA580C" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
      <path d="M19.3984 12.6016V19.6016C19.3984 20.132 19.1877 20.6407 18.8127 21.0158C18.4376 21.3908 17.9289 21.6016 17.3984 21.6016H7.39844C6.868 21.6016 6.3593 21.3908 5.98422 21.0158C5.60915 20.6407 5.39844 20.132 5.39844 19.6016V12.6016" 
        stroke="#EA580C" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
      <path d="M7.89844 8.602C7.2354 8.602 6.59951 8.33861 6.13067 7.86977C5.66183 7.40093 5.39844 6.76504 5.39844 6.102C5.39844 5.43896 5.66183 4.80307 6.13067 4.33423C6.59951 3.86539 7.2354 3.602 7.89844 3.602C8.86312 3.58519 9.80846 4.05326 10.6112 4.94516C11.4139 5.83706 12.0367 7.1114 12.3984 8.602C12.7602 7.1114 13.383 5.83706 14.1857 4.94516C14.9884 4.05326 15.9338 3.58519 16.8984 3.602C17.5615 3.602 18.1974 3.86539 18.6662 4.33423C19.135 4.80307 19.3984 5.43896 19.3984 6.102C19.3984 6.76504 19.135 7.40093 18.6662 7.86977C18.1974 8.33861 17.5615 8.602 16.8984 8.602" 
        stroke="#EA580C" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </div>

  <h3 class="text-base font-bold text-center text-gray-800">Corporate Gifts</h3>

  <div class="flex justify-center mt-1 mb-2">
    <span class="text-xs font-semibold bg-green-100 text-green-600 px-3 py-0.5 rounded-full">Terbaik</span>
  </div>

  <p class="text-sm text-center text-gray-500 mb-4">
    Powerbank, flashdisk, paket seminar kit
  </p>

  <div class="flex justify-between items-center">
    <p class="text-sm font-semibold text-orange-500">Mulai Rp 50rb/pcs</p>
    <span class="text-orange-500">
      <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.92969 8.60156H13.263" stroke="#EA580C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M8.59766 3.9375L13.2643 8.60417L8.59766 13.2708" stroke="#EA580C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
    </span>
  </div>
</div>


      <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm hover:shadow-md transition relative">
  <div class="w-12 h-12 mb-4 mx-auto flex items-center justify-center rounded-xl bg-green-50">
    <!-- Ikon SVG Lifestyle Products -->
    <svg width="48" height="48" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.398438" y="0.601562" width="56" height="56" rx="12" fill="#F0FDF4"/>
      <path d="M32.3984 36.6016V20.6016C32.3984 20.0711 32.1877 19.5624 31.8127 19.1873C31.4376 18.8123 30.9289 18.6016 30.3984 18.6016H26.3984C25.868 18.6016 25.3593 18.8123 24.9842 19.1873C24.6092 19.5624 24.3984 20.0711 24.3984 20.6016V36.6016" 
        stroke="#EA580C" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M36.3984 22.6016H20.3984C19.2939 22.6016 18.3984 23.497 18.3984 24.6016V34.6016C18.3984 35.7061 19.2939 36.6016 20.3984 36.6016H36.3984C37.503 36.6016 38.3984 35.7061 38.3984 34.6016V24.6016C38.3984 23.497 37.503 22.6016 36.3984 22.6016Z" 
        stroke="#EA580C" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </div>
  <h3 class="text-base font-bold text-center text-gray-800">Lifestyle Products</h3>
  <div class="flex justify-center mt-1 mb-2">
    <span class="text-xs font-semibold bg-green-100 text-green-600 px-3 py-0.5 rounded-full">Terbaik</span>
  </div>
        <p class="text-sm text-center text-gray-500 mb-4">Payung custom, jam dinding, pulpen branded</p>
        <div class="flex justify-between items-center">
          <p class="text-sm font-semibold text-orange-500">Mulai Rp 30rb/pcs</p>
          <span class="text-orange-500">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.92969 8.60156H13.263" stroke="#EA580C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M8.59766 3.9375L13.2643 8.60417L8.59766 13.2708" stroke="#EA580C" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </div>
      </div>
    </div>

    <!-- Tombol -->
    <div class="mt-10 text-center">
      <a href="#" class="inline-flex items-center gap-2 text-purple-600 font-semibold border border-purple-500 px-5 py-2 rounded-full hover:bg-purple-50 transition">
        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_176_1600)">
          <path d="M2.23047 8.0026C2.23047 8.0026 4.23047 3.33594 8.89714 3.33594C13.5638 3.33594 15.5638 8.0026 15.5638 8.0026C15.5638 8.0026 13.5638 12.6693 8.89714 12.6693C4.23047 12.6693 2.23047 8.0026 2.23047 8.0026Z" stroke="#7E22CE" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M8.89844 10C10.003 10 10.8984 9.10457 10.8984 8C10.8984 6.89543 10.003 6 8.89844 6C7.79387 6 6.89844 6.89543 6.89844 8C6.89844 9.10457 7.79387 10 8.89844 10Z" stroke="#7E22CE" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          </g>
          <defs>
            <clipPath id="clip0_176_1600">
              <rect width="16" height="16" fill="white" transform="translate(0.898438)"/>
              </clipPath>
          </defs>
        </svg>
        Lihat Semua Layanan Titik Visual
      </a>
    </div>
  </div>
</section>

<!-- Section: Hero Slider -->
<section class="pt-16">
  <div class="max-w-6xl mx-auto px-4">
    <div class="bg-purple-100 rounded-3xl p-12 min-h-[280px] relative shadow-md">

      <!-- Tombol kiri -->
      <button class="absolute top-1/2 -left-4 transform -translate-y-1/2 bg-white w-8 h-8 rounded-full shadow flex items-center justify-center">
        <svg class="w-7 h-7 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 30 30">
          <path d="M15 19l-7-7 7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>

      <!-- Konten -->
      <div class="text-white">
        <h3 class="text-xl font-semibold text-white mb-1">Digital Creative Services</h3>
        <p class="text-sm text-white/80">Logo Design, Social Media Management, Brand Identity</p>
      </div>

      <!-- Tombol -->
      <div class="absolute bottom-8 right-8">
        <a href="#" class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-4 py-2 text-sm font-semibold rounded-lg inline-flex items-center gap-1 shadow-md">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M15.5205 12.0795V14.0795C15.5212 14.2652 15.4832 14.449 15.4088 14.6191C15.3344 14.7892 15.2253 14.9419 15.0885 15.0675C14.9517 15.193 14.7902 15.2885 14.6143 15.348C14.4384 15.4075 14.252 15.4296 14.0671 15.4129C12.0157 15.19 10.0451 14.489 8.3138 13.3662C6.70302 12.3427 5.33735 10.977 4.3138 9.36621C3.18712 7.62701 2.48596 5.64687 2.26713 3.58621C2.25047 3.40186 2.27238 3.21605 2.33146 3.04063C2.39055 2.8652 2.48551 2.704 2.61031 2.56729C2.7351 2.43058 2.887 2.32135 3.05632 2.24656C3.22565 2.17177 3.40869 2.13305 3.5938 2.13288H5.5938C5.91733 2.12969 6.23099 2.24426 6.4763 2.45523C6.72162 2.6662 6.88185 2.95917 6.92713 3.27954C7.01155 3.91959 7.1681 4.54803 7.3938 5.15288C7.48349 5.39149 7.5029 5.65082 7.44973 5.90013C7.39656 6.14944 7.27304 6.37828 7.0938 6.55954L6.24713 7.40621C7.19617 9.07524 8.5781 10.4572 10.2471 11.4062L11.0938 10.5595C11.2751 10.3803 11.5039 10.2568 11.7532 10.2036C12.0025 10.1504 12.2618 10.1698 12.5005 10.2595C13.1053 10.4852 13.7338 10.6418 14.3738 10.7262C14.6976 10.7719 14.9934 10.935 15.2048 11.1845C15.4162 11.4341 15.5286 11.7526 15.5205 12.0795Z" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Hubungi Titik Visual
        </a>
      </div>

      <!-- Dot navigasi -->
      <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex gap-2">
        <div class="w-2 h-2 bg-white/50 rounded-full"></div>
        <div class="w-2 h-2 bg-white rounded-full"></div>
        <div class="w-2 h-2 bg-white/50 rounded-full"></div>
      </div>

      <!-- Tombol kanan -->
      <button class="absolute top-1/2 -right-4 transform -translate-y-1/2 bg-white w-8 h-8 rounded-full shadow flex items-center justify-center">
        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </div>
  </div>
</section>

<!-- Section: Pencapaian -->
<section class="py-20 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-2">Pencapaian Titik Visual</h2>
    <p class="text-gray-500 mb-10">Kepercayaan klien adalah prioritas utama kami</p>

    <!-- Grid Pencapaian -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <!-- Item 1 -->
<div class="bg-white rounded-2xl shadow-sm p-6">
  <div class="w-10 h-10 mx-auto mb-2 rounded-lg flex items-center justify-center">
    <!-- Ikon Target SVG -->
    <svg width="40" height="40" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.398438" y="0.796875" width="48" height="48" rx="12" fill="url(#paint0_linear_target)" />
      <path d="M24.3984 34.7969C29.9213 34.7969 34.3984 30.3197 34.3984 24.7969C34.3984 19.274 29.9213 14.7969 24.3984 14.7969C18.8756 14.7969 14.3984 19.274 14.3984 24.7969C14.3984 30.3197 18.8756 34.7969 24.3984 34.7969Z" 
        stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M24.3984 30.7969C27.7121 30.7969 30.3984 28.1106 30.3984 24.7969C30.3984 21.4832 27.7121 18.7969 24.3984 18.7969C21.0847 18.7969 18.3984 21.4832 18.3984 24.7969C18.3984 28.1106 21.0847 30.7969 24.3984 30.7969Z" 
        stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M24.3984 26.7969C25.503 26.7969 26.3984 25.9014 26.3984 24.7969C26.3984 23.6923 25.503 22.7969 24.3984 22.7969C23.2939 22.7969 22.3984 23.6923 22.3984 24.7969C22.3984 25.9014 23.2939 26.7969 24.3984 26.7969Z" 
        stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <defs>
        <linearGradient id="paint0_linear_target" x1="0.398438" y1="0.796875" x2="48.3984" y2="48.7969" gradientUnits="userSpaceOnUse">
          <stop stop-color="#FCE7F3"/>
          <stop offset="1" stop-color="#E4E4E7"/>
        </linearGradient>
      </defs>
    </svg>
  </div>
  <h3 class="text-2xl font-bold text-gray-800">500+</h3>
  <p class="text-sm text-gray-500">Proyek Selesai</p>
</div>
      <!-- Item 2 -->
<div class="bg-white rounded-2xl shadow-sm p-6">
  <div class="w-10 h-10 mx-auto mb-2 rounded-lg flex items-center justify-center">
    <!-- Ikon Medali SVG -->
    <svg width="40" height="40" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.398438" y="0.796875" width="48" height="48" rx="12" fill="url(#paint0_linear_medali)" />
      <path d="M27.8771 25.6875L29.3921 34.2135C29.4091 34.3139 29.395 34.4171 29.3518 34.5093C29.3085 34.6014 29.2381 34.6782 29.1501 34.7293C29.062 34.7804 28.9604 34.8034 28.8589 34.7952C28.7575 34.787 28.6609 34.7481 28.5821 34.6835L25.0021 31.9965C24.8293 31.8674 24.6194 31.7976 24.4036 31.7976C24.1879 31.7976 23.978 31.8674 23.8051 31.9965L20.2191 34.6825C20.1405 34.7469 20.044 34.7858 19.9426 34.794C19.8413 34.8022 19.7398 34.7793 19.6518 34.7284C19.5638 34.6774 19.4934 34.6008 19.4501 34.5088C19.4067 34.4168 19.3924 34.3138 19.4091 34.2135L20.9231 25.6875" 
        stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M24.3984 26.7969C27.7121 26.7969 30.3984 24.1106 30.3984 20.7969C30.3984 17.4832 27.7121 14.7969 24.3984 14.7969C21.0847 14.7969 18.3984 17.4832 18.3984 20.7969C18.3984 24.1106 21.0847 26.7969 24.3984 26.7969Z" 
        stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <defs>
        <linearGradient id="paint0_linear_medali" x1="0.398438" y1="0.796875" x2="48.3984" y2="48.7969" gradientUnits="userSpaceOnUse">
          <stop stop-color="#FCE7F3" />
          <stop offset="1" stop-color="#E4E4E7" />
        </linearGradient>
      </defs>
    </svg>
  </div>
  <h3 class="text-2xl font-bold text-gray-800">200+</h3>
  <p class="text-sm text-gray-500">Klien Puas</p>
</div>
      <!-- Item 3 -->
<div class="bg-white rounded-2xl shadow-sm p-6">
  <div class="w-10 h-10 mx-auto mb-2 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center">
    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M12.3984 2.79688L15.4884 9.05688L22.3984 10.0669L17.3984 14.9369L18.5784 21.8169L12.3984 18.5669L6.21844 21.8169L7.39844 14.9369L2.39844 10.0669L9.30844 9.05688L12.3984 2.79688Z" 
        stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </div>
  <h3 class="text-2xl font-bold text-gray-800">5+</h3>
  <p class="text-sm text-gray-500">Tahun Pengalaman</p>
</div>
      <!-- Item 4 -->
<div class="bg-white rounded-2xl shadow-sm p-6">
  <div class="w-10 h-10 mx-auto mb-2 rounded-lg flex items-center justify-center">
    <!-- Ikon Petir SVG -->
    <svg width="40" height="40" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.398438" y="0.796875" width="48" height="48" rx="12" fill="url(#paint0_linear)"/>
      <path d="M16.3979 26.7995C16.2087 26.8001 16.0232 26.7471 15.8629 26.6465C15.7026 26.5459 15.5742 26.4018 15.4925 26.2311C15.4108 26.0604 15.3792 25.8701 15.4014 25.6821C15.4236 25.4942 15.4987 25.3164 15.6179 25.1695L25.5179 14.9695C25.5922 14.8838 25.6934 14.8258 25.8049 14.8052C25.9164 14.7846 26.0317 14.8025 26.1317 14.856C26.2317 14.9095 26.3105 14.9954 26.3553 15.0996C26.4 15.2038 26.408 15.3201 26.3779 15.4295L24.4579 21.4495C24.4013 21.601 24.3823 21.764 24.4025 21.9245C24.4228 22.085 24.4816 22.2382 24.574 22.3709C24.6665 22.5037 24.7897 22.612 24.9332 22.6866C25.0767 22.7613 25.2362 22.8 25.3979 22.7995H32.3979C32.5872 22.7988 32.7727 22.8519 32.933 22.9525C33.0933 23.0531 33.2217 23.1971 33.3034 23.3678C33.3851 23.5385 33.4166 23.7289 33.3944 23.9168C33.3722 24.1048 33.2972 24.2825 33.1779 24.4295L23.2779 34.6295C23.2037 34.7152 23.1025 34.7731 22.991 34.7937C22.8794 34.8144 22.7642 34.7965 22.6642 34.743C22.5642 34.6895 22.4854 34.6036 22.4406 34.4994C22.3959 34.3952 22.3879 34.2788 22.4179 34.1695L24.3379 28.1495C24.3946 27.998 24.4136 27.835 24.3934 27.6745C24.3731 27.514 24.3143 27.3608 24.2219 27.2281C24.1294 27.0953 24.0062 26.987 23.8627 26.9123C23.7192 26.8377 23.5597 26.799 23.3979 26.7995H16.3979Z" 
        stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <defs>
        <linearGradient id="paint0_linear" x1="0.398438" y1="0.796875" x2="48.3984" y2="48.7969" gradientUnits="userSpaceOnUse">
          <stop stop-color="#FCE7F3"/>
          <stop offset="1" stop-color="#E4E4E7"/>
        </linearGradient>
      </defs>
    </svg>
  </div>
  <h3 class="text-2xl font-bold text-gray-800">24/7</h3>
  <p class="text-sm text-gray-500">Support Titik Visual</p>
</div>
</section>

<!-- Section: Portfolio Karya -->
<section class="pt-20 bg-white">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-2">Portfolio Karya Titik Visual</h2>
    <p class="text-gray-500 mb-10">Karya terbaik yang telah kami ciptakan untuk klien</p>

    <!-- Portfolio Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      
@php
  $gradients = [
    'from-red-300 to-pink-200',
    'from-purple-400 to-indigo-300',
    'from-green-400 to-green-200',
    'from-yellow-300 to-orange-200',
    'from-blue-400 to-cyan-300',
    'from-pink-400 to-red-200'
  ];
@endphp

@foreach ($portfolios->take(3) as $portfolio)
  <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden border">
    
    <!-- Thumbnail -->
    <div class="relative h-52 bg-gradient-to-br {{ $gradients[$loop->index % count($gradients)] }} flex items-center justify-center">
      
      <!-- Ikon Panah Ganda Kiri -->
      <svg class="absolute top-2 left-2 w-6 h-6 text-white opacity-60" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M16 18l6-6-6-6M8 6l-6 6 6 6" />
      </svg>

      <!-- Tahun -->
      <span class="absolute top-2 right-2 bg-white text-xs font-semibold px-3 py-0.5 rounded-full shadow text-gray-700">
        {{ \Carbon\Carbon::parse($portfolio->created_at)->format('Y') }}
      </span>

      <!-- Ikon Play -->
      <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-5.197-3.027A1 1 0 008 9.027v5.946a1 1 0 001.555.832l5.197-3.027a1 1 0 000-1.66z" />
      </svg>
    </div>

    <!-- Konten -->
    <div class="p-4 text-left space-y-2">
      <!-- Kategori -->
      <span class="inline-block bg-gray-100 text-gray-600 text-xs font-semibold px-3 py-1 rounded-full">
        {{ $portfolio->category->name ?? 'Tanpa Kategori' }}
      </span>

      <!-- Judul -->
      <h3 class="font-bold text-lg text-gray-800">{{ $portfolio->title }}</h3>

      <!-- Deskripsi -->
      <p class="text-sm text-gray-600">{{ $portfolio->description }}</p>

      <!-- Info Bawah -->
      <div class="flex items-center justify-between pt-2">
        <p class="text-sm text-gray-500">Client: {{ $portfolio->client ?? '-' }}</p>
        <a href="{{ route('portfolio.detail', $portfolio->slug) }}" class="text-indigo-500 hover:text-indigo-600">
          <svg width="17" height="17" fill="none" stroke="#9333EA" stroke-width="1.3" viewBox="0 0 17 17">
            <path d="M10.5977 2.89844H14.5977V6.89844" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7.26562 10.2318L14.599 2.89844" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12.5977 9.5651V13.5651C12.5977 13.9187 12.4572 14.2579 12.2071 14.5079C11.9571 14.758 11.6179 14.8984 11.2643 14.8984H3.93099C3.57737 14.8984 3.23823 14.758 2.98818 14.5079C2.73813 14.2579 2.59766 13.9187 2.59766 13.5651V6.23177C2.59766 5.87815 2.73813 5.53901 2.98818 5.28896C3.23823 5.03891 3.57737 4.89844 3.93099 4.89844H7.93099" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
@endforeach
</section>

 <!-- Tombol -->
<div class="mt-10 text-center">
  <a href="#" class="inline-flex items-center gap-2 text-purple-600 font-semibold border border-purple-500 px-5 py-2 rounded-full hover:bg-purple-50 transition">
    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0_176_1600)">
        <path d="M2.23047 8.0026C2.23047 8.0026 4.23047 3.33594 8.89714 3.33594C13.5638 3.33594 15.5638 8.0026 15.5638 8.0026C15.5638 8.0026 13.5638 12.6693 8.89714 12.6693C4.23047 12.6693 2.23047 8.0026 2.23047 8.0026Z" stroke="#7E22CE" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M8.89844 10C10.003 10 10.8984 9.10457 10.8984 8C10.8984 6.89543 10.003 6 8.89844 6C7.79387 6 6.89844 6.89543 6.89844 8C6.89844 9.10457 7.79387 10 8.89844 10Z" stroke="#7E22CE" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      </g>
      <defs>
        <clipPath id="clip0_176_1600">
          <rect width="16" height="16" fill="white" transform="translate(0.898438)"/>
        </clipPath>
      </defs>
    </svg>
    Lihat Semua Layanan Titik Visual
  </a>
</div>
</div>

<section class="py-8 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      
      <!-- Kartu 1 -->
      <div class="bg-white shadow-md rounded-xl p-4 border">
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-600">
              <!-- Icon -->
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.9061 21.7928C15.7185 21.9803 15.4642 22.0856 15.1991 22.0856C14.9339 22.0856 14.6796 21.9803 14.4921 21.7928L12.9061 20.2069C12.7186 20.0193 12.6133 19.765 12.6133 19.4998C12.6133 19.2347 12.7186 18.9804 12.9061 18.7928L18.4921 13.2068C18.6796 13.0194 18.9339 12.9141 19.1991 12.9141C19.4642 12.9141 19.7185 13.0194 19.9061 13.2068L21.4921 14.7928C21.6795 14.9804 21.7849 15.2347 21.7849 15.4998C21.7849 15.765 21.6795 16.0193 21.4921 16.2068L15.9061 21.7928Z" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.1992 13.5L16.8242 6.62601C16.7868 6.43899 16.6967 6.26656 16.5645 6.12907C16.4324 5.99157 16.2636 5.89475 16.0782 5.85001L3.43422 2.52801C3.26765 2.48773 3.09353 2.49094 2.92855 2.53733C2.76358 2.58371 2.61329 2.67172 2.49211 2.79289C2.37093 2.91407 2.28293 3.06436 2.23655 3.22933C2.19016 3.39431 2.18695 3.56843 2.22722 3.73501L5.54922 16.379C5.59397 16.5644 5.69079 16.7331 5.82829 16.8653C5.96578 16.9975 6.1382 17.0876 6.32522 17.125L13.1992 18.5" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2.5 2.79688L9.786 10.0829" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M11.1992 13.5C12.3038 13.5 13.1992 12.6046 13.1992 11.5C13.1992 10.3954 12.3038 9.5 11.1992 9.5C10.0946 9.5 9.19922 10.3954 9.19922 11.5C9.19922 12.6046 10.0946 13.5 11.1992 13.5Z" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div>
              <h3 class="font-bold text-lg">UI/UX Designer</h3>
              <p class="text-sm text-gray-600">Bergabung dengan tim Titik Visual sebagai UI/UX Designer</p>
            </div>
          </div>
          <span class="text-xs px-2 py-1 bg-purple-100 text-purple-600 rounded-full">💼 Magang</span>
        </div>
        <ul class="text-sm text-gray-700 space-y-1 mb-4">
          <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Mahasiswa DKV, Multimedia, atau relevan</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Menguasai Figma, Adobe XD, Sketch</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Memahami prinsip UI/UX design</span>
            </div>
        </ul>
        <a href="#" class="block w-full text-center text-white bg-gradient-to-r from-purple-500 to-pink-500 py-2 rounded-lg font-semibold hover:opacity-90 transition">→ Lamar Sekarang</a>
      </div>

      <!-- Duplikat dan ubah sesuai kebutuhan -->
      <div class="bg-white shadow-md rounded-xl p-6 border">
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600">
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.1992 18.5L22.1992 12.5L16.1992 6.5" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.19922 6.5L2.19922 12.5L8.19922 18.5" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div>
              <h3 class="font-bold text-lg">Web Developer</h3>
              <p class="text-sm text-gray-600">Bangun website dan aplikasi web bersama tim Titik Visual</p>
            </div>
          </div>
          <span class="text-xs px-2 py-1 bg-purple-100 text-purple-600 rounded-full">💼 Magang</span>
        </div>
        <ul class="text-sm text-gray-700 space-y-1 mb-4">
          <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Mahasiswa Informatika, Sistem informasi</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Familiar dengan React, Next.js</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Menguasai HTML, CSS, JavaScript</span>
            </div>
        </ul>
        <a href="#" class="block w-full text-center text-white bg-gradient-to-r from-sky-500 to-cyan-500 py-2 rounded-lg font-semibold hover:opacity-90 transition">→ Lamar Sekarang</a>
      </div>

      <!-- Digital Marketing -->
      <div class="bg-white shadow-md rounded-xl p-6 border">
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600">
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.1992 3.10156H4.19922C3.09465 3.10156 2.19922 3.99699 2.19922 5.10156V15.1016C2.19922 16.2061 3.09465 17.1016 4.19922 17.1016H20.1992C21.3038 17.1016 22.1992 16.2061 22.1992 15.1016V5.10156C22.1992 3.99699 21.3038 3.10156 20.1992 3.10156Z" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.1992 17.1016V21.1016" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div>
              <h3 class="font-bold text-lg">Digital Marketing Specialist</h3>
              <p class="text-sm text-gray-600">Kembangkan strategi digital marketing di Titik Visual</p>
            </div>
          </div>
          <span class="text-xs px-2 py-1 bg-purple-100 text-purple-600 rounded-full">💼 Magang</span>
        </div>
        <ul class="text-sm text-gray-700 space-y-1 mb-4">
          <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Mahasiswa aktif (minimal semester 4)</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Jurusan pemasaran, komunikasi, bisnis</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Memahami SEO, Social Media, Email Marketing</span>
            </div>
        </ul>
        <a href="#" class="block w-full text-center text-white bg-gradient-to-r from-cyan-500 to-blue-600 py-2 rounded-lg font-semibold hover:opacity-90 transition">→ Lamar Sekarang</a>
      </div>

      <!-- Social Media -->
      <div class="bg-white shadow-md rounded-xl p-6 border">
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-pink-100 flex items-center justify-center text-pink-600">
             <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.1992 7.10156L13.6992 15.6016L8.69922 10.6016L2.19922 17.1016" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M16.1992 7.10156H22.1992V13.1016" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
             </svg>
            </div>
            <div>
              <h3 class="font-bold text-lg">Social Media Specialist</h3>
              <p class="text-sm text-gray-600">Kelola dan kembangkan media sosial klien Titik Visual</p>
            </div>
          </div>
          <span class="text-xs px-2 py-1 bg-purple-100 text-purple-600 rounded-full">💼 Magang</span>
        </div>
        <ul class="text-sm text-gray-700 space-y-1 mb-4">
             <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Mahasiswa aktif (minimal semester 4)</span>
            </div>
               <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Memahami platform media sosial</span>
            </div>
               <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Kreatif dalam content creation</span>
            </div>
        </ul>
        <a href="#" class="block w-full text-center text-white bg-gradient-to-r from-pink-500 to-rose-500 py-2 rounded-lg font-semibold hover:opacity-90 transition">→ Lamar Sekarang</a>
      </div>

    </div>
  </div>
</section>


<!-- Section: Kontak & Ajakan -->
<section class="pt-20 pb-10 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-2">Mari Berkreatif Bersama Titik Visual</h2>
    <p class="text-center text-gray-500 mb-10">Siap mewujudkan ide kreatif Anda bersama tim Titik Visual?</p>

    <div class="grid md:grid-cols-2 gap-6">
      <!-- Kontak Kiri -->
      <div class="space-y-4">
        <!-- WhatsApp -->
        <div class="bg-gray-50 border rounded-xl p-4 flex items-center gap-4">
          <div class="bg-green-100 text-green-500 p-2 rounded-full">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.5344 14.7928V17.2928C18.5353 17.5249 18.4878 17.7546 18.3948 17.9672C18.3018 18.1799 18.1655 18.3708 17.9944 18.5277C17.8234 18.6846 17.6215 18.804 17.4017 18.8784C17.1818 18.9527 16.9488 18.9803 16.7177 18.9595C14.1534 18.6808 11.6902 17.8046 9.52603 16.4011C7.51256 15.1217 5.80548 13.4146 4.52603 11.4011C3.11768 9.22713 2.24124 6.75195 1.9677 4.17612C1.94688 3.94568 1.97426 3.71342 2.04812 3.49414C2.12197 3.27486 2.24068 3.07336 2.39667 2.90247C2.55267 2.73158 2.74254 2.59505 2.95419 2.50156C3.16585 2.40807 3.39465 2.35967 3.62603 2.35946H6.12603C6.53046 2.35548 6.92253 2.49869 7.22917 2.7624C7.53581 3.02611 7.7361 3.39233 7.7927 3.79279C7.89822 4.59284 8.09391 5.37839 8.37604 6.13446C8.48815 6.43273 8.51242 6.75688 8.44596 7.06852C8.37949 7.38016 8.22509 7.66621 8.00103 7.89279L6.9427 8.95112C8.129 11.0374 9.85641 12.7648 11.9427 13.9511L13.001 12.8928C13.2276 12.6687 13.5137 12.5143 13.8253 12.4479C14.1369 12.3814 14.4611 12.4057 14.7594 12.5178C15.5154 12.7999 16.301 12.9956 17.101 13.1011C17.5058 13.1582 17.8755 13.3621 18.1398 13.674C18.4041 13.9859 18.5445 14.3841 18.5344 14.7928Z" stroke="#374151" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div>
            <p class="font-semibold text-sm">WhatsApp Titik Visual</p>
            <p class="text-sm text-gray-600">081804376001</p>
          </div>
        </div>

        <!-- Telepon -->
        <div class="bg-gray-50 border rounded-xl p-4 flex items-center gap-4">
          <div class="bg-green-100 text-green-500 p-2 rounded-full">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.5344 14.7928V17.2928C18.5353 17.5249 18.4878 17.7546 18.3948 17.9672C18.3018 18.1799 18.1655 18.3708 17.9944 18.5277C17.8234 18.6846 17.6215 18.804 17.4017 18.8784C17.1818 18.9527 16.9488 18.9803 16.7177 18.9595C14.1534 18.6808 11.6902 17.8046 9.52603 16.4011C7.51256 15.1217 5.80548 13.4146 4.52603 11.4011C3.11768 9.22713 2.24124 6.75195 1.9677 4.17612C1.94688 3.94568 1.97426 3.71342 2.04812 3.49414C2.12197 3.27486 2.24068 3.07336 2.39667 2.90247C2.55267 2.73158 2.74254 2.59505 2.95419 2.50156C3.16585 2.40807 3.39465 2.35967 3.62603 2.35946H6.12603C6.53046 2.35548 6.92253 2.49869 7.22917 2.7624C7.53581 3.02611 7.7361 3.39233 7.7927 3.79279C7.89822 4.59284 8.09391 5.37839 8.37604 6.13446C8.48815 6.43273 8.51242 6.75688 8.44596 7.06852C8.37949 7.38016 8.22509 7.66621 8.00103 7.89279L6.9427 8.95112C8.129 11.0374 9.85641 12.7648 11.9427 13.9511L13.001 12.8928C13.2276 12.6687 13.5137 12.5143 13.8253 12.4479C14.1369 12.3814 14.4611 12.4057 14.7594 12.5178C15.5154 12.7999 16.301 12.9956 17.101 13.1011C17.5058 13.1582 17.8755 13.3621 18.1398 13.674C18.4041 13.9859 18.5445 14.3841 18.5344 14.7928Z" stroke="#374151" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div>
            <p class="font-semibold text-sm">Telepon Titik Visual</p>
            <p class="text-sm text-gray-600">081804376001</p>
          </div>
        </div>

        <!-- Email -->
        <div class="bg-gray-50 border rounded-xl p-4 flex items-center gap-4">
          <div class="bg-gray-200 text-gray-600 p-2 rounded-full">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
          <div>
            <p class="font-semibold text-sm">Email Titik Visual</p>
            <p class="text-sm text-gray-600">titikvisualjogja@gmail.com</p>
          </div>
        </div>
      </div>

      <!-- Ajakan Proyek -->
      <div class="bg-gray-50 border rounded-xl p-6">
        <h3 class="text-lg font-semibold mb-2">Siap Memulai Proyek?</h3>
        <p class="text-sm text-gray-600 mb-4">
          Konsultasikan kebutuhan UI/UX, web development, digital marketing, dan custom merchandise Anda dengan tim ahli Titik Visual.
          Dapatkan penawaran terbaik untuk proyek impian Anda!
        </p>

        <div class="flex flex-col sm:flex-row gap-3">
          <a href="https://wa.me/6281804376001" target="_blank"
             class="flex items-center justify-center gap-2 px-4 py-2 bg-green-500 text-white rounded shadow hover:bg-green-600 transition">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20.52 3.48A11.936 11.936 0 0012 0C5.37 0 .009 5.371.009 12c0 2.108.544 4.097 1.578 5.856L0 24l6.281-1.647A11.944 11.944 0 0012 24c6.627 0 12-5.373 12-12 0-3.191-1.243-6.212-3.48-8.52zM12 21.75a9.77 9.77 0 01-4.949-1.335l-.352-.203-3.732.977.996-3.63-.23-.376A9.746 9.746 0 012.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
            </svg>
            WhatsApp Titik Visual
          </a>

          <a href="#" class="flex items-center justify-center gap-2 px-4 py-2 border rounded text-gray-700 hover:bg-gray-100 transition">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_176_4715)">
              <path d="M10.3984 2.29688H14.3984V6.29688" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M7.06641 9.63021L14.3997 2.29688" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M12.3984 8.96354V12.9635C12.3984 13.3172 12.258 13.6563 12.0079 13.9064C11.7579 14.1564 11.4187 14.2969 11.0651 14.2969H3.73177C3.37815 14.2969 3.03901 14.1564 2.78896 13.9064C2.53891 13.6563 2.39844 13.3172 2.39844 12.9635V5.63021C2.39844 5.27659 2.53891 4.93745 2.78896 4.6874C3.03901 4.43735 3.37815 4.29688 3.73177 4.29688H7.73177" stroke="#374151" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
              <defs>
                <clipPath id="clip0_176_4715">
                <rect width="16" height="16" fill="white" transform="translate(0.398438 0.296875)"/>
                </clipPath>
              </defs>
            </svg>
            Halaman Kontak Lengkap
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="mt-20 py-6 border-t bg-white">
  <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
    <div class="flex items-center gap-2 mb-3 md:mb-0">
      <img src="{{ asset('images/bintang.png') }}" class="w-11 h-11" alt="Logo">
      <div>
        <strong class="block text-gray-800">Titik Visual</strong>
        Digital Creative Studio Yogyakarta
      </div>
    </div>
    <div class="text-center md:text-right">
      <p>© 2024 Titik Visual. All rights reserved.</p>
      <p>Digital Creative Studio Yogyakarta – Dari Ide Menjadi Kenyataan</p>
    </div>
  </div>
</footer>
@endsection
