@extends('layouts.apu')

@section('title', 'UI/UX Design - Titik Visual')

@section('content')
<section class="bg-gray-100 py-16 px-4 md:px-8">
  <div class="max-w-7xl mx-auto bg-white rounded-2xl shadow-lg p-10">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-800">Our Program</h2>
      <p class="text-lg text-gray-600 mt-2">Magangjogja.com</p>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
     <!-- Program 1 -->
<div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
  <div class="flex items-start space-x-4">
    <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">1</div>
    <div>
      <h3 class="font-semibold text-indigo-800">Dosen & Guru Tamu</h3>
      <p class="text-sm text-gray-600">Perusahaan menerjunkan langsung praktisi/mentor untuk memberikan pembelajaran ke siswa/mahasiswa.</p>
    </div>
  </div>
</div>

<!-- Program 2 -->
<div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
  <div class="flex items-start space-x-4">
    <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">2</div>
    <div>
      <h3 class="font-semibold text-indigo-800">Workshop & Seminar</h3>
      <p class="text-sm text-gray-600">Memberikan pelatihan kepada mahasiswa/siswa untuk meningkatkan skill dan pengalaman industri.</p>
    </div>
  </div>
</div>

      <!-- Program 3 -->
       <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
      <div class="flex items-start space-x-4">
        <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">3</div>
        <div>
          <h3 class="font-semibold text-indigo-800">Company Visit</h3>
          <p class="text-sm text-gray-600">Mengunjungi perusahaan untuk mengenal proses kerja dan lingkungan kerja secara langsung.</p>
        </div>
      </div>
    </div>

      <!-- Program 4 -->
      <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
      <div class="flex items-start space-x-4">
        <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">4</div>
        <div>
          <h3 class="font-semibold text-indigo-800">PKL/Magang</h3>
          <p class="text-sm text-gray-600">Praktek Kerja Lapangan di perusahaan langsung didampingi mentor profesional.</p>
        </div>
      </div>
      </div>

      <!-- Program 5 -->
       <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">   
      <div class="flex items-start space-x-4">
        <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">5</div>
        <div>
          <h3 class="font-semibold text-indigo-800">Kerja Praktik</h3>
          <p class="text-sm text-gray-600">Mahasiswa/i melakukan praktik kerja di lingkungan industri untuk menambah wawasan nyata.</p>
        </div>
      </div>
    </div>

      <!-- Program 6 -->
       <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
      <div class="flex items-start space-x-4">
        <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">6</div>
        <div>
          <h3 class="font-semibold text-indigo-800">Kunjungan Industri</h3>
          <p class="text-sm text-gray-600">Kegiatan observasi proses kerja, teknologi, dan budaya perusahaan secara langsung.</p>
        </div>
      </div>
       </div>

      <!-- Program 7 -->
       <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
      <div class="flex items-start space-x-4">
        <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">7</div>
        <div>
          <h3 class="font-semibold text-indigo-800">Magang Merdeka</h3>
          <p class="text-sm text-gray-600">Program MBKM yang dilaksanakan oleh mahasiswa di perusahaan mitra untuk memenuhi SKS.</p>
        </div>
      </div>
       </div>

      <!-- Program 8 -->
       <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
      <div class="flex items-start space-x-4">
        <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">8</div>
        <div>
          <h3 class="font-semibold text-indigo-800">Kelas Industri</h3>
          <p class="text-sm text-gray-600">Pembelajaran terintegrasi kurikulum industri dan sekolah yang disampaikan oleh praktisi.</p>
        </div>
      </div>
       </div>

      <!-- Program 9 -->
       <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
      <div class="flex items-start space-x-4">
        <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">9</div>
        <div>
          <h3 class="font-semibold text-indigo-800">Tugas Akhir</h3>
          <p class="text-sm text-gray-600">Kolaborasi mahasiswa dan industri dalam menyusun skripsi/tugas akhir berbasis riset terapan.</p>
        </div>
      </div>
       </div>

      <!-- Program 10 -->
       <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
      <div class="flex items-start space-x-4">
        <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">10</div>
        <div>
          <h3 class="font-semibold text-indigo-800">Praktik Industri</h3>
          <p class="text-sm text-gray-600">Siswa melaksanakan praktik kerja di lingkungan industri sebagai bagian pembelajaran sekolah.</p>
        </div>
      </div>
       </div>

      <!-- Program 11 -->
       <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
      <div class="flex items-start space-x-4">
        <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">11</div>
        <div>
          <h3 class="font-semibold text-indigo-800">Studi Independen</h3>
          <p class="text-sm text-gray-600">Belajar secara mandiri di industri digital melalui program sertifikasi keahlian dan proyek nyata.</p>
        </div>
      </div>
       </div>

      <!-- Program 12 -->
       <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
      <div class="flex items-start space-x-4">
        <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">12</div>
        <div>
          <h3 class="font-semibold text-indigo-800">Kampus Merdeka</h3>
          <p class="text-sm text-gray-600">Program pendidikan tinggi yang memberikan kebebasan bagi mahasiswa belajar di luar prodi.</p>
        </div>
      </div>
       </div>

      <!-- Program 13 -->
       <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
      <div class="flex items-start space-x-4">
        <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">13</div>
        <div>
          <h3 class="font-semibold text-indigo-800">Magang Bersertifikat</h3>
          <p class="text-sm text-gray-600">Peserta magang mendapat pelatihan dan sertifikat resmi dari perusahaan.</p>
        </div>
      </div>
       </div>

      <!-- Program 14 -->
       <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
      <div class="flex items-start space-x-4">
        <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">14</div>
        <div>
          <h3 class="font-semibold text-indigo-800">Inkubator Bisnis</h3>
          <p class="text-sm text-gray-600">Program pengembangan usaha mahasiswa yang dibimbing langsung oleh mentor bisnis.</p>
        </div>
      </div>
       </div>

      <!-- Program 15 -->
       <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
      <div class="flex items-start space-x-4">
        <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">15</div>
        <div>
          <h3 class="font-semibold text-indigo-800">Program Matching Fund</h3>
          <p class="text-sm text-gray-600">Kolaborasi pendanaan antara perguruan tinggi dengan mitra industri untuk riset dan inovasi.</p>
        </div>
      </div>
       </div>

      <!-- Program 16 -->
       <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
      <div class="flex items-start space-x-4">
        <div class="text-3xl font-bold text-white bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center">16</div>
        <div>
          <h3 class="font-semibold text-indigo-800">Pengabdian Masyarakat</h3>
          <p class="text-sm text-gray-600">Kolaborasi mahasiswa dan industri dalam memberikan solusi pada masalah di masyarakat.</p>
        </div>
      </div>
       </div>

    </div>
  </div>
</section>
@endsection

