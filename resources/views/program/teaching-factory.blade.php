@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Teaching Factory</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root {
      --spd-orange: #ff7408;
    }
  </style>
</head>


  <!-- ✅ Kembali -->
  <div class="p-6 max-w-4xl mx-auto">
    <a href="/program" class="text-gray-500 font-semibold hover:underline">&larr; Kembali</a>
  </div>

  <!-- ✅ Judul & Subjudul -->
  <div class="text-center mt-6 mb-4">
    <div class="relative inline-block">
      <img src="{{ asset('images/Shape 1.webp') }}" alt="Judul Background" class="h-[40px] md:h-[44px]">
      <span class="absolute inset-0 flex items-center justify-center text-white font-bold italic text-base md:text-lg">
        Teaching Factory
      </span>
    </div>

    <h3 class="text-center font-bold italic text-black mt-2">
      Pembelajaran Berbasis Industri
    </h3>
  </div>

  <!-- ✅ Konten -->
  <div class="max-w-4xl mx-auto px-4 space-y-6">

     <!-- Bagian 1 -->
    <div>
      <h4 class="font-bold text-black mb-1 flex items-center gap-2">
        <img src="{{ asset('images/Shape 2.webp') }}" alt="Icon Kecil" class="w-5 h-5">
        Integrasi Kurikulum & Dunia Industri Nyata
      </h4>
      <p>
        Program Teaching Factory (TeFa) merupakan kolaborasi pembelajaran berbasis industri yang terintegrasi dengan kegiatan produksi nyata di lingkungan industri mitra SPDVC.
      </p>
  <!-- Bagian 2 -->
    <div>
      <h4 class="font-bold text-black mb-1 flex items-center gap-2">
        <img src="{{ asset('images/Shape 2.webp') }}" alt="Icon Kecil" class="w-5 h-5">
        Fitur Utama:
      </h4>
      <ul class="list-disc list-inside space-y-1">
        <li><strong>Sinkronisasi Kurikulum:</strong> Pembelajaran disesuaikan dengan standar industri.</li>
        <li><strong>Praktik Produksi Nyata:</strong> Siswa terlibat langsung dalam produksi dan pengendalian mutu.</li>
        <li><strong>Instruktur Gabungan:</strong> Kombinasi guru/dosen dan teknisi dari industri.</li>
        <li><strong>Target Output:</strong> Produk/jasa riil siap dijual ke konsumen.</li>
      </ul>
    </div>

    <!-- Bagian 3 -->
    <div>
      <h4 class="font-bold text-black mb-1 flex items-center gap-2">
        <img src="{{ asset('images/Shape 2.webp') }}" alt="Icon Kecil" class="w-5 h-5">
        Fasilitas & Skema:
      </h4>
      <ul class="list-disc list-inside space-y-1">
        <li>Bengkel kerja bersama</li>
        <li>Mini factory</li>
        <li>SOP kerja industri</li>
        <li>Jadwal rotasi praktik siswa</li>
        <li>Evaluasi berkala</li>
      </ul>
    </div>

    <!-- Bagian 4 -->
    <div>
      <h4 class="font-bold text-black mb-1 flex items-center gap-2">
        <img src="{{ asset('images/Shape 2.webp') }}" alt="Icon Kecil" class="w-5 h-5">
        Contoh Teaching Factory yang kami tangani:
      </h4>
      <ul class="list-disc list-inside space-y-1">
        <li>SMK N 2 Depok Sleman Yogyakarta</li>
        <li>SMK ISS Wonosari</li>
        <li>SMK Budi Utomo Jombang</li>
      </ul>
    </div>

    <div class="text-center mt-8">
      <a href="#" class="bg-[var(--spd-orange)] text-white px-6 py-3 font-semibold rounded-md shadow hover:bg-orange-600 transition">
        Ajukan Program Teaching Factory
      </a>
    </div>
  </div>
@endsection


 

