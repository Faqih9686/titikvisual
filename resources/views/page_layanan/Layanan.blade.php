@extends('layouts.apu')

@section('title', 'Titik Visual – Digital Creative Studio')

@section('content')
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-2 text-indigo-700">
            <span class="text-purple-600">Kategori</span> Layanan <span class="text-cyan-500">Utama</span>
        </h2>
        <p class="text-center text-gray-600 mb-10">
            Pilih kategori layanan yang sesuai dengan kebutuhan bisnis Anda
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            <!-- UI/UX Design -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center border transform transition duration-300 hover:scale-105 hover:shadow-lg">
                <div class="flex justify-center mb-4">
                    <div class="bg-purple-100 text-purple-600 p-3 rounded-full">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M20.9998 28.5884C20.7497 28.8383 20.4106 28.9788 20.0571 28.9788C19.7035 28.9788 19.3645 28.8383 19.1144 28.5884L16.9998 26.4737C16.7498 26.2237 16.6094 25.8846 16.6094 25.531C16.6094 25.1775 16.7498 24.8384 16.9998 24.5884L24.4478 17.1404C24.6978 16.8904 25.0369 16.75 25.3904 16.75C25.744 16.75 26.0831 16.8904 26.3331 17.1404L28.4478 19.255C28.6977 19.5051 28.8381 19.8442 28.8381 20.1977C28.8381 20.5513 28.6977 20.8903 28.4478 21.1404L20.9998 28.5884Z" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M24.0599 17.526L22.2266 8.36072C22.1767 8.11136 22.0566 7.88146 21.8803 7.69813C21.7041 7.51481 21.4791 7.3857 21.2319 7.32605L4.37324 2.89672C4.15114 2.84302 3.91897 2.8473 3.69901 2.90914C3.47904 2.97099 3.27866 3.08833 3.11709 3.2499C2.95552 3.41147 2.83818 3.61185 2.77633 3.83182C2.71449 4.05178 2.71021 4.28395 2.7639 4.50605L7.19324 21.3647C7.25289 21.6119 7.38199 21.8369 7.56532 22.0131C7.74864 22.1894 7.97854 22.3095 8.2279 22.3594L17.3932 24.1927" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M3.125 3.26562L12.8397 12.9803" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M14.7253 17.5286C16.198 17.5286 17.3919 16.3347 17.3919 14.862C17.3919 13.3892 16.198 12.1953 14.7253 12.1953C13.2525 12.1953 12.0586 13.3892 12.0586 14.862C12.0586 16.3347 13.2525 17.5286 14.7253 17.5286Z" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <h3 class="font-semibold text-lg mb-2">UI/UX Design</h3>
                <p class="text-sm text-gray-600 mb-4">Desain interface yang user-friendly dan menarik untuk website dan aplikasi mobile</p>
                <a href="#" class="inline-flex items-center px-4 py-2 bg-pink-500 text-white text-sm rounded hover:bg-pink-600 hover:shadow-lg hover:scale-105 transform transition duration-200 ease-in-out">
                    ➜ Lihat Detail
                </a>
            </div>

            <!-- Website & Aplikasi -->
           <div class="bg-white shadow-md rounded-lg p-6 text-center border transform transition duration-300 hover:scale-105 hover:shadow-lg">
                <div class="flex justify-center mb-4">
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M16.388 29.526C23.7518 29.526 29.7214 23.5565 29.7214 16.1927C29.7214 8.82891 23.7518 2.85938 16.388 2.85938C9.02422 2.85938 3.05469 8.82891 3.05469 16.1927C3.05469 23.5565 9.02422 29.526 16.388 29.526Z" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
                           <path d="M16.388 2.85938C12.9643 6.45425 11.0547 11.2284 11.0547 16.1927C11.0547 21.1571 12.9643 25.9312 16.388 29.526C19.8117 25.9312 21.7214 21.1571 21.7214 16.1927C21.7214 11.2284 19.8117 6.45425 16.388 2.85938Z" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
                           <path d="M3.05469 16.1953H29.7214" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
                         </svg>
                    </div>
                </div>
                <h3 class="font-semibold text-lg mb-2">Website & Aplikasi</h3>
                <p class="text-sm text-gray-600 mb-4">Website responsif dan aplikasi mobile dengan teknologi terdepan</p>
                <a href="#" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm rounded hover:bg-blue-500 hover:shadow-lg hover:scale-105 transform transition duration-200 ease-in-out">
                    ➜ Lihat Detail
                </a>
            </div>

            <!-- Logo Design -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center border transform transition duration-300 hover:scale-105 hover:shadow-lg">
                <div class="flex justify-center mb-4">
                    <div class="bg-orange-100 text-orange-500 p-3 rounded-full">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13.647 21.0628C13.528 20.6014 13.2875 20.1803 12.9505 19.8433C12.6136 19.5064 12.1925 19.2659 11.731 19.1468L3.55104 17.0375C3.41148 16.9979 3.28865 16.9138 3.20119 16.7981C3.11373 16.6823 3.06641 16.5412 3.06641 16.3962C3.06641 16.2511 3.11373 16.11 3.20119 15.9942C3.28865 15.8785 3.41148 15.7944 3.55104 15.7548L11.731 13.6442C12.1923 13.5252 12.6133 13.2849 12.9502 12.9482C13.2872 12.6115 13.5278 12.1907 13.647 11.7295L15.7564 3.5495C15.7956 3.40939 15.8796 3.28595 15.9955 3.19802C16.1114 3.1101 16.2529 3.0625 16.3984 3.0625C16.5439 3.0625 16.6854 3.1101 16.8013 3.19802C16.9172 3.28595 17.0012 3.40939 17.0404 3.5495L19.1484 11.7295C19.2674 12.1909 19.5079 12.612 19.8449 12.949C20.1818 13.286 20.6029 13.5265 21.0644 13.6455L29.2444 15.7535C29.385 15.7923 29.5091 15.8762 29.5975 15.9923C29.6859 16.1084 29.7338 16.2502 29.7338 16.3962C29.7338 16.5421 29.6859 16.684 29.5975 16.8001C29.5091 16.9162 29.385 17 29.2444 17.0388L21.0644 19.1468C20.6029 19.2659 20.1818 19.5064 19.8449 19.8433C19.5079 20.1803 19.2674 20.6014 19.1484 21.0628L17.039 29.2428C16.9998 29.3829 16.9159 29.5064 16.7999 29.5943C16.684 29.6822 16.5425 29.7298 16.397 29.7298C16.2515 29.7298 16.11 29.6822 15.9941 29.5943C15.8782 29.5064 15.7942 29.3829 15.755 29.2428L13.647 21.0628Z" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M27.0664 4.39844V9.73177" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M29.7318 7.0625H24.3984" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M5.73047 23.0625V25.7292" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M7.0651 24.3984H4.39844" stroke="#9333EA" stroke-width="2.93333" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <h3 class="font-semibold text-lg mb-2">Logo Design</h3>
                <p class="text-sm text-gray-600 mb-4">Logo profesional yang mencerminkan identitas dan nilai brand Anda</p>
                <a href="#" class="inline-flex items-center px-4 py-2 bg-orange-500 text-white text-sm rounded hover:bg-orange-600 hover:shadow-lg hover:scale-105 transform transition duration-200 ease-in-out">
                    ➜ Lihat Detail
                </a>
            </div>

            <!-- Social Media Management -->
<div class="bg-white shadow-md rounded-lg p-6 text-center border transform transition duration-300 hover:scale-105 hover:shadow-lg">
  <!-- Ikon -->
  <div class="flex justify-center mb-4">
    <div class="bg-pink-100 text-pink-500 p-3 rounded-full">
      <div class="w-12 h-12 flex items-center justify-center bg-purple-100 text-purple-600 text-2xl rounded-xl">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22.8594 7L14.3594 15.5L9.35938 10.5L2.85938 17" stroke="#9333EA" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M16.8594 7H22.8594V13" stroke="#9333EA" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>

  <!-- Judul & Deskripsi -->
  <h3 class="font-semibold text-lg mb-2">Social Media Management</h3>
  <p class="text-sm text-gray-600 mb-4">
    Kelola dan kembangkan media sosial bisnis dengan strategi yang tepat
  </p>

  <!-- Tombol -->
  <a href="#" class="inline-flex items-center px-4 py-2 bg-pink-500 text-white text-sm rounded hover:bg-pink-600 hover:shadow-lg hover:scale-105 transform transition duration-200 ease-in-out">
    ➜ Lihat Detail
  </a>
</div>

            <!-- Custom Merchandise -->
<div class="bg-white shadow-md rounded-lg p-6 text-center border transform transition duration-300 hover:scale-105 hover:shadow-lg">
  <!-- Ikon -->
  <div class="flex justify-center mb-4">
    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
      <svg width="24" height="24" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.3984 8.60156H4.39844C3.84615 8.60156 3.39844 9.04928 3.39844 9.60156V11.6016C3.39844 12.1538 3.84615 12.6016 4.39844 12.6016H20.3984C20.9507 12.6016 21.3984 12.1538 21.3984 11.6016V9.60156C21.3984 9.04928 20.9507 8.60156 20.3984 8.60156Z" 
          stroke="#3B82F6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M12.3984 8.60156V21.6016" 
          stroke="#3B82F6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M19.3984 12.6016V19.6016C19.3984 20.132 19.1877 20.6407 18.8127 21.0158C18.4376 21.3908 17.9289 21.6016 17.3984 21.6016H7.39844C6.868 21.6016 6.3593 21.3908 5.98422 21.0158C5.60915 20.6407 5.39844 20.132 5.39844 19.6016V12.6016" 
          stroke="#3B82F6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M7.89844 8.602C7.2354 8.602 6.59951 8.33861 6.13067 7.86977C5.66183 7.40093 5.39844 6.76504 5.39844 6.102C5.39844 5.43896 5.66183 4.80307 6.13067 4.33423C6.59951 3.86539 7.2354 3.602 7.89844 3.602C8.86312 3.58519 9.80846 4.05326 10.6112 4.94516C11.4139 5.83706 12.0367 7.1114 12.3984 8.602C12.7602 7.1114 13.383 5.83706 14.1857 4.94516C14.9884 4.05326 15.9338 3.58519 16.8984 3.602C17.5615 3.602 18.1974 3.86539 18.6662 4.33423C19.135 4.80307 19.3984 5.43896 19.3984 6.102C19.3984 6.76504 19.135 7.40093 18.6662 7.86977C18.1974 8.33861 17.5615 8.602 16.8984 8.602" 
          stroke="#3B82F6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
  </div>

  <!-- Judul & Deskripsi -->
  <h3 class="font-semibold text-lg mb-2">Custom Merchandise</h3>
  <p class="text-sm text-gray-600 mb-4">
    Merchandise berkualitas tinggi untuk promosi dan corporate branding
  </p>

  <!-- Tombol -->
  <a href="#" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm rounded hover:bg-blue-600 hover:shadow-lg hover:scale-105 transform transition duration-200 ease-in-out">
    ➜ Lihat Detail
  </a>
</div>

</section>

<!-- digital creative -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold text-purple-600 mb-2">
      <span class="text-gradient bg-gradient-to-r from-purple-600 via-pink-500 to-cyan-500 bg-clip-text text-transparent">Digital Creative Services</span>
    </h2>
    <p class="text-gray-600 mb-12">
      Layanan digital lengkap untuk mengembangkan presence online bisnis Anda
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Card 1: UI/UX Design -->
      <div class="bg-white shadow-md rounded-xl overflow-hidden">
        <img src="{{ asset('images/digital 8.png') }}" alt="UIUX" class="w-full h-48 object-contain bg-white p-4">
        <div class="p-6 text-left">
          <h3 class="text-lg font-bold mb-1">UI/UX Design</h3>
          <p class="text-sm text-gray-600 mb-4">Desain interface yang user-friendly dan menarik untuk website dan aplikasi mobile</p>
          
          <p class="font-semibold mb-2">Fitur Utama:</p>
          <ul class="text-sm text-gray-700 space-y-1 mb-4">

            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>User Research & Analysis</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>wireframing & prototyping</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Visual Design System</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Usability Testing</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Responsive Design</span>
            </div>
          </ul>

          <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-blue-500 font-semibold">Mulai dari Rp 2.500.000/Bulan</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Durasi:</span>
            <span class="font-semibold">2–4 minggu</span>
          </div>
          </div>

          <a href="#" class="mt-4 inline-block w-full text-center bg-pink-500 hover:bg-pink-600 text-white py-2 rounded-md transition font-medium">
            ➜ Pesan Sekarang
          </a>
        </div>
      </div>

      <!-- Card 2: Website Development -->
      <div class="bg-white shadow-md rounded-xl overflow-hidden">
        <img src="{{ asset('images/digital 7.png') }}" alt="webdev" class="w-full h-48 object-contain bg-white p-4">
        <div class="p-6 text-left">
          <h3 class="text-lg font-bold mb-1">Website Development</h3>
          <p class="text-sm text-gray-600 mb-4">Website responsif dan modern dengan teknologi terdepan untuk bisnis Anda</p>
          
          <p class="font-semibold mb-2">Fitur Utama:</p>
          <ul class="text-sm text-gray-700 space-y-1 mb-4">

            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Feed Template Design</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>CMS Integration</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>E-Comerce Solutions</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>SEO Optimization</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Performance Optimization</span>
            </div>
          </ul>

          <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-blue-500 font-semibold">Mulai dari Rp 3.500.000/Bulan</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Durasi:</span>
            <span class="font-semibold">3–6 hari</span>
          </div>
          </div>

          <a href="#" class="mt-4 inline-block w-full text-center bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-md transition font-medium">
            ➜ Pesan Sekarang
          </a>
        </div>
      </div>

      <!-- Card 3: Mobile App Development -->
      <div class="bg-white shadow-md rounded-xl overflow-hidden">
        <img src="{{ asset('images/digital 6.png') }}" alt="mobiledev" class="w-full h-48 object-contain bg-white p-4">
        <div class="p-6 text-left">
          <h3 class="text-lg font-bold mb-1">Mobile App Development</h3>
          <p class="text-sm text-gray-600 mb-4">Aplikasi mobile iOS dan Android dengan performa optimal dan user experience terbaik</p>
          
          <p class="font-semibold mb-2">Fitur Utama:</p>
          <ul class="text-sm text-gray-700 space-y-1 mb-4">
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Native Ios & Android</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Cross Platform Development</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>API Integrations</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Push Notifications</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>App Store Deployment</span>
            </div>
          </ul>

          <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-blue-500 font-semibold">Mulai dari Rp 15.000.000/Bulan</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Durasi:</span>
            <span class="font-semibold">6–12 minggu</span>
          </div>
          </div>

          <a href="#" class="mt-4 inline-block w-full text-center bg-gradient-to-r from-orange-500 via-pink-500 to-red-500 hover:from-orange-600 hover:to-pink-600 text-white py-2 rounded-md transition font-medium shadow-md">
            ➜ Pesan Sekarang
          </a>
        </div>
      </div>

      <!-- Card 4: Website Development -->
      <div class="bg-white shadow-md rounded-xl overflow-hidden">
        <img src="{{ asset('images/digital 5.png') }}" alt="webdev" class="w-full h-48 object-contain bg-white p-4">
        <div class="p-6 text-left">
          <h3 class="text-lg font-bold mb-1">Logo Design</h3>
          <p class="text-sm text-gray-600 mb-4">Logo profesional yang mencerminkan identitas dan nilai brand Anda</p>
          
          <p class="font-semibold mb-2">Fitur Utama:</p>
          <ul class="text-sm text-gray-700 space-y-1 mb-4">

            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Konsep Logo Unik</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Multiple variations</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Brand Guidlines</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>File Format Lengkap</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Unlimitif Revisions</span>
            </div>
          </ul>

          <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-blue-500 font-semibold">Mulai dari Rp 500.000/Bulan</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Durasi:</span>
            <span class="font-semibold">1–2 minggu</span>
          </div>
          </div>

          <a href="#" class="mt-4 inline-block w-full text-center bg-gradient-to-r from-blue-500 via-blue-400 to-teal-500 hover:from-blue-600 hover:to-teal-600 text-white py-2 rounded-md transition font-medium shadow-md">
            ➜ Pesan Sekarang
          </a>
        </div>
      </div>

      <!-- Card 5: Website Development -->
      <div class="bg-white shadow-md rounded-xl overflow-hidden">
        <img src="{{ asset('images/digital 4.png') }}" alt="webdev" class="w-full h-48 object-contain bg-white p-4">
        <div class="p-6 text-left">
          <h3 class="text-lg font-bold mb-1">Brand Identity</h3>
          <p class="text-sm text-gray-600 mb-4">Website responsif dan modern dengan teknologi terdepan untuk bisnis Anda</p>
          
          <p class="font-semibold mb-2">Fitur Utama:</p>
          <ul class="text-sm text-gray-700 space-y-1 mb-4">

            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Logo Design</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Color Pallete</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Typography System </span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Bussines Card Design</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Letterhead & Stationery</span>
            </div>
          </ul>

          <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-blue-500 font-semibold">Mulai dari Rp 2.000.000/Bulan</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Durasi:</span>
            <span class="font-semibold">2-3 minggu</span>
          </div>
          </div>

          <a href="#" class="mt-4 inline-block w-full text-center bg-gradient-to-r from-blue-500 via-pink-500 to-red-500 hover:from-blue-600 hover:to-teal-600 text-white py-2 rounded-md transition font-medium shadow-md">
            ➜ Pesan Sekarang
          </a>
        </div>
      </div>

      <!-- Card 6: Website Development -->
      <div class="bg-white shadow-md rounded-xl overflow-hidden">
        <img src="images/digital 3.png" alt="webdev" class="w-full h-48 object-contain bg-white p-4">
        <div class="p-6 text-left">
          <h3 class="text-lg font-bold mb-1">Sosial Media Management</h3>
          <p class="text-sm text-gray-600 mb-4">Kelola dan kembangkan media sosial bisnis Anda dengan strategi yang tepat</p>
          
          <p class="font-semibold mb-2">Fitur Utama:</p>
          <ul class="text-sm text-gray-700 space-y-1 mb-4">

            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Content Planning & Strategy</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Daily Posting Scedule</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Community Management</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Analytics & Strategy</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Paid Ads Management</span>
            </div>
          </ul>

          <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-blue-500 font-semibold">Mulai dari Rp 1.500.000/Bulan</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Durasi:</span>
            <span class="font-semibold">ongoing</span>
          </div>
          </div>

          <a href="#" class="mt-4 inline-block w-full text-center bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-md transition font-medium">
            ➜ Pesan Sekarang
          </a>
        </div>
      </div>

      <!-- Card 7: Website Development -->
      <div class="bg-white shadow-md rounded-xl overflow-hidden">
        <img src="images/digital 1.png" alt="webdev" class="w-full h-48 object-contain bg-white p-4">
        <div class="p-6 text-left">
          <h3 class="text-lg font-bold mb-1">Digital Marketing</h3>
          <p class="text-sm text-gray-600 mb-4">strategi pemasaran digital yang komprehensif untuk meningkatkan brand awarnes</p>
          
          <p class="font-semibold mb-2">Fitur Utama:</p>
          <ul class="text-sm text-gray-700 space-y-1 mb-4">
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>SEO & SEM strategi </span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Sosial Media Advertisting</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Email Marketing</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Content Marketing</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Analytics & Optimization</span>
            </div>
          </ul>

          <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-blue-500 font-semibold">Mulai dari Rp 2.000.000/Bulan</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Durasi:</span>
            <span class="font-semibold">ongoing</span>
          </div>
          </div>

          <a href="#" class="mt-4 inline-block w-full text-center bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-md transition font-medium">
            ➜ Pesan Sekarang
          </a>
        </div>
      </div>

      <!-- Card 8: Website Development -->
      <div class="bg-white shadow-md rounded-xl overflow-hidden">
        <img src="images/digital 2.png" alt="webdev" class="w-full h-48 object-contain bg-white p-4">
        <div class="p-6 text-left">
          <h3 class="text-lg font-bold mb-1">Sosial Media Feed Design</h3>
          <p class="text-sm text-gray-600 mb-4">Desain content visual yang menarik dan konsisten untuk feed media sosial</p>
          
          <p class="font-semibold mb-2">Fitur Utama:</p>
          <ul class="text-sm text-gray-700 space-y-1 mb-4">

           <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Feed Template Design</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Story Templates</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Highlight Covers</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Post Courousel Design </span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Brand Consistency</span>
            </div>
          </ul>

          <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-blue-500 font-semibold">Mulai dari Rp 800.000/Bulan</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Durasi:</span>
            <span class="font-semibold">ongoing</span>
          </div>
          </div>

          <a href="#" class="mt-4 inline-block w-full text-center bg-gradient-to-r from-blue-500 via-cyan-500 to-teal-500 hover:from-blue-600 hover:to-teal-600 text-white py-2 rounded-md transition font-medium shadow-md">
            ➜ Pesan Sekarang
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- custom drinkware -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold text-cyan-600 mb-2">
      <span class="text-blue-700">Custom Drinkware Collection</span>
    </h2>
    <p class="text-gray-600 mb-12">
      Koleksi lengkap drinkware custom berkualitas tinggi untuk promosi brand Anda
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left">
      <!-- 1. Botol Minum & Tumbler -->
      <div class="bg-white rounded-xl shadow overflow-hidden">
        <img src="images/botol.png" alt="Botol Minum" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-lg font-bold mb-1">Botol Minum & Tumbler Custom</h3>
          <p class="text-sm text-gray-600 mb-4">Botol minum dan tumbler berkualitas tinggi dengan custom design sesuai brand Anda</p>
          <p class="font-semibold mb-2">Spesifikasi:</p>
          <ul class="text-sm text-gray-700 space-y-1 mb-4">

           <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Native Ios & Android</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Cross Platform Development</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>API Integrations</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Push Notifications</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>App Store Deployment</span>
            </div>
          </ul>
          <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-cyan-600 font-semibold">Mulai dari Rp 25.000/pcs</span>
          </div>
       <div class="flex justify-between">
          <span class="text-gray-500">Produksi:</span>
          <span class="font-semibold">7–14 hari</span>
        </div>
       </div>
          <a href="#" class="mt-4 inline-block w-full text-center bg-gradient-to-r from-cyan-400 to-blue-500 hover:brightness-110 text-white py-2 rounded-md transition font-medium">
            ➜ Order Sekarang
          </a>
        </div>
      </div>

      <!-- 2. Mug Custom -->
      <div class="bg-white rounded-xl shadow overflow-hidden">
        <img src="images/mug.png" alt="Mug Custom" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-lg font-bold mb-1">Mug Custom</h3>
          <p class="text-sm text-gray-600 mb-4">Mug ceramic dan stainless berkualitas premium dengan printing yang tahan lama</p>
          <p class="font-semibold mb-2">Spesifikasi:</p>
          <ul class="text-sm text-gray-700 space-y-1 mb-4">

            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Ceramic & stainles Options</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Full Color Printing</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Heat-resistant design</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Custom Packaging</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Minimum order 24 pcs</span>
            </div>
          </ul>
          <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-cyan-600 font-semibold">Mulai dari Rp 20.000/pcs</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Produksi:</span>
            <span class="font-semibold">7–10 hari</span>
          </div>
          </div>
          <a href="#" class="mt-4 inline-block w-full text-center bg-gradient-to-r from-orange-400 to-red-500 hover:brightness-110 text-white py-2 rounded-md transition font-medium">
            ➜ Order Sekarang
          </a>
        </div>
      </div>

      <!-- 3. Botol Sport -->
      <div class="bg-white rounded-xl shadow overflow-hidden">
        <img src="images/gelas.png" alt="Botol Sport" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-lg font-bold mb-1">Gelas Kaca Premium </h3>
          <p class="text-sm text-gray-600 mb-4">Gelas kaca berkualitas tinggi untuk kebutuhan corporate dan event spesial</p>
          <p class="font-semibold mb-2">Spesifikasi:</p>
          <ul class="text-sm text-gray-700 space-y-1 mb-4">

            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Material Kaca Berkualitas</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Berbagai Model & Ukuran </span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Etching & Printing Options</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Elegant Packaging</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Minimum Order 50 pcs</span>
            </div>
          </ul>
          <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-cyan-600 font-semibold">Mulai dari Rp 15.000/pcs</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Produksi:</span>
            <span class="font-semibold">10–14 hari</span>
          </div>
          </div>
          <a href="#" class="mt-4 inline-block w-full text-center bg-gradient-to-r from-green-400 to-teal-500 hover:brightness-110 text-white py-2 rounded-md transition font-medium">
            ➜ Order Sekarang
          </a>
        </div>
      </div>

      <!-- 4. Thermos Printing -->
      <div class="bg-white rounded-xl shadow overflow-hidden">
        <img src="images/dringjar.png"" alt="Thermos Custom" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-lg font-bold mb-1">Dring jar & Gelas Cup</h3>
          <p class="text-sm text-gray-600 mb-4">Drinkjar Unik dan gelas cup branded untuk promosi yang memorable</p>
          <p class="font-semibold mb-2">Spesifikasi:</p>
          <ul class="text-sm text-gray-700 space-y-1 mb-4">

           <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Mason Jar style</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Custom cup design</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Food Grade material</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Creative Packaging</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Minimum Orders 50 pcs</span>
            </div>
          </ul>
          <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-cyan-600 font-semibold">Mulai dari Rp 18.000/pcs</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Produksi:</span>
            <span class="font-semibold">7–12 hari</span>
          </div>
          </div>
          <a href="#" class="mt-4 inline-block w-full text-center bg-gradient-to-r from-purple-500 to-fuchsia-500 hover:brightness-110 text-white py-2 rounded-md transition font-medium">
            ➜ Order Sekarang
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- custom bags -->
<section class="py-12 bg-white">
  <div class="text-center mb-10">
    <h2 class="text-pink-600 text-3xl font-bold">Custom Bags Collection</h2>
    <p class="text-gray-600 mt-2">Berbagai jenis tas custom untuk kebutuhan promosi dan corporate branding</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto px-4">
    <!-- Card 1: Totebag Canvas Premium -->
    <div class="border rounded-xl p-6 shadow-md">
      <img src="images/totebag.png" alt="Totebag Canvas" class="mb-4 mx-auto">
      <h3 class="text-xl font-semibold mb-2">Totebag Canvas Premium</h3>
      <p class="text-gray-600 mb-4">Totebag canvas berkualitas tinggi dengan custom design yang tahan lama</p>
      <ul class="text-sm text-gray-700 mb-4 space-y-1">
        <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Canvas Material Premium</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Custom Size & Design</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Sablon/Bordir Options</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Eco-friendly Material</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Minimum Order 50 pcs</span>
            </div>
      </ul>
      <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-pink-600 font-semibold">Mulai dari Rp 15.000/pcs</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Produksi:</span>
            <span class="font-semibold">7–14 hari</span>
          </div>
          </div>
      <button class="mt-4 w-full bg-pink-500 hover:bg-pink-600 text-white py-2 rounded-lg font-medium">→ Order Sekarang</button>
    </div>

    <!-- Card 2: Tas Furing Spunbond -->
    <div class="border rounded-xl p-6 shadow-md">
      <img src="images/totebag 2.png" alt="Tas Spunbond" class="mb-4 mx-auto">
      <h3 class="text-xl font-semibold mb-2">Tas Furing Spunbond</h3>
      <p class="text-gray-600 mb-4">Tas furing spunbond yang praktis dan ekonomis untuk promosi brand</p>
      <ul class="text-sm text-gray-700 mb-4 space-y-1">
        <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Material Spunbond Berkualitas</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Berbagai Warna Tersedia</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Custom Print 1–4 Warna </span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Lightweight & Durable</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Minimum Order 100 pcs</span>
            </div>
      </ul>
      <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-pink-600 font-semibold">Mulai dari Rp 8.000/pcs</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Produksi:</span>
            <span class="font-semibold">5–10 hari</span>
          </div>
          </div>
      <button class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-medium">→ Order Sekarang</button>
    </div>

    <!-- Card 3: Tas Kertas & Plastik Custom -->
    <div class="border rounded-xl p-6 shadow-md">
      <img src="images/totebag 3.png" alt="Tas Kertas & Plastik" class="mb-4 mx-auto">
      <h3 class="text-xl font-semibold mb-2">Tas Kertas & Plastik Custom</h3>
      <p class="text-gray-600 mb-4">Tas kertas dan plastik branded untuk packaging dan promosi yang efektif</p>
      <ul class="text-sm text-gray-700 mb-4 space-y-1">
           <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Paper & Plastic Options</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Custom Size & Handle</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Full Color Printing</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Lamination Available</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Minimum Order 500 pcs</span>
            </div>
      </ul>
      <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-pink-600 font-semibold">Mulai dari Rp 3.000/pcs</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Produksi:</span>
            <span class="font-semibold">7–14 hari</span>
          </div>
          </div>
      <button class="mt-4 w-full bg-green-500 hover:bg-green-600 text-white py-2 rounded-lg font-medium">→ Order Sekarang</button>
    </div>
  </div>
</section>

<!-- powerbank -->
<section class="py-12 bg-gray-50">
  <div class="text-center mb-10">
    <h2 class="text-green-600 text-3xl font-bold">Corporate Gifts & Tech</h2>
    <p class="text-gray-600 mt-2">Merchandise teknologi dan corporate gifts premium untuk kebutuhan bisnis</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto px-4">
    <!-- Card 1: Powerbank Custom -->
    <div class="bg-white border rounded-xl p-6 shadow-md">
      <img src="images/powerbank.png" alt="Powerbank Custom" class="mb-4 mx-auto">
      <h3 class="text-xl font-semibold mb-2">Powerbank Custom</h3>
      <p class="text-gray-600 mb-4">Powerbank berkualitas tinggi dengan custom design untuk corporate gifts</p>
      <ul class="text-sm text-gray-700 mb-4 space-y-1">
        <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Kapasitas 5000–20000 mAh</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Fast Charging Support</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Custom Logo Engraving</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Premium Packaging</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Minimum Order 25 pcs</span>
            </div>
      </ul>
      <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-green-600 font-semibold">Mulai dari Rp 3.000/pcs</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Produksi:</span>
            <span class="font-semibold">10–21 hari</span>
          </div>
          </div>
      <button class="mt-4 w-full bg-green-500 hover:bg-green-600 text-white py-2 rounded-lg font-medium">→ Order Sekarang</button>
    </div>

    <!-- Card 2: Flashdisk Custom -->
    <div class="bg-white border rounded-xl p-6 shadow-md">
      <img src="images/flasdisk.png" alt="Flashdisk Custom" class="mb-4 mx-auto">
      <h3 class="text-xl font-semibold mb-2">Flashdisk Custom</h3>
      <p class="text-gray-600 mb-4">Flashdisk branded dengan berbagai kapasitas dan model unik</p>
      <ul class="text-sm text-gray-700 mb-4 space-y-1">
        <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Kapasitas 4GB–128GB</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Custom Shape & Design</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Logo Engraving/Printing</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Data Preload Available</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Minimum Order 25 pcs</span>
            </div>
      </ul>
      <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-green-600 font-semibold">Mulai dari Rp 35.000/pcs</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Produksi:</span>
            <span class="font-semibold">7–14 hari</span>
          </div>
          </div>
      <button class="mt-4 w-full bg-gradient-to-r from-purple-500 to-pink-500 hover:brightness-110 text-white py-2 rounded-lg font-medium">→ Order Sekarang</button>
    </div>

    <!-- Card 3: Paket Seminar Kit -->
    <div class="bg-white border rounded-xl p-6 shadow-md">
      <img src="images/paket.png" alt="Paket Seminar Kit" class="mb-4 mx-auto">
      <h3 class="text-xl font-semibold mb-2">Paket Seminar Kit</h3>
      <p class="text-gray-600 mb-4">Paket lengkap seminar kit dengan custom branding untuk event corporate</p>
      <ul class="text-sm text-gray-700 mb-4 space-y-1">
        <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Tas Seminar + Isi Lengkap</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Notebook & Pulpen Custom</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>ID Card Holder</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Custom Packaging</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Minimum Order 50 pcs</span>
            </div>
      </ul>
      <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-green-600 font-semibold">Mulai dari Rp 45.000/pcs</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Produksi:</span>
            <span class="font-semibold">10–21 hari</span>
          </div>
          </div>
      <button class="mt-4 w-full bg-gradient-to-r from-indigo-500 to-purple-500 hover:brightness-110 text-white py-2 rounded-lg font-medium">→ Order Sekarang</button>
    </div>
  </div>
</section>

 <!-- lifestayle merchandise -->
<section class="py-12 bg-white">
  <div class="text-center mb-10">
    <h2 class="text-3xl font-bold text-orange-600">Lifestyle Merchandise</h2>
    <p class="text-gray-600 mt-2">Merchandise lifestyle untuk branding dan promosi yang efektif sehari-hari</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-7xl mx-auto px-4">
    <!-- Card 1: Payung Custom Premium -->
    <div class="bg-white border rounded-xl shadow-md overflow-hidden">
      <img src="images/gambar 1.png" alt="Payung Custom Premium" class="w-full object-cover h-64">
      <div class="p-6">
        <h3 class="text-xl font-semibold mb-2">Payung Custom Premium</h3>
        <p class="text-gray-600 mb-4">Payung berkualitas tinggi dengan custom design untuk promosi yang efektif</p>
        <ul class="text-sm text-gray-700 mb-4 space-y-1">
           <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Material Berkualitas Tinggi</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Tahan Angin & Air</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Custom Print Full Color</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Berbagai Ukuran</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Minimum Order 50 pcs</span>
            </div>
        </ul>
        <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-orange-500 font-semibold">Mulai dari Rp 35.000/pcs</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Produksi:</span>
            <span class="font-semibold">10–21 hari</span>
          </div>
          </div>
        <button class="mt-4 w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg font-medium">
          → Order Sekarang
        </button>
      </div>
    </div>

    <!-- Card 2: Jam Dinding Custom -->
    <div class="bg-white border rounded-xl shadow-md overflow-hidden">
      <img src="images/gambar 2.png" alt="Jam Dinding Custom" class="w-full object-cover h-64">
      <div class="p-6">
        <h3 class="text-xl font-semibold mb-2">Jam Dinding Custom</h3>
        <p class="text-gray-600 mb-4">Jam dinding custom dengan design unik untuk dekorasi dan promosi</p>
        <ul class="text-sm text-gray-700 mb-4 space-y-1">
          <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Berbagai Bentuk & Ukuran</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Mesin Jam Berkualitas</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Custom Design & Logo</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Silent Movement</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Minimum Order 25 pcs</span>
            </div>
        </ul>
        <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-orange-500 font-semibold">Mulai dari Rp 45.000/pcs</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Produksi:</span>
            <span class="font-semibold">14–21 hari</span>
          </div>
          </div>
        <button class="mt-4 w-full bg-gradient-to-r from-orange-500 to-red-500 hover:brightness-110 text-white py-2 rounded-lg font-medium">
          → Order Sekarang
        </button>
      </div>
    </div>

    <!-- Card 3: Payung Custom Premium (Copy) -->
    <div class="bg-white border rounded-xl shadow-md overflow-hidden">
      <img src="images/gambar 4.png" alt="Payung Custom Premium" class="w-full object-cover h-64">
      <div class="p-6">
        <h3 class="text-xl font-semibold mb-2">Pulpen & Pin Custom</h3>
        <p class="text-gray-600 mb-4">Pulpen & Pin branded untuk promosi sehari hari yang efektif </p>
        <ul class="text-sm text-gray-700 mb-4 space-y-1">
          <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Berbagai Model Pulpen</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Pin Enamel/Metal</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Custom Logo & Warna</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Packaging menarik </span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Minimum Order 100 pcs</span>
            </div>
        </ul>
        <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-orange-500 font-semibold">Mulai dari Rp 5.000/pcs</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Produksi:</span>
            <span class="font-semibold">7–14 hari</span>
          </div>
          </div>
        <button class="mt-4 w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg font-medium">
          → Order Sekarang
        </button>
      </div>
    </div>

    <!-- Card 4: Payung Custom Premium (Copy) -->
    <div class="bg-white border rounded-xl shadow-md overflow-hidden">
      <img src="images/gambar 3.png" alt="Payung Custom Premium" class="w-full object-cover h-64">
      <div class="p-6">
        <h3 class="text-xl font-semibold mb-2">Asbak & Aksesoris</h3>
        <p class="text-gray-600 mb-4">Asbak custom dan berbagai aksesoris branded lainnya</p>
        <ul class="text-sm text-gray-700 mb-4 space-y-1">
          <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Material berkualitas</span>
          </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Custom shape & design</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Logo Engraving</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>packaging ekslusif</span>
            </div>
            <div class="flex items-center space-x-2">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.9935 8.18996V8.8033C14.9927 10.2409 14.5272 11.6397 13.6664 12.7912C12.8056 13.9426 11.5957 14.7849 10.2171 15.1926C8.83844 15.6002 7.365 15.5512 6.01647 15.053C4.66794 14.5548 3.51659 13.634 2.73413 12.428C1.95167 11.222 1.58002 9.79534 1.67461 8.36084C1.7692 6.92634 2.32496 5.56085 3.25901 4.46801C4.19306 3.37517 5.45535 2.61355 6.85762 2.29673C8.25989 1.9799 9.727 2.12485 11.0402 2.70996" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.32812 8.13542L8.32813 10.1354L14.9948 3.46875" stroke="#22C55E" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Minimum Order 50 pcs</span>
            </div>
        </ul>
        <div class="border-t pt-3 text-sm space-y-1">
          <div class="flex justify-between">
            <span class="text-gray-500">Harga:</span>
            <span class="text-orange-500 font-semibold">Mulai dari Rp 25.000/pcs</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-500">Produksi:</span>
            <span class="font-semibold">10–14 hari</span>
          </div>
          </div>
        <button class="mt-4 w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg font-medium">
          → Order Sekarang
        </button>
      </div>
    </div>
  </div>
</section>

<!-- kerja kami -->
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold mb-2">
      <span class="text-purple-600">Proses</span> <span class="text-cyan-600">Kerja Kami</span>
    </h2>
    <p class="text-gray-600 mb-12">Metodologi yang terbukti untuk hasil yang optimal</p>

    <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
      
      <!-- 1. Konsultasi -->
      <div class="flex flex-col items-center text-center">
        <div class="relative mb-3">
          <div class="w-14 h-14 rounded-full bg-gradient-to-r from-purple-500 to-cyan-400 flex items-center justify-center text-white text-xl shadow-md">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20.52 3.48A11.936 11.936 0 0012 0C5.37 0 .009 5.371.009 12c0 2.108.544 4.097 1.578 5.856L0 24l6.281-1.647A11.944 11.944 0 0012 24c6.627 0 12-5.373 12-12 0-3.191-1.243-6.212-3.48-8.52zM12 21.75a9.77 9.77 0 01-4.949-1.335l-.352-.203-3.732.977.996-3.63-.23-.376A9.746 9.746 0 012.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
             </svg>
          </div>
          <span class="absolute -top-2 -right-2 bg-orange-500 text-white text-xs w-6 h-6 flex items-center justify-center rounded-full font-bold">01</span>
        </div>
        <h4 class="font-semibold text-sm mb-1">Konsultasi</h4>
        <p class="text-gray-500 text-xs">Diskusi kebutuhan dan tujuan proyek Anda</p>
      </div>

      <!-- 2. Perencanaan -->
      <div class="flex flex-col items-center text-center">
        <div class="relative mb-3">
          <div class="w-14 h-14 rounded-full bg-gradient-to-r from-purple-500 to-cyan-400 flex items-center justify-center text-white text-xl shadow-md">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.9961 22.2031C17.5189 22.2031 21.9961 17.726 21.9961 12.2031C21.9961 6.68028 17.5189 2.20312 11.9961 2.20312C6.47325 2.20312 1.99609 6.68028 1.99609 12.2031C1.99609 17.726 6.47325 22.2031 11.9961 22.2031Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M11.9961 6.20312V12.2031L15.9961 14.2031" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <span class="absolute -top-2 -right-2 bg-orange-500 text-white text-xs w-6 h-6 flex items-center justify-center rounded-full font-bold">02</span>
        </div>
        <h4 class="font-semibold text-sm mb-1">Perencanaan</h4>
        <p class="text-gray-500 text-xs">Membuat strategi dan timeline yang detail</p>
      </div>

      <!-- 3. Eksekusi -->
      <div class="flex flex-col items-center text-center">
        <div class="relative mb-3">
          <div class="w-14 h-14 rounded-full bg-gradient-to-r from-purple-500 to-cyan-400 flex items-center justify-center text-white text-xl shadow-md">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.3984 18.2031L22.3984 12.2031L16.3984 6.20312" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M8.39844 6.20312L2.39844 12.2031L8.39844 18.2031" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <span class="absolute -top-2 -right-2 bg-orange-500 text-white text-xs w-6 h-6 flex items-center justify-center rounded-full font-bold">03</span>
        </div>
        <h4 class="font-semibold text-sm mb-1">Eksekusi</h4>
        <p class="text-gray-500 text-xs">Mengerjakan proyek sesuai dengan rencana</p>
      </div>

      <!-- 4. Review & Revisi -->
      <div class="flex flex-col items-center text-center">
        <div class="relative mb-3">
          <div class="w-14 h-14 rounded-full bg-gradient-to-r from-purple-500 to-cyan-400 flex items-center justify-center text-white text-xl shadow-md">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.7969 11.281V12.201C22.7956 14.3575 22.0974 16.4557 20.8062 18.1829C19.515 19.91 17.7002 21.1735 15.6322 21.7849C13.5643 22.3964 11.3541 22.3229 9.33135 21.5756C7.30856 20.8283 5.58153 19.4471 4.40784 17.6381C3.23414 15.8291 2.67667 13.6891 2.81855 11.5374C2.96044 9.3856 3.79408 7.33736 5.19515 5.69811C6.59623 4.05886 8.48966 2.91642 10.5931 2.44118C12.6965 1.96595 14.8971 2.18337 16.8669 3.06104" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.79688 11.2031L12.7969 14.2031L22.7969 4.20312" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <span class="absolute -top-2 -right-2 bg-orange-500 text-white text-xs w-6 h-6 flex items-center justify-center rounded-full font-bold">04</span>
        </div>
        <h4 class="font-semibold text-sm mb-1">Review & Revisi</h4>
        <p class="text-gray-500 text-xs">Review hasil dan melakukan penyesuaian</p>
      </div>

      <!-- 5. Delivery -->
      <div class="flex flex-col items-center text-center">
        <div class="relative mb-3">
          <div class="w-14 h-14 rounded-full bg-gradient-to-r from-purple-500 to-cyan-400 flex items-center justify-center text-white text-xl shadow-md">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.6779 13.0938L17.1929 21.6198C17.2099 21.7201 17.1958 21.8233 17.1525 21.9155C17.1093 22.0077 17.0389 22.0844 16.9509 22.1355C16.8628 22.1866 16.7612 22.2096 16.6597 22.2015C16.5582 22.1933 16.4617 22.1543 16.3829 22.0897L12.8029 19.4027C12.6301 19.2736 12.4202 19.2039 12.2044 19.2039C11.9887 19.2039 11.7787 19.2736 11.6059 19.4027L8.01992 22.0887C7.94124 22.1532 7.84479 22.1921 7.74342 22.2003C7.64205 22.2085 7.5406 22.1856 7.45259 22.1346C7.36458 22.0837 7.2942 22.0071 7.25084 21.9151C7.20748 21.8231 7.19321 21.7201 7.20992 21.6198L8.72392 13.0938" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M12.1992 14.2031C15.5129 14.2031 18.1992 11.5168 18.1992 8.20312C18.1992 4.88942 15.5129 2.20312 12.1992 2.20312C8.88551 2.20312 6.19922 4.88942 6.19922 8.20312C6.19922 11.5168 8.88551 14.2031 12.1992 14.2031Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <span class="absolute -top-2 -right-2 bg-orange-500 text-white text-xs w-6 h-6 flex items-center justify-center rounded-full font-bold">05</span>
        </div>
        <h4 class="font-semibold text-sm mb-1">Delivery</h4>
        <p class="text-gray-500 text-xs">Serah terima hasil final dan dokumentasi</p>
      </div>
    </div>
  </div>
</section>

<section class="bg-gray-50 py-16">
  <div class="flex justify-center">
    <div class="max-w-3xl w-full px-4">
      <!-- Heading -->
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-cyan-500">
          Frequently Asked Questions
        </h2>
        <p class="text-gray-600 mt-2">
          Pertanyaan yang sering diajukan tentang layanan kami
        </p>
      </div>

      <!-- FAQ List -->
      <div class="space-y-6">
        <!-- FAQ Item 1 -->
        <div class="bg-white border rounded-lg p-6 shadow-sm">
          <h3 class="font-semibold text-lg text-gray-900 mb-2">Berapa minimum order untuk merchandise?</h3>
          <p class="text-gray-700">
            Minimum order bervariasi per produk: Totebag 50pcs, Mug 24pcs, Powerbank 25pcs, Pulpen 100pcs.
            Untuk digital services tidak ada minimum order.
          </p>
        </div>

        <!-- FAQ Item 2 -->
        <div class="bg-white border rounded-lg p-6 shadow-sm">
          <h3 class="font-semibold text-lg text-gray-900 mb-2">Berapa lama waktu produksi merchandise?</h3>
          <p class="text-gray-700">
            Waktu produksi merchandise 7–21 hari tergantung jenis produk dan quantity. 
            Digital services 1–12 minggu tergantung kompleksitas.
          </p>
        </div>

        <!-- FAQ Item 3 -->
        <div class="bg-white border rounded-lg p-6 shadow-sm">
          <h3 class="font-semibold text-lg text-gray-900 mb-2">Apakah ada garansi untuk layanan yang diberikan?</h3>
          <p class="text-gray-700">
            Ya, kami memberikan garansi 30 hari untuk bug fixing digital services dan garansi kualitas produk merchandise.
          </p>
        </div>

        <!-- FAQ Item 4 -->
        <div class="bg-white border rounded-lg p-6 shadow-sm">
          <h3 class="font-semibold text-lg text-gray-900 mb-2">Bagaimana sistem pembayaran yang tersedia?</h3>
          <p class="text-gray-700">
            Pembayaran bertahap: 50% DP, 50% pelunasan. Untuk merchandise bisa full payment.
            Pembayaran via transfer bank atau e-wallet.
          </p>
        </div>

        <!-- FAQ Item 5 -->
        <div class="bg-white border rounded-lg p-6 shadow-sm">
          <h3 class="font-semibold text-lg text-gray-900 mb-2">Apakah bisa custom design sepenuhnya?</h3>
          <p class="text-gray-700">
            Tentu! Kami menyediakan custom design sepenuhnya baik untuk digital services maupun merchandise sesuai kebutuhan brand Anda.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Gradient Atas -->
<section class="bg-gradient-to-r from-purple-500 via-indigo-400 to-cyan-400 text-white text-center py-16 px-4">
  <h2 class="text-3xl font-bold mb-3">Siap memulai proyek anda?</h2>
  <p class="mb-6 text-lg">Konsultasikan kebutuhan digital creative dan custom merchandise anda dengan tim ahli kami secara gratis</p>

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
      <svg width="15" height="15" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.0634 11.2827V13.2827C15.0642 13.4683 15.0262 13.6521 14.9518 13.8222C14.8774 13.9924 14.7683 14.1451 14.6315 14.2706C14.4947 14.3961 14.3331 14.4917 14.1573 14.5511C13.9814 14.6106 13.795 14.6327 13.6101 14.616C11.5587 14.3931 9.5881 13.6921 7.85677 12.5693C6.24598 11.5458 4.88032 10.1801 3.85677 8.56934C2.73008 6.83014 2.02893 4.85 1.8101 2.78934C1.79344 2.60498 1.81535 2.41918 1.87443 2.24375C1.93352 2.06833 2.02848 1.90713 2.15328 1.77042C2.27807 1.6337 2.42997 1.52448 2.59929 1.44968C2.76862 1.37489 2.95166 1.33618 3.13677 1.336H5.13677C5.4603 1.33282 5.77396 1.44739 6.01927 1.65836C6.26459 1.86933 6.42482 2.1623 6.4701 2.48267C6.55451 3.12271 6.71107 3.75115 6.93677 4.356C7.02646 4.59462 7.04587 4.85395 6.9927 5.10326C6.93953 5.35257 6.81601 5.58141 6.63677 5.76267L5.7901 6.60934C6.73914 8.27837 8.12107 9.6603 9.7901 10.6093L10.6368 9.76267C10.818 9.58343 11.0469 9.4599 11.2962 9.40673C11.5455 9.35356 11.8048 9.37297 12.0434 9.46267C12.6483 9.68837 13.2767 9.84492 13.9168 9.92934C14.2406 9.97502 14.5364 10.1381 14.7478 10.3877C14.9592 10.6372 15.0715 10.9557 15.0634 11.2827Z" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      Lihat Portfolio
    </a>
  </div>
</section>
@endsection

