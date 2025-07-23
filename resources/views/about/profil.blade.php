@extends('layouts.apu')

@section('title', 'Portofolio - Titik Visual')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-gradient-to-b from-white to-teal-50 px-4 py-12">
  <div class="container mx-auto max-w-7xl grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

    <!-- Kiri: Teks & Tombol -->
<div class="max-w-xl">
  <!-- Label -->
  <span class="inline-flex items-center gap-2 px-3 py-1 text-sm text-purple-800 bg-purple-100 rounded-full mb-4 transition duration-200 hover:bg-white hover:text-purple-700 hover:shadow group cursor-pointer">
  <svg width="17" height="17" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-purple-700 group-hover:stroke-purple-700 transition">
    <path d="M16.3984 21.7969V19.7969C16.3984 18.736 15.977 17.7186 15.2269 16.9684C14.4767 16.2183 13.4593 15.7969 12.3984 15.7969H6.39844C5.33757 15.7969 4.32016 16.2183 3.57001 16.9684C2.81986 17.7186 2.39844 18.736 2.39844 19.7969V21.7969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M22.3984 21.7997V19.7997C22.3978 18.9134 22.1028 18.0525 21.5598 17.352C21.0168 16.6515 20.2566 16.1513 19.3984 15.9297" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M16.3984 3.92969C17.2589 4.14999 18.0215 4.65039 18.5661 5.352C19.1107 6.05361 19.4063 6.91652 19.4063 7.80469C19.4063 8.69286 19.1107 9.55577 18.5661 10.2574C18.0215 10.959 17.2589 11.4594 16.3984 11.6797" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M9.39844 11.7969C11.6076 11.7969 13.3984 10.006 13.3984 7.79688C13.3984 5.58774 11.6076 3.79688 9.39844 3.79688C7.1893 3.79688 5.39844 5.58774 5.39844 7.79688C5.39844 10.006 7.1893 11.7969 9.39844 11.7969Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
  About Titik Visual
</span>

  <!-- Judul -->
  <h1 class="text-4xl font-bold leading-tight text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-sky-500 mb-2">
    Digital Creative Studio
  </h1>

  <!-- Subjudul -->
  <h2 class="text-2xl font-extrabold text-gray-800 mb-4">
    yang Mengutamakan Kualitas
  </h2>

  <!-- Deskripsi -->
  <p class="text-gray-600 mb-6 leading-relaxed">
    Sejak 2019, kami telah membantu 200+ klien mewujudkan visi digital mereka melalui UI/UX Design,
    Web Development, Mobile App, dan Digital Marketing yang inovatif dan result-oriented.
  </p>

  <!-- Tombol -->
  <div class="flex flex-wrap gap-4">
    <a href="#"
       class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-500 to-cyan-500 text-white px-6 py-2 rounded-lg font-medium shadow hover:opacity-90 transition">
      <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M6.88407 10.9299C6.82455 10.6991 6.70429 10.4886 6.53581 10.3201C6.36733 10.1516 6.15678 10.0314 5.92607 9.97185L1.83607 8.91719C1.76629 8.89738 1.70487 8.85535 1.66114 8.79748C1.61741 8.73961 1.59375 8.66906 1.59375 8.59652C1.59375 8.52398 1.61741 8.45343 1.66114 8.39556C1.70487 8.33769 1.76629 8.29566 1.83607 8.27585L5.92607 7.22052C6.1567 7.16106 6.36719 7.0409 6.53567 6.87255C6.70414 6.70419 6.82444 6.49378 6.88407 6.26319L7.93873 2.17319C7.95834 2.10313 8.00032 2.04141 8.05828 1.99745C8.11624 1.95349 8.18699 1.92969 8.25973 1.92969C8.33248 1.92969 8.40323 1.95349 8.46119 1.99745C8.51914 2.04141 8.56113 2.10313 8.58073 2.17319L9.63473 6.26319C9.69425 6.4939 9.81451 6.70445 9.98299 6.87293C10.1515 7.04141 10.362 7.16167 10.5927 7.22119L14.6827 8.27519C14.7531 8.29459 14.8151 8.33653 14.8593 8.39457C14.9035 8.45262 14.9274 8.52356 14.9274 8.59652C14.9274 8.66948 14.9035 8.74042 14.8593 8.79847C14.8151 8.85651 14.7531 8.89845 14.6827 8.91785L10.5927 9.97185C10.362 10.0314 10.1515 10.1516 9.98299 10.3201C9.81451 10.4886 9.69425 10.6991 9.63473 10.9299L8.58007 15.0199C8.56046 15.0899 8.51848 15.1516 8.46052 15.1956C8.40256 15.2396 8.33181 15.2634 8.25907 15.2634C8.18632 15.2634 8.11557 15.2396 8.05761 15.1956C7.99966 15.1516 7.95767 15.0899 7.93807 15.0199L6.88407 10.9299Z" stroke="#fff" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M13.5898 2.59375V5.26042" stroke="#fff" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M14.9245 3.92969H12.2578" stroke="#fff" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M2.92578 11.9297V13.263" stroke="#fff" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M3.59115 12.5938H2.25781" stroke="#fff" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
      Lihat Portfolio
    </a>

    <a href="#"
       class="inline-flex items-center gap-2 border border-purple-300 text-purple-600 px-6 py-2 rounded-lg font-medium hover:bg-purple-50 transition">
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M20.52 3.48A11.936 11.936 0 0012 0C5.37 0 .009 5.371.009 12c0 2.108.544 4.097 1.578 5.856L0 24l6.281-1.647A11.944 11.944 0 0012 24c6.627 0 12-5.373 12-12 0-3.191-1.243-6.212-3.48-8.52zM12 21.75a9.77 9.77 0 01-4.949-1.335l-.352-.203-3.732.977.996-3.63-.23-.376A9.746 9.746 0 012.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
      </svg>
      Hubungi Kami
    </a>
  </div>
</div>


    <!-- Kanan: Gambar dan Pengalaman -->
    <div class="relative">
      <div class="bg-white shadow-lg rounded-xl p-6 w-[500px] h-[420px]">
        <img src="{{ asset('images/profil.png') }}" alt="Logo Titik Visual" class="mx-auto max-w-[300px] mt-10">
      </div>
      <div class="absolute -bottom-4 -left-4 bg-gradient-to-r from-orange-400 to-pink-500 text-white text-sm font-semibold px-4 py-2 rounded-xl shadow-md">
        5+ <br>
        <span class="text-xs font-normal">Years Experience</span>
      </div>
    </div>

  </div>
</section>

<!-- Section: Statistik -->
<section class="bg-white py-16">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center">
      <!-- Card -->
      <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 shadow hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="bg-purple-100 w-12 h-12 mx-auto rounded-xl flex items-center justify-center mb-4">
          <!-- Icon -->
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.3984 22.7969C17.9213 22.7969 22.3984 18.3197 22.3984 12.7969C22.3984 7.27403 17.9213 2.79688 12.3984 2.79688C6.87559 2.79688 2.39844 7.27403 2.39844 12.7969C2.39844 18.3197 6.87559 22.7969 12.3984 22.7969Z" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12.3984 18.7969C15.7121 18.7969 18.3984 16.1106 18.3984 12.7969C18.3984 9.48317 15.7121 6.79688 12.3984 6.79688C9.08473 6.79688 6.39844 9.48317 6.39844 12.7969C6.39844 16.1106 9.08473 18.7969 12.3984 18.7969Z" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12.3984 14.7969C13.503 14.7969 14.3984 13.9014 14.3984 12.7969C14.3984 11.6923 13.503 10.7969 12.3984 10.7969C11.2939 10.7969 10.3984 11.6923 10.3984 12.7969C10.3984 13.9014 11.2939 14.7969 12.3984 14.7969Z" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-purple-700">500+</h3>
        <p class="text-sm text-gray-600 mt-1">Proyek Selesai</p>
      </div>

      <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 shadow hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="bg-purple-100 w-12 h-12 mx-auto rounded-xl flex items-center justify-center mb-4">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.3984 21.7969V19.7969C16.3984 18.736 15.977 17.7186 15.2269 16.9684C14.4767 16.2183 13.4593 15.7969 12.3984 15.7969H6.39844C5.33757 15.7969 4.32016 16.2183 3.57001 16.9684C2.81986 17.7186 2.39844 18.736 2.39844 19.7969V21.7969" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M22.3984 21.7997V19.7997C22.3978 18.9134 22.1028 18.0525 21.5598 17.352C21.0168 16.6515 20.2566 16.1513 19.3984 15.9297" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M16.3984 3.92969C17.2589 4.14999 18.0215 4.65039 18.5661 5.352C19.1107 6.05361 19.4063 6.91652 19.4063 7.80469C19.4063 8.69286 19.1107 9.55577 18.5661 10.2574C18.0215 10.959 17.2589 11.4594 16.3984 11.6797" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9.39844 11.7969C11.6076 11.7969 13.3984 10.006 13.3984 7.79688C13.3984 5.58774 11.6076 3.79688 9.39844 3.79688C7.1893 3.79688 5.39844 5.58774 5.39844 7.79688C5.39844 10.006 7.1893 11.7969 9.39844 11.7969Z" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-purple-700">200+</h3>
        <p class="text-sm text-gray-600 mt-1">Klien Puas</p>
      </div>

      <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 shadow hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="bg-purple-100 w-12 h-12 mx-auto rounded-xl flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-purple-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M12 6v6l4 2"></path>
            <circle cx="12" cy="12" r="10"></circle>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-purple-700">5+</h3>
        <p class="text-sm text-gray-600 mt-1">Tahun Pengalaman</p>
      </div>

      <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-6 shadow hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="bg-purple-100 w-12 h-12 mx-auto rounded-xl flex items-center justify-center mb-4">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.8771 13.6875L17.3921 22.2135C17.4091 22.3139 17.395 22.4171 17.3518 22.5093C17.3085 22.6014 17.2381 22.6782 17.1501 22.7293C17.062 22.7804 16.9604 22.8034 16.8589 22.7952C16.7575 22.787 16.6609 22.7481 16.5821 22.6835L13.0021 19.9965C12.8293 19.8674 12.6194 19.7976 12.4036 19.7976C12.1879 19.7976 11.978 19.8674 11.8051 19.9965L8.21914 22.6825C8.14046 22.7469 8.044 22.7858 7.94264 22.794C7.84127 22.8022 7.73981 22.7793 7.65181 22.7284C7.5638 22.6774 7.49342 22.6008 7.45006 22.5088C7.4067 22.4168 7.39243 22.3138 7.40914 22.2135L8.92314 13.6875" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12.3984 14.7969C15.7121 14.7969 18.3984 12.1106 18.3984 8.79688C18.3984 5.48317 15.7121 2.79688 12.3984 2.79688C9.08473 2.79688 6.39844 5.48317 6.39844 8.79688C6.39844 12.1106 9.08473 14.7969 12.3984 14.7969Z" stroke="#9333EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-purple-700">50+</h3>
        <p class="text-sm text-gray-600 mt-1">Awards & Recognition</p>
      </div>
    </div>
  </div>
</section>

<!-- Section: Timeline Tengah -->
<section class="py-20 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4">
    <!-- Heading -->
    <h2 class="text-3xl font-bold text-center text-purple-600 mb-2">Perjalanan Kami</h2>
    <p class="text-center text-gray-500 mb-12">Milestone penting dalam perjalanan Titik Visual</p>

    <!-- Timeline Container -->
    <div class="relative">
      <!-- Garis Tengah -->
      <div class="absolute left-1/2 transform -translate-x-1/2 h-full border-l-4 border-gradient-to-b from-purple-500 to-blue-400"></div>

      <!-- ITEM: 2019 -->
      <div class="mb-14 flex flex-col md:flex-row items-center justify-between relative">
        <div class="w-full md:w-5/12 text-right pr-6">
          <div class="bg-white p-6 rounded-xl shadow-md inline-block text-left">
            <span class="inline-block text-xs font-semibold text-purple-600 bg-purple-100 px-2 py-1 rounded mb-2">Company Founded</span>
            <h3 class="text-lg font-bold mb-1">Founding</h3>
            <p class="text-sm text-gray-600">Titik Visual didirikan dengan visi menjadi digital creative studio terdepan di Indonesia</p>
          </div>
        </div>
        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-br from-purple-500 to-blue-400 text-white font-bold z-10">
          2019
        </div>
        <div class="w-full md:w-5/12"></div>
      </div>

      <!-- ITEM: 2020 -->
      <div class="mb-14 flex flex-col md:flex-row items-center justify-between relative">
        <div class="w-full md:w-5/12"></div>
        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-br from-purple-500 to-blue-400 text-white font-bold z-10">
          2020
        </div>
        <div class="w-full md:w-5/12 text-left pl-6">
          <div class="bg-white p-6 rounded-xl shadow-md inline-block text-left">
            <span class="inline-block text-xs font-semibold text-purple-600 bg-purple-100 px-2 py-1 rounded mb-2">50+ Projects</span>
            <h3 class="text-lg font-bold mb-1">First Major Client</h3>
            <p class="text-sm text-gray-600">Berhasil menangani proyek besar pertama dan membangun reputasi di industri digital</p>
          </div>
        </div>
      </div>

      <!-- ITEM: 2021 -->
      <div class="mb-14 flex flex-col md:flex-row items-center justify-between relative">
        <div class="w-full md:w-5/12 text-right pr-6">
          <div class="bg-white p-6 rounded-xl shadow-md inline-block text-left">
            <span class="inline-block text-xs font-semibold text-purple-600 bg-purple-100 px-2 py-1 rounded mb-2">Team Growth</span>
            <h3 class="text-lg font-bold mb-1">Team Expansion</h3>
            <p class="text-sm text-gray-600">Memperluas tim dengan talent terbaik di bidang UI/UX, Development, dan Marketing</p>
          </div>
        </div>
        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-br from-purple-500 to-blue-400 text-white font-bold z-10">
          2021
        </div>
        <div class="w-full md:w-5/12"></div>
      </div>

      <!-- ITEM: 2020 -->
      <div class="mb-14 flex flex-col md:flex-row items-center justify-between relative">
        <div class="w-full md:w-5/12"></div>
        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-br from-purple-500 to-blue-400 text-white font-bold z-10">
          2022
        </div>
        <div class="w-full md:w-5/12 text-left pl-6">
          <div class="bg-white p-6 rounded-xl shadow-md inline-block text-left">
            <span class="inline-block text-xs font-semibold text-purple-600 bg-purple-100 px-2 py-1 rounded mb-2">200+ Projects</span>
            <h3 class="text-lg font-bold mb-1">Service Diversification</h3>
            <p class="text-sm text-gray-600">Menambah Layanan Mobile App Development dan Social Media Management </p>
          </div>
        </div>
      </div>

      <!-- ITEM: 2023 -->
      <div class="mb-14 flex flex-col md:flex-row items-center justify-between relative">
        <div class="w-full md:w-5/12 text-right pr-6">
          <div class="bg-white p-6 rounded-xl shadow-md inline-block text-left">
            <span class="inline-block text-xs font-semibold text-purple-600 bg-purple-100 px-2 py-1 rounded mb-2">Industri Awards</span>
            <h3 class="text-lg font-bold mb-1">Recognition & Awards</h3>
            <p class="text-sm text-gray-600">Meraih berbagai penghargaan dan recognition dari industri creative digital </p>
          </div>
        </div>
        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-br from-purple-500 to-blue-400 text-white font-bold z-10">
          2023
        </div>
        <div class="w-full md:w-5/12"></div>
      </div>

      <!-- ITEM: 2024 -->
      <div class="mb-14 flex flex-col md:flex-row items-center justify-between relative">
        <div class="w-full md:w-5/12"></div>
        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-br from-purple-500 to-blue-400 text-white font-bold z-10">
          2024
        </div>
        <div class="w-full md:w-5/12 text-left pl-6">
          <div class="bg-white p-6 rounded-xl shadow-md inline-block text-left">
            <span class="inline-block text-xs font-semibold text-purple-600 bg-purple-100 px-2 py-1 rounded mb-2">500+ Projects</span>
            <h3 class="text-lg font-bold mb-1">Innovation & Growth</h3>
            <p class="text-sm text-gray-600">Terus berinovasi dengan teknologi terdepan dan Memperluas jangkauan layanan</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Nilai Nilai Kami -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-blue-500 mb-4">Nilai-Nilai Kami</h2>
      <p class="text-xl text-gray-600">Prinsip yang memandu setiap langkah perjalanan kami</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

      <!-- Innovation -->
      <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-2xl transform hover:scale-105 active:scale-95 transition duration-300 group cursor-pointer">
        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto group-hover:bg-blue-200 transition-colors duration-300">
          <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.647 21.0628C13.528 20.6014 13.2875 20.1803 12.9505 19.8433C12.6136 19.5064 12.1925 19.2659 11.731 19.1468L3.55104 17.0375C3.41148 16.9979 3.28865 16.9138 3.20119 16.7981C3.11373 16.6823 3.06641 16.5412 3.06641 16.3962C3.06641 16.2511 3.11373 16.11 3.20119 15.9942C3.28865 15.8785 3.41148 15.7944 3.55104 15.7548L11.731 13.6442C12.1923 13.5252 12.6133 13.2849 12.9502 12.9482C13.2872 12.6115 13.5278 12.1907 13.647 11.7295L15.7564 3.5495C15.7956 3.40939 15.8796 3.28595 15.9955 3.19802C16.1114 3.1101 16.2529 3.0625 16.3984 3.0625C16.5439 3.0625 16.6854 3.1101 16.8013 3.19802C16.9172 3.28595 17.0012 3.40939 17.0404 3.5495L19.1484 11.7295C19.2674 12.1909 19.5079 12.612 19.8449 12.949C20.1818 13.286 20.6029 13.5265 21.0644 13.6455L29.2444 15.7535C29.385 15.7923 29.5091 15.8762 29.5975 15.9923C29.6859 16.1084 29.7338 16.2502 29.7338 16.3962C29.7338 16.5421 29.6859 16.684 29.5975 16.8001C29.5091 16.9162 29.385 17 29.2444 17.0388L21.0644 19.1468C20.6029 19.2659 20.1818 19.5064 19.8449 19.8433C19.5079 20.1803 19.2674 20.6014 19.1484 21.0628L17.039 29.2428C16.9998 29.3829 16.9159 29.5064 16.7999 29.5943C16.684 29.6822 16.5425 29.7298 16.397 29.7298C16.2515 29.7298 16.11 29.6822 15.9941 29.5943C15.8782 29.5064 15.7942 29.3829 15.755 29.2428L13.647 21.0628Z" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M27.0664 4.39844V9.73177" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M29.7318 7.0625H24.3984" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M5.73047 23.0625V25.7292" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7.0651 24.3984H4.39844" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Innovation</h3>
        <p class="text-gray-600 text-center">Selalu menggunakan teknologi dan metodologi terdepan untuk hasil yang optimal</p>
      </div>

      <!-- Quality -->
      <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-2xl transform hover:scale-105 active:scale-95 transition duration-300 group cursor-pointer">
        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6 mx-auto group-hover:bg-green-200 transition-colors duration-300">
          <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.0341 17.5859L23.0541 28.9539C23.0767 29.0878 23.0579 29.2254 23.0003 29.3483C22.9426 29.4712 22.8488 29.5735 22.7313 29.6417C22.6139 29.7098 22.4785 29.7405 22.3432 29.7295C22.2079 29.7186 22.0791 29.6667 21.9741 29.5806L17.2008 25.9979C16.9703 25.8258 16.6904 25.7328 16.4028 25.7328C16.1151 25.7328 15.8352 25.8258 15.6048 25.9979L10.8234 29.5793C10.7185 29.6652 10.5899 29.7171 10.4548 29.728C10.3196 29.7389 10.1843 29.7084 10.067 29.6404C9.94964 29.5725 9.85581 29.4704 9.798 29.3477C9.74019 29.2251 9.72116 29.0877 9.74344 28.9539L11.7621 17.5859" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M16.3984 19.0625C20.8167 19.0625 24.3984 15.4808 24.3984 11.0625C24.3984 6.64422 20.8167 3.0625 16.3984 3.0625C11.9802 3.0625 8.39844 6.64422 8.39844 11.0625C8.39844 15.4808 11.9802 19.0625 16.3984 19.0625Z" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Quality</h3>
        <p class="text-gray-600 text-center">Komitmen pada kualitas tinggi di setiap aspek pekerjaan yang kami lakukan</p>
      </div>

      <!-- Collaboration -->
      <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-2xl transform hover:scale-105 active:scale-95 transition duration-300 group cursor-pointer">
        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6 mx-auto group-hover:bg-purple-200 transition-colors duration-300">
          <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.7331 28.3984V25.7318C21.7331 24.3173 21.1712 22.9607 20.171 21.9605C19.1708 20.9603 17.8142 20.3984 16.3997 20.3984H8.39974C6.98525 20.3984 5.6287 20.9603 4.6285 21.9605C3.62831 22.9607 3.06641 24.3173 3.06641 25.7318V28.3984" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12.3997 15.0651C15.3453 15.0651 17.7331 12.6773 17.7331 9.73177C17.7331 6.78625 15.3453 4.39844 12.3997 4.39844C9.45422 4.39844 7.06641 6.78625 7.06641 9.73177C7.06641 12.6773 9.45422 15.0651 12.3997 15.0651Z" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M29.7305 28.397V25.7303C29.7296 24.5486 29.3363 23.4007 28.6123 22.4667C27.8883 21.5328 26.8746 20.8657 25.7305 20.5703" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21.7305 4.57031C22.8777 4.86405 23.8945 5.53125 24.6207 6.46673C25.3468 7.40221 25.7409 8.55275 25.7409 9.73698C25.7409 10.9212 25.3468 12.0718 24.6207 13.0072C23.8945 13.9427 22.8777 14.6099 21.7305 14.9036" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Collaboration</h3>
        <p class="text-gray-600 text-center">Bekerja sama dengan klien sebagai partner untuk mencapai tujuan bersama</p>
      </div>

      <!-- Integrity -->
      <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-2xl transform hover:scale-105 active:scale-95 transition duration-300 group cursor-pointer">
        <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6 mx-auto group-hover:bg-yellow-200 transition-colors duration-300">
          <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.7331 19.0651C27.7197 17.1184 29.7331 14.7851 29.7331 11.7318C29.7331 9.78685 28.9605 7.92159 27.5852 6.54632C26.2099 5.17105 24.3447 4.39844 22.3997 4.39844C20.0531 4.39844 18.3997 5.0651 16.3997 7.0651C14.3997 5.0651 12.7464 4.39844 10.3997 4.39844C8.45482 4.39844 6.58956 5.17105 5.21429 6.54632C3.83902 7.92159 3.06641 9.78685 3.06641 11.7318C3.06641 14.7984 5.06641 17.1318 7.06641 19.0651L16.3997 28.3984L25.7331 19.0651Z" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Integrity</h3>
        <p class="text-gray-600 text-center">Transparansi dan kejujuran dalam setiap komunikasi dan proses kerja</p>
      </div>

    </div>
  </div>
</section>

<!-- meet our team -->
<section class="py-16 bg-[#F9FAFB]">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-indigo-600 mb-2">Meet Our Team</h2>
      <p class="text-lg text-gray-600">Tim profesional yang berpengalaman dan passionate</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

      @foreach($teams as $member)
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition p-6">
        <div class="w-full h-48 rounded-xl overflow-hidden mb-4">
          <img src="{{ asset('storage/' . ($member->photo ?? 'images/someone.png')) }}" alt="{{ $member->name }}" class="w-full h-full object-cover">
        </div>
        <div class="text-center">
          <h3 class="text-xl font-bold text-gray-800">{{ $member->name }}</h3>
          <p class="text-purple-600 font-semibold text-sm mb-2">{{ $member->position }}</p>
          <p class="text-gray-600 text-sm mb-4">{{ $member->description }}</p>
          <div class="flex flex-wrap justify-center gap-2">
            @foreach(explode(',', $member->skills ?? '') as $skill)
              @if(trim($skill) !== '')
              <span class="bg-violet-100 text-violet-700 text-xs font-medium px-3 py-1 rounded-full">
                {{ trim($skill) }}
              </span>
              @endif
            @endforeach
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>

<x-client />

<!-- CTA Gradient Atas -->
<section class="bg-gradient-to-r from-purple-500 via-indigo-400 to-cyan-400 text-white text-center py-16 px-4">
  <h2 class="text-3xl font-bold mb-3">Siap Berkolaborasi Dengan Kami?</h2>
  <p class="mb-6 text-lg">Mari Wujudkan Visi Digital Anda dengan tim profesional Titik Visual </p>

  <div class="flex flex-col md:flex-row items-center justify-center gap-4">
    <!-- Tombol Mulai Diskusi -->
    <a href="#whatsapp" class="inline-flex items-center gap-2 px-6 py-2 bg-white text-purple-600 font-semibold rounded-md shadow hover:bg-purple-100 transition">
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M20.52 3.48A11.936 11.936 0 0012 0C5.37 0 .009 5.371.009 12c0 2.108.544 4.097 1.578 5.856L0 24l6.281-1.647A11.944 11.944 0 0012 24c6.627 0 12-5.373 12-12 0-3.191-1.243-6.212-3.48-8.52zM12 21.75a9.77 9.77 0 01-4.949-1.335l-.352-.203-3.732.977.996-3.63-.23-.376A9.746 9.746 0 012.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
      </svg>
      Mulai Diskusi
    </a>

    <!-- Tombol Lihat Portofolio -->
    <a href="#portfolio" class="inline-flex items-center gap-2 px-6 py-2 border border-white text-white font-semibold rounded-md hover:bg-white hover:text-purple-600 transition">
      <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_232_6513)">
          <path d="M10.8945 2.20312H14.8945V6.20313" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M7.5625 9.53646L14.8958 2.20312" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M12.8945 8.86979V12.8698C12.8945 13.2234 12.7541 13.5626 12.504 13.8126C12.254 14.0626 11.9148 14.2031 11.5612 14.2031H4.22786C3.87424 14.2031 3.5351 14.0626 3.28506 13.8126C3.03501 13.5626 2.89453 13.2234 2.89453 12.8698V5.53646C2.89453 5.18284 3.03501 4.8437 3.28506 4.59365C3.5351 4.3436 3.87424 4.20313 4.22786 4.20312H8.22786" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
          <defs>
            <clipPath id="clip0_232_6513">
            <rect width="16" height="16" fill="white" transform="translate(0.894531 0.203125)"/>
            </clipPath>
            </defs>
      </svg>
      Lihat Portfolio
    </a>
  </div>
</section>
@endsection


