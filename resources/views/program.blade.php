@extends('layouts.app')

@section('content')
<section class="max-w-6xl mx-auto px-4 py-12">
    <div class="text-left mb-8">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/Shape 2.webp') }}" class="h-10" alt="icon" />
            <h2 class="text-2xl md:text-3xl font-bold italic">
                Program Kerja Sama <span class="font-semibold">SPD Vocational Centre</span> <span class="font-light italic">(SPDVC)</span>
            </h2>
        </div>
        <p class="mt-4 text-lg leading-relaxed text-gray-800">
            SPD Vocational Centre menawarkan empat pilar program utama yang dirancang untuk
            memperkuat sinergi antara SMK/Universitas Vokasi dan dunia industri. Program ini membantu
            siswa/mahasiswa mengembangkan kompetensi nyata, kesiapan kerja, dan daya saing di era
            industri modern.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- Card 1 -->
        <a href="{{ route('program.teaching-factory') }}" class="block bg-white shadow-xl rounded-xl p-6 text-center hover:shadow-orange-200 transition hover:scale-105 duration-200">
            <img src="{{ asset('images/Icon 1.webp') }}" alt="Teaching Factory" class="h-14 mx-auto">
            <h3 class="font-bold text-md mt-3">Teaching Factory</h3>
            <p class="text-sm text-gray-600">Pembelajaran Berbasis Industri</p>
        </a>

        <!-- Card 2 -->
        <a href="{{ route('program.magang-bersertifikat') }}" class="block bg-white shadow-xl rounded-xl p-6 text-center hover:shadow-orange-200 transition hover:scale-105 duration-200">
            <img src="{{ asset('images/Icon 2.webp') }}" alt="Magang Bersertifikat" class="h-14 mx-auto">
            <h3 class="font-bold text-md mt-3">Magang Bersertifikat</h3>
            <p class="text-sm text-gray-600">Pengalaman Nyata Dunia Kerja</p>
        </a>

        <!-- Card 3 -->
        <a href="{{ route('program.career-development') }}" class="block bg-white shadow-xl rounded-xl p-6 text-center hover:shadow-orange-200 transition hover:scale-105 duration-200">
            <img src="{{ asset('images/Icon 3.webp') }}" alt="Career Development" class="h-14 mx-auto">
            <h3 class="font-bold text-md mt-3">Career<br />Development</h3>
            <p class="text-sm text-gray-600">Tes Psikologi & Penyaluran Kerja</p>
        </a>

        <!-- Card 4 -->
        <a href="{{ route('program.training') }}" class="block bg-white shadow-xl rounded-xl p-6 text-center hover:shadow-orange-200 transition hover:scale-105 duration-200">
            <img src="{{ asset('images/Icon 4.webp') }}" alt="Training" class="h-14 mx-auto">
            <h3 class="font-bold text-md mt-3">Training<br />dan Sertifikasi</h3>
            <p class="text-sm text-gray-600">Pelatihan Skill & Sertifikasi</p>
        </a>
    </div>
</section>
@endsection
