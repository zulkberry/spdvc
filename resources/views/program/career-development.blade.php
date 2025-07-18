@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-6 text-justify text-[15px] leading-relaxed">
    <a href="{{ route('program.index') }}">← Kembali</a>  

    <!-- Judul Utama -->
    <div class="mb-8 flex justify-center">
        <div class="relative inline-block">
            <img src="{{ asset('images/Shape 4.webp') }}" alt="Background" class="h-[64px] md:h-[80px]">
            <span class="absolute inset-0 flex items-center justify-center text-white font-extrabold italic uppercase text-2xl md:text-4xl">
                Career Development
            </span>
        </div>
    </div>

    <div class="space-y-8">
        <!-- Membantu Siswa Menemukan dan Meraih Karir Ideal -->
        <div>
            <div class="flex items-center space-x-2 mb-2">
                <img src="{{ asset('images/Shape 2.webp') }}" class="h-5" alt="icon">
                <h4 class="font-bold italic text-black">Membantu Siswa Menemukan dan Meraih Karir Ideal</h4>
            </div>
            <ul class="list-disc pl-5 space-y-1">
                <li>
                    Program pengembangan karier membantu siswa memahami potensi dirinya, menentukan
                    arah karier, dan mendapatkan akses ke peluang kerja.
                </li>
            </ul>
        </div>

        <!-- Tes Psikologi Karier -->
        <div>
            <div class="flex items-center space-x-2 mb-2">
                <img src="{{ asset('images/Shape 2.webp') }}" class="h-5" alt="icon">
                <h4 class="font-bold italic text-black">Tes Psikologi Karier</h4>
            </div>
            <ul class="list-disc pl-5 space-y-1">
                <li><span class="font-semibold">Tes Minat & Bakat:</span> Menilai kecenderungan karier ideal siswa.</li>
                <li><span class="font-semibold">Tes Kesiapan Kerja:</span> Mengukur aspek seperti ketekunan, kepercayaan diri, kemampuan adaptasi.</li>
                <li><span class="font-semibold">Skema:</span> Bisa dilakukan secara online (CBT) maupun offline.</li>
                <li><span class="font-semibold">Laporan & Rekomendasi:</span> Setiap siswa menerima laporan hasil tes dan rekomendasi jalur karir.</li>
            </ul>
        </div>

        <!-- Penyaluran Tenaga Kerja -->
        <div>
            <div class="flex items-center space-x-2 mb-2">
                <img src="{{ asset('images/Shape 2.webp') }}" class="h-5" alt="icon">
                <h4 class="font-bold italic text-black">Penyaluran Tenaga Kerja</h4>
            </div>
            <ul class="list-disc pl-5 space-y-1">
                <li><span class="font-semibold">Info Lowongan:</span> Khusus Alumni SMK/Universitas Mitra.</li>
                <li><span class="font-semibold">Kerja Sama Rekrutmen:</span> Dengan Mitra Industri terpercaya.</li>
                <li><span class="font-semibold">Job Matching:</span> Berdasarkan Tes & Skill siswa.</li>
            </ul>
        </div>
    </div>

    <!-- Tombol -->
    <div class="flex justify-center mt-10">
        <button class="bg-orange-500 text-white px-6 py-3 rounded font-semibold hover:bg-orange-600 transition">
            Coba Tes Psikologi Gratis
        </button>
    </div>
</div>
@endsection
