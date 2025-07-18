@extends('layouts.apu')

@section('title', 'Logo Desain - Titik Visual')

@section('content')

<!-- Breadcrumb -->
<div class="bg-white border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 py-4">
    <nav class="text-sm text-gray-500">
      <ol class="flex space-x-2">
        <li><a href="#" class="hover:underline">Home</a></li>
        <li>/</li>
        <li><a href="#" class="hover:underline">Services</a></li>
        <li>/</li>
        <li class="text-purple-600 font-semibold">Logo Design</li>
      </ol>
    </nav>
  </div>
</div>

<!-- Section Utama -->
<section class="bg-green-50 py-16 px-6 md:px-10">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 items-center gap-10">
    
    <!-- Kiri: Teks -->
    <div>
      <span class="inline-flex items-center gap-2 text-pink-600 font-semibold text-sm mb-4">
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_381_10027)">
            <path d="M14.8646 4.91406L9.19792 10.5807L5.86458 7.2474L1.53125 11.5807" stroke="#BE185D" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10.8672 4.91406H14.8672V8.91406" stroke="#BE185D" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
          </g>
          <defs>
            <clipPath id="clip0_381_10027">
                <rect width="16" height="16" fill="white" transform="translate(0.199219 0.25)"/>
            </clipPath>
          </defs>
        </svg>
        Social Media Management
      </span>

      <h2 class="text-4xl md:text-5xl font-bold leading-tight mb-4">
        <span class="text-pink-600">Grow Your Brand</span><br>di Social Media
      </h2>

      <p class="text-gray-600 mb-6 text-lg">
        Bangun komunitas yang engaged dan tingkatkan brand awareness dengan strategi social media yang tepat.
        Dari content creation hingga paid ads, kami kelola semua aspek social media bisnis Anda.
      </p>

      <!-- Tombol -->
      <div class="flex flex-wrap gap-4">
        <!-- Konsultasi Gratis -->
        <a href="#"
           class="flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-pink-500 to-purple-500 text-white font-semibold rounded-full shadow hover:opacity-90">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4.243-.93L3 20l1.365-3.249A7.95 7.95 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
          </svg>
          Konsultasi Gratis
        </a>

        <!-- Lihat Portfolio -->
         <a href="#portfolio" class="inline-flex items-center gap-2 px-6 py-2 border border-pink-300 text-pink-500 font-semibold rounded-md hover:bg-pink-300 hover:text-pink-600 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#EA580C">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
          </svg>
          Lihat Portfolio
        </a>
      </div>
    </div>

    <!-- Kanan: Gambar -->
    <div class="relative">
      <div class="rounded-2xl overflow-hidden shadow-xl border-8 border-white">
        <img src="{{ asset('images/youtub.png') }}" alt="Contoh Logo" class="object-cover w-full h-full">
      </div>
      <div class="absolute -top-4 -right-4 w-10 h-10 bg-gradient-to-br from-green-500 to-blue-300 rounded-full shadow-md"></div>
    </div>

  </div>
</section>


<!-- Section: Mengapa Pilih Kami -->
<section class="bg-white py-16 px-4 md:px-10">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-cyan-600 to-blue-400 bg-clip-text text-transparent">
      Mengapa Pilih Social Media Management Kami?
    </h2>
    <p class="text-gray-500 mb-12 text-lg">
      Strategi yang data-driven dan content yang engaging untuk hasil yang terukur
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Card 1 -->
      <div class="border rounded-xl p-6 text-center hover:shadow transition">
        <div class="w-12 h-12 mx-auto mb-4 bg-green-50 flex items-center justify-center rounded-xl">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.3984 22.6016C17.9213 22.6016 22.3984 18.1244 22.3984 12.6016C22.3984 7.07871 17.9213 2.60156 12.3984 2.60156C6.87559 2.60156 2.39844 7.07871 2.39844 12.6016C2.39844 18.1244 6.87559 22.6016 12.3984 22.6016Z" stroke="#DB2777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12.3984 18.6016C15.7121 18.6016 18.3984 15.9153 18.3984 12.6016C18.3984 9.28785 15.7121 6.60156 12.3984 6.60156C9.08473 6.60156 6.39844 9.28785 6.39844 12.6016C6.39844 15.9153 9.08473 18.6016 12.3984 18.6016Z" stroke="#DB2777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12.3984 14.6016C13.503 14.6016 14.3984 13.7061 14.3984 12.6016C14.3984 11.497 13.503 10.6016 12.3984 10.6016C11.2939 10.6016 10.3984 11.497 10.3984 12.6016C10.3984 13.7061 11.2939 14.6016 12.3984 14.6016Z" stroke="#DB2777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="font-semibold text-lg mb-2">Content Strategy</h3>
        <p class="text-gray-500 text-sm">Strategi konten yang engaging dan sesuai target audience</p>
      </div>

      <!-- Card 2 -->
      <div class="border rounded-xl p-6 text-center hover:shadow transition">
        <div class="w-12 h-12 mx-auto mb-4 bg-green-50 flex items-center justify-center rounded-xl">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.39844 2.60156V6.60156" stroke="#DB2777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M16.3984 2.60156V6.60156" stroke="#DB2777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M19.3984 4.60156H5.39844C4.29387 4.60156 3.39844 5.49699 3.39844 6.60156V20.6016C3.39844 21.7061 4.29387 22.6016 5.39844 22.6016H19.3984C20.503 22.6016 21.3984 21.7061 21.3984 20.6016V6.60156C21.3984 5.49699 20.503 4.60156 19.3984 4.60156Z" stroke="#DB2777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M3.39844 10.6016H21.3984" stroke="#DB2777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="font-semibold text-lg mb-2">Daily Management</h3>
        <p class="text-gray-500 text-sm">Pengelolaan harian posting dan community management</p>
      </div>

      <!-- Card 3 -->
      <div class="border rounded-xl p-6 text-center hover:shadow transition">
        <div class="w-12 h-12 mx-auto mb-4 bg-green-50 flex items-center justify-center rounded-xl">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.39844 3.60156V21.6016H21.3984" stroke="#DB2777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M18.3984 17.6016V9.60156" stroke="#DB2777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M13.3984 17.6016V5.60156" stroke="#DB2777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8.39844 17.6016V14.6016" stroke="#DB2777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="font-semibold text-lg mb-2">Analytics & Reporting</h3>
        <p class="text-gray-500 text-sm">Laporan performa dan insights untuk optimasi</p>
      </div>

      <!-- Card 4 -->
      <div class="border rounded-xl p-6 text-center hover:shadow transition">
        <div class="w-12 h-12 mx-auto mb-4 bg-green-50 flex items-center justify-center rounded-xl">
          <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.39794 14.6042C4.20871 14.6048 4.02317 14.5518 3.86289 14.4511C3.70262 14.3505 3.57418 14.2065 3.49249 14.0358C3.41081 13.8651 3.37923 13.6748 3.40144 13.4868C3.42365 13.2989 3.49872 13.1211 3.61794 12.9742L13.5179 2.77417C13.5922 2.68845 13.6934 2.63052 13.8049 2.6099C13.9164 2.58928 14.0317 2.60718 14.1317 2.66067C14.2317 2.71416 14.3105 2.80006 14.3553 2.90427C14.4 3.00849 14.408 3.12482 14.3779 3.23417L12.4579 9.25417C12.4013 9.40569 12.3823 9.56869 12.4025 9.72917C12.4228 9.88966 12.4816 10.0428 12.574 10.1756C12.6665 10.3083 12.7897 10.4167 12.9332 10.4913C13.0767 10.566 13.2362 10.6047 13.3979 10.6042H20.3979C20.5872 10.6035 20.7727 10.6566 20.933 10.7572C21.0933 10.8578 21.2217 11.0018 21.3034 11.1725C21.3851 11.3432 21.4166 11.5336 21.3944 11.7215C21.3722 11.9094 21.2972 12.0872 21.1779 12.2342L11.2779 22.4342C11.2037 22.5199 11.1025 22.5778 10.991 22.5984C10.8794 22.6191 10.7642 22.6012 10.6642 22.5477C10.5642 22.4942 10.4854 22.4083 10.4406 22.3041C10.3959 22.1998 10.3879 22.0835 10.4179 21.9742L12.3379 15.9542C12.3946 15.8026 12.4136 15.6396 12.3934 15.4792C12.3731 15.3187 12.3143 15.1655 12.2219 15.0327C12.1294 14.9 12.0062 14.7917 11.8627 14.717C11.7192 14.6424 11.5597 14.6036 11.3979 14.6042H4.39794Z" stroke="#DB2777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="font-semibold text-lg mb-2">Paid Ads Management</h3>
        <p class="text-gray-500 text-sm">Kelola iklan berbayar untuk reach dan conversion optimal</p>
      </div>
    </div>
  </div>
</section>


<!-- Section: Platform yang Kami Kelola -->
<section class="bg-gray-50 py-16 px-4 md:px-10">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-cyan-600 to-blue-400 bg-clip-text text-transparent">
        Platform yang Kami Kelola
      </h2>
      <p class="text-gray-600 mt-2 text-lg">
        Expertise di berbagai platform social media utama
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Instagram -->
      <div class="bg-white p-6 rounded-xl border flex flex-col gap-4">
        <div class="flex items-center gap-4">
          <div class="bg-green-50 p-3 rounded-xl">
            <!-- Instagram icon -->
            <img src="https://www.svgrepo.com/show/452229/instagram-1.svg" alt="Instagram" class="w-6 h-6">
          </div>
          <div>
            <h3 class="text-xl font-bold">Instagram</h3>
            <p class="text-sm text-gray-500">18-34 tahun, Visual-focused</p>
          </div>
        </div>
        <div>
          <p class="font-medium">Services:</p>
          <div class="flex flex-wrap gap-2 mt-2">
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Feed Posts</span>
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Stories</span>
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Reels</span>
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">IGTV</span>
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Shopping Tags</span>
          </div>
        </div>
      </div>

      <!-- Facebook -->
      <div class="bg-white p-6 rounded-xl border flex flex-col gap-4">
        <div class="flex items-center gap-4">
          <div class="bg-green-50 p-3 rounded-xl">
            <!-- Facebook icon -->
            <img src="https://www.svgrepo.com/show/475647/facebook-color.svg" alt="Facebook" class="w-6 h-6">
          </div>
          <div>
            <h3 class="text-xl font-bold">Facebook</h3>
            <p class="text-sm text-gray-500">25-54 tahun, Community-focused</p>
          </div>
        </div>
        <div>
          <p class="font-medium">Services:</p>
          <div class="flex flex-wrap gap-2 mt-2">
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Posts</span>
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Stories</span>
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Events</span>
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Groups</span>
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Facebook Ads</span>
          </div>
        </div>
      </div>

      <!-- TikTok -->
      <div class="bg-white p-6 rounded-xl border flex flex-col gap-4">
        <div class="flex items-center gap-4">
          <div class="bg-green-50 p-3 rounded-xl">
            <!-- TikTok icon -->
            <img src="{{ asset('images/tiktok.png') }}" alt="TikTok" class="w-6 h-6">
          </div>
          <div>
            <h3 class="text-xl font-bold">TikTok</h3>
            <p class="text-sm text-gray-500">16-24 tahun, Entertainment-focused</p>
          </div>
        </div>
        <div>
          <p class="font-medium">Services:</p>
          <div class="flex flex-wrap gap-2 mt-2">
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Short Videos</span>
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Trending Sounds</span>
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Hashtag Challenges</span>
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Live Streaming</span>
          </div>
        </div>
      </div>

      <!-- LinkedIn -->
      <div class="bg-white p-6 rounded-xl border flex flex-col gap-4">
        <div class="flex items-center gap-4">
          <div class="bg-green-50 p-3 rounded-xl">
            <!-- LinkedIn icon -->
            <img src="https://www.svgrepo.com/show/473701/linkedin.svg" alt="LinkedIn" class="w-6 h-6">
          </div>
          <div>
            <h3 class="text-xl font-bold">LinkedIn</h3>
            <p class="text-sm text-gray-500">25-54 tahun, Professional-focused</p>
          </div>
        </div>
        <div>
          <p class="font-medium">Services:</p>
          <div class="flex flex-wrap gap-2 mt-2">
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Professional Posts</span>
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Articles</span>
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">Company Updates</span>
            <span class="bg-gray-100 text-sm px-3 py-1 rounded-full">LinkedIn Ads</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="py-16 px-4 bg-white">
  <div class="text-center mb-12">
    <h2 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-pink-500 to-purple-600 text-transparent bg-clip-text">
      Layanan Social Media Kami
    </h2>
    <p class="text-gray-600 mt-2">Paket lengkap untuk semua kebutuhan social media bisnis Anda</p>
  </div>

  <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto">
    <!-- Kartu 1 -->
    <div class="border rounded-xl p-6 shadow-sm">
      <div class="bg-green-50 p-3 inline-block rounded-xl mb-4">
        <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M29.3307 9.53906L17.9974 20.8724L11.3307 14.2057L2.66406 22.8724" stroke="#DB2777" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M21.3281 9.53906H29.3281V17.5391" stroke="#DB2777" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <h3 class="text-xl font-semibold">Social Media Management</h3>
      <p class="text-gray-600 mb-4">Pengelolaan lengkap akun media sosial bisnis Anda</p>

      <h4 class="font-semibold mb-2">Yang Anda Dapatkan:</h4>
      <ul class="text-sm text-gray-700 space-y-1 mb-6">
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Content Planning & strategi</span>
        </div>
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Daily Posting (5–7 posts/week)</span>
        </div>
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Community Management</span>
        </div>
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Hashtag Research</span>
        </div>
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Monthly Analytics</span>
        </div>
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Competitor Analisis</span>
        </div>
      </ul>

      <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-pink-500 font-semibold">Mulai dari Rp 1.300.000/Bulan</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Durasi:</span>
            <span class="font-semibold">Minimum 3 Bulan</span>
          </div>
          </div>

      <a href="#"
         class="mt-4 block text-center bg-pink-500 text-white font-semibold py-2 rounded-md hover:bg-pink-600 transition">
        ➔ Mulai Sekarang
      </a>
    </div>

    <!-- Kartu 2 -->
    <div class="border rounded-xl p-6 shadow-sm">
      <div class="bg-pink-50 p-3 inline-block rounded-xl mb-4">
        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M19.6589 5.53906H12.9922L9.65885 9.53906H5.65885C4.95161 9.53906 4.27333 9.82001 3.77324 10.3201C3.27314 10.8202 2.99219 11.4985 2.99219 12.2057V24.2057C2.99219 24.913 3.27314 25.5913 3.77324 26.0913C4.27333 26.5914 4.95161 26.8724 5.65885 26.8724H26.9922C27.6994 26.8724 28.3777 26.5914 28.8778 26.0913C29.3779 25.5913 29.6589 24.913 29.6589 24.2057V12.2057C29.6589 11.4985 29.3779 10.8202 28.8778 10.3201C28.3777 9.82001 27.6994 9.53906 26.9922 9.53906H22.9922L19.6589 5.53906Z" stroke="#DB2777" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M16.3242 21.5391C18.5334 21.5391 20.3242 19.7482 20.3242 17.5391C20.3242 15.3299 18.5334 13.5391 16.3242 13.5391C14.1151 13.5391 12.3242 15.3299 12.3242 17.5391C12.3242 19.7482 14.1151 21.5391 16.3242 21.5391Z" stroke="#DB2777" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <h3 class="text-xl font-semibold">Content Creation</h3>
      <p class="text-gray-600 mb-4">Pembuatan konten visual yang menarik dan engaging</p>

      <h4 class="font-semibold mb-2">Yang Anda Dapatkan:</h4>
      <ul class="text-sm text-gray-700 space-y-1 mb-6">
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>feed design templates</span>
        </div>
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Story Template </span>
        </div>
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Highlight Covers</span>
        </div>
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>caraosel posts</span>
        </div>
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>video content</span>
        </div>
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>brand Consistency</span>
        </div>
      </ul>

      <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-pink-500 font-semibold">Mulai dari Rp 800.000/Bulan</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Durasi:</span>
            <span class="font-semibold">ongoing</span>
          </div>
          </div>

      <a href="#"
         class="mt-4 block text-center bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 transition">
        ➔ Mulai Sekarang
      </a>
    </div>

    <!-- Kartu 3 -->
    <div class="border rounded-xl p-6 shadow-sm">
      <div class="bg-green-50 p-3 inline-block rounded-xl mb-4">
        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M16.6654 29.5339C24.0292 29.5339 29.9987 23.5643 29.9987 16.2005C29.9987 8.83672 24.0292 2.86719 16.6654 2.86719C9.30157 2.86719 3.33203 8.83672 3.33203 16.2005C3.33203 23.5643 9.30157 29.5339 16.6654 29.5339Z" stroke="#DB2777" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M16.6641 24.2031C21.0823 24.2031 24.6641 20.6214 24.6641 16.2031C24.6641 11.7848 21.0823 8.20312 16.6641 8.20312C12.2458 8.20312 8.66406 11.7848 8.66406 16.2031C8.66406 20.6214 12.2458 24.2031 16.6641 24.2031Z" stroke="#DB2777" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M16.6628 18.8724C18.1355 18.8724 19.3294 17.6785 19.3294 16.2057C19.3294 14.733 18.1355 13.5391 16.6628 13.5391C15.19 13.5391 13.9961 14.733 13.9961 16.2057C13.9961 17.6785 15.19 18.8724 16.6628 18.8724Z" stroke="#DB2777" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <h3 class="text-xl font-semibold">Paid Ads Campaign</h3>
      <p class="text-gray-600 mb-4">Kampanye iklan berbayar untuk reach dan conversion maksimal</p>

      <h4 class="font-semibold mb-2">Yang Anda Dapatkan:</h4>
      <ul class="text-sm text-gray-700 space-y-1 mb-6">
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Campaign Strategy</span>
        </div>
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Ad Creative Design</span>
        </div>
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Audience Targeting</span>
        </div>
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Budget Optimizatio</span>
        </div>
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Performance Tracking</span>
        </div>
        <div class="flex text-center space-x-2">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>A/B Testing</span>
        </div>
      </ul>

      <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-pink-500 font-semibold">Mulai dari Rp 2.000.000/Bulan</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Durasi:</span>
            <span class="font-semibold">Minimum 3 Bulan</span>
          </div>
          </div>

      <a href="#"
         class="mt-4 block text-center bg-green-500 text-white font-semibold py-2 rounded-md hover:bg-green-600 transition">
        ➔ Mulai Sekarang
      </a>
    </div>
  </div>
</section>

<!-- proses kerja kami -->
<section class="py-16 px-4 bg-gray-50">
  <div class="text-center mb-12">
    <h2 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-pink-500 to-purple-600 text-transparent bg-clip-text">
      Proses Kerja Kami
    </h2>
    <p class="text-gray-600 mt-2">Metodologi yang terbukti untuk social media yang sukses</p>
  </div>

  <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-6">
    <!-- Langkah 1 -->
    <div class="bg-white p-6 rounded-xl shadow-sm border">
      <div class="flex items-center gap-4 mb-4">
        <div class="w-10 h-10 flex items-center justify-center bg-gradient-to-br from-pink-500 to-purple-600 text-white font-bold rounded-full">
          01
        </div>
        <h3 class="font-semibold text-lg">Brand Analysis</h3>
      </div>
      <p class="text-gray-600 mb-3">Analisis brand, kompetitor, dan target audience</p>
      <span class="inline-flex items-center gap-1 text-sm text-pink-600 bg-pink-100 px-3 py-1 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
  </svg>
  1–2 hari
      </span>
    </div>

    <!-- Langkah 2 -->
    <div class="bg-white p-6 rounded-xl shadow-sm border">
      <div class="flex items-center gap-4 mb-4">
        <div class="w-10 h-10 flex items-center justify-center bg-gradient-to-br from-pink-500 to-purple-600 text-white font-bold rounded-full">
          02
        </div>
        <h3 class="font-semibold text-lg">Strategy Development</h3>
      </div>
      <p class="text-gray-600 mb-3">Pembuatan strategi konten dan posting schedule</p>
      <span class="inline-flex items-center gap-1 text-sm text-pink-600 bg-pink-100 px-3 py-1 rounded-full">
         <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
       2–3 hari
      </span>
    </div>

    <!-- Langkah 3 -->
    <div class="bg-white p-6 rounded-xl shadow-sm border">
      <div class="flex items-center gap-4 mb-4">
        <div class="w-10 h-10 flex items-center justify-center bg-gradient-to-br from-pink-500 to-purple-600 text-white font-bold rounded-full">
          03
        </div>
        <h3 class="font-semibold text-lg">Content Creation</h3>
      </div>
      <p class="text-gray-600 mb-3">Produksi konten visual dan copywriting</p>
      <span class="inline-flex items-center gap-1 text-sm text-pink-600 bg-pink-100 px-3 py-1 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      Ongoing
      </span>
    </div>

    <!-- Langkah 4 -->
    <div class="bg-white p-6 rounded-xl shadow-sm border">
      <div class="flex items-center gap-4 mb-4">
        <div class="w-10 h-10 flex items-center justify-center bg-gradient-to-br from-pink-500 to-purple-600 text-white font-bold rounded-full">
          04
        </div>
        <h3 class="font-semibold text-lg">Publishing & Management</h3>
      </div>
      <p class="text-gray-600 mb-3">Posting konten dan community management</p>
      <span class="inline-flex items-center gap-1 text-sm text-pink-600 bg-pink-100 px-3 py-1 rounded-full">
         <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      Daily
      </span>
    </div>

    <!-- Langkah 5 -->
    <div class="bg-white p-6 rounded-xl shadow-sm border">
      <div class="flex items-center gap-4 mb-4">
        <div class="w-10 h-10 flex items-center justify-center bg-gradient-to-br from-pink-500 to-purple-600 text-white font-bold rounded-full">
          05
        </div>
        <h3 class="font-semibold text-lg">Analytics & Optimization</h3>
      </div>
      <p class="text-gray-600 mb-3">Monitoring performa dan optimasi strategi</p>
      <span class="inline-flex items-center gap-1 text-sm text-pink-600 bg-pink-100 px-3 py-1 rounded-full">
         <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        Daily
      </span>
    </div>
  </div>
</section>

<!-- succes story -->
<section class="py-12 bg-white text-center">
  <h2 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-pink-500 to-purple-600 text-transparent bg-clip-text">Success Stories</h2>
  <p class="text-gray-600 mb-10">Hasil nyata dari kampanye social media yang kami kelola</p>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-4 max-w-6xl mx-auto">
    
    <!-- Card 1 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
      <img src="/images/y.png"alt="Fashion Campaign" class="w-full h-48 object-cover">
      <div class="p-5 text-left">
        <span class="inline-block bg-pink-100 text-pink-600 text-xs font-semibold px-2 py-1 rounded-full mb-2">Fashion & Lifestyle</span>
        <h3 class="text-lg font-semibold mb-1">Fashion Brand Campaign</h3>
        <p class="text-sm text-gray-600 mb-4">Kampanye social media untuk fashion brand dengan engagement rate 8.5%</p>
        <div class="flex justify-between text-pink-600 font-bold text-sm">
          <div>
            +150%<br><span class="text-gray-500 font-normal text-xs">Followers</span>
          </div>
          <div>
            8.5%<br><span class="text-gray-500 font-normal text-xs">Engagement</span>
          </div>
          <div>
            2.5M<br><span class="text-gray-500 font-normal text-xs">Reach</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
   <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
      <img src="/images/y.png" alt="Restaurant Social" class="w-full h-48 object-cover">
      <div class="p-5 text-left">
        <span class="inline-block bg-pink-100 text-pink-600 text-xs font-semibold px-2 py-1 rounded-full mb-2">Food & Beverage</span>
        <h3 class="text-lg font-semibold mb-1">Restaurant Social Media</h3>
        <p class="text-sm text-gray-600 mb-4">Pengelolaan social media restaurant dengan fokus visual appetizing</p>
        <div class="flex justify-between text-pink-600 font-bold text-sm">
          <div>
            +200%<br><span class="text-gray-500 font-normal text-xs">Followers</span>
          </div>
          <div>
            12.3%<br><span class="text-gray-500 font-normal text-xs">Engagement</span>
          </div>
          <div>
            1.8M<br><span class="text-gray-500 font-normal text-xs">Reach</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
      <img src="/images/y.png" alt="Tech Startup" class="w-full h-48 object-cover">
      <div class="p-5 text-left">
        <span class="inline-block bg-pink-100 text-pink-600 text-xs font-semibold px-2 py-1 rounded-full mb-2">Technology</span>
        <h3 class="text-lg font-semibold mb-1">Tech Startup Growth</h3>
        <p class="text-sm text-gray-600 mb-4">Growth hacking social media untuk startup teknologi B2B</p>
        <div class="flex justify-between text-pink-600 font-bold text-sm">
          <div>
            +300%<br><span class="text-gray-500 font-normal text-xs">Followers</span>
          </div>
          <div>
            6.8%<br><span class="text-gray-500 font-normal text-xs">Engagement</span>
          </div>
          <div>
            3.2M<br><span class="text-gray-500 font-normal text-xs">Reach</span>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Tombol -->
<div class="mt-10">
  <button class="inline-flex items-center gap-2 px-6 py-2 bg-pink-100 text-pink-600 rounded-full text-sm font-medium hover:bg-pink-200 transition">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
      <path d="M12 4.5C7.305 4.5 3.217 7.61 1.5 12c1.717 4.39 5.805 7.5 10.5 7.5s8.783-3.11 10.5-7.5C20.783 7.61 16.695 4.5 12 4.5zm0 12a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-7.5a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/>
    </svg>
    Lihat Semua Case Studies
  </button>
</div>
</section>


<section class="py-16 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-pink-500 to-purple-600 text-transparent bg-clip-text">Paket Social Media Management</h2>
    <p class="text-gray-600 mb-10">Pilih paket yang sesuai dengan kebutuhan bisnis Anda</p>

    <div class="grid md:grid-cols-3 gap-6">
      <!-- Starter Package -->
      <div class="bg-white p-6 rounded-xl shadow-sm border">
        <h3 class="text-xl font-semibold mb-2">Starter Package</h3>
        <p class="text-pink-600 text-2xl font-bold">Rp 1.500.000/bulan</p>
        <p class="text-sm text-gray-500 mt-1 mb-3">Minimum 3 bulan</p>
        <div class="text-left">
        <span class="block w-full bg-pink-100 text-pink-600 text-xs font-semibold rounded-full px-3 py-1 mb-4">
          Best for: Small Business
        </span>
        </div>
        <ul class="text-left text-sm text-gray-700 space-y-2 mb-6">
          <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span> 1 Platform (Instagram/Facebook)</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>15 Posts per bulan</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Basic Analytics</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span> Community Management</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Hashtag Research</span>
            </div>
            <div class="flex text-center space-x-2">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Monthly Report</span>
            </div>
        </ul>
        <button class="w-full py-2 bg-gray-100 text-gray-700 rounded hover:bg-gray-200 transition">
          → Pilih Paket
        </button>
      </div>

      <!-- Professional Package (highlighted) -->
      <div class="bg-white p-6 rounded-xl shadow-md border-2 border-pink-400">
        <h3 class="text-xl font-semibold mb-2">Professional Package</h3>
        <p class="text-pink-600 text-2xl font-bold">Rp 2.800.000/bulan</p>
        <p class="text-sm text-gray-500 mt-1 mb-3">Minimum 3 bulan</p>
        <div class="text-left">
        <span class="block w-full bg-pink-100 text-pink-600 text-xs font-semibold rounded-full px-3 py-1 mb-4">
          Best for: Growing Business
        </span>
        </div>
        <ul class="text-left text-sm text-gray-700 space-y-2 mb-6">
          <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span> 2 Platform (Instagram + Facebook)</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>25+ Posts per bulan</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Advanced Analytics</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span> Community Management</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>content Strategy</span>
            </div>
            <div class="flex text-center space-x-2">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Paid Ads Management</span>
            </div>
            <div class="flex text-center space-x-2">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Bi-weekly Report</span>
            </div>
            <div class="flex text-center space-x-2">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Competitor Analysis</span>
            </div>
        </ul>
        <button class="w-full py-2 bg-gradient-to-r from-pink-500 to-purple-500 text-white rounded hover:opacity-90 transition">
          → Pilih Paket
        </button>
      </div>

      <!-- Enterprise Package -->
      <div class="bg-white p-6 rounded-xl shadow-sm border">
        <h3 class="text-xl font-semibold mb-2">Enterprise Package</h3>
        <p class="text-pink-600 text-2xl font-bold">Rp 4.500.000/bulan</p>
        <p class="text-sm text-gray-500 mt-1 mb-3">Minimum 6 bulan</p>
        <div class="text-left">
         <span class="block w-full bg-pink-100 text-pink-600 text-xs font-semibold rounded-full px-3 py-1 mb-4">
          Best for: Enterprise
        </span>
        </div>
        <ul class="text-left text-sm text-gray-700 space-y-2 mb-6">
          <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Multi-Platform Management</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>40+ Posts per bulan</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Premium Analytics</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>24/7 Community Management</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Advanced content Strategy</span>
            </div>
            <div class="flex text-center space-x-2">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Full Paid Ads Campaign</span>
            </div>
            <div class="flex text-center space-x-2">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Weekly Report</span>
            </div>
            <div class="flex text-center space-x-2">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Influencer Collaboration</span>
            </div>
            <div class="flex text-center space-x-2">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Crisis Management</span>
            </div>
        </ul>
        <button class="w-full py-2 bg-gray-100 text-gray-700 rounded hover:bg-gray-200 transition">
          → Pilih Paket
        </button>
      </div>
    </div>
  </div>
</section>



<!-- apa kata client kami -->
<section class="py-12 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-blue-400 mb-2">Apa Kata Klien Kami</h2>
    <p class="text-center text-gray-500 mb-10">Testimoni dari klien yang puas dengan sosial media management kami</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Testimoni 1 -->
      <div class="p-6 border rounded-lg shadow-md hover:shadow-lg transition duration-300 bg-white">
        <div class="flex items-center mb-4 text-yellow-400">
          <span class="text-xl">★★★★★</span>
        </div>
        <p class="text-gray-700 mb-6">
          "social media management dari ttik visual luar biasa! engagement kami meningkat 300% dan penjualan online naik drastis"
        </p>
        <div class="flex items-center gap-4">
          <img src="/images/youtub.png" alt="Sarah Johnson" class="w-12 h-12 rounded-full border" />
          <div>
            <p class="font-semibold text-black">Lisa chen</p>
            <p class="text-sm text-gray-500">Marketing Manajer at Boutique Fashion</p>
          </div>
        </div>
      </div>

      <!-- Testimoni 2 -->
      <div class="p-6 border rounded-lg shadow-md hover:shadow-lg transition duration-300 bg-white">
        <div class="flex items-center mb-4 text-yellow-400">
          <span class="text-xl">★★★★★</span>
        </div>
        <p class="text-gray-700 mb-6">
          "Tim sangat kreatif dalam membuat konten. Followers kami bertambah pesat dan customer baru terus berdatangan!"
        </p>
        <div class="flex items-center gap-4">
          <img src="/images/youtub.png" alt="Ahmad Rizki" class="w-12 h-12 rounded-full border" />
          <div>
            <p class="font-semibold text-black">Andi Wijaya</p>
            <p class="text-sm text-gray-500">Owner at Cafae Nusantara</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- CTA Gradient Atas -->
<section class="bg-gradient-to-r from-pink-500 via-pink-400 to-blue-500 text-white text-center py-16 px-4">
  <h2 class="text-3xl font-bold mb-3">Siap Grow Your Social Media?</h2>
  <p class="mb-6 text-lg">Konsultasikan strategi social media anda dengan tim expert kami secara gratis </p>

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
      Download Case Study
    </a>
  </div>
</section>
@endsection

