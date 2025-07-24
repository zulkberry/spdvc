@extends('layouts.admin')

@section('title', 'Data Hasil Tes Karir')

@section('content')
<div class="p-10">
    <h1 class="text-2xl font-bold text-gray-900 flex items-center mb-4">
        <img src="{{ asset('images/Shape 2.webp') }}" class="h-10 mr-4" alt="Icon Data">
        Data Hasil Tes Karir
    </h1>

    {{-- Konten tambahan bisa ditambahkan di sini --}}
    <div class="bg-white p-6 rounded-lg shadow-md text-gray-700 text-xl">
        <p>Data belum tersedia saat ini. Silakan unggah data tes karir siswa jika sudah tersedia.</p>
    </div>
</div>
@endsection
