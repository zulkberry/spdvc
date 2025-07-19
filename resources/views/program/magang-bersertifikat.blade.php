@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-6 text-justify text-start text-[15px] leading-relaxed">
   <a href="{{ route('program.index') }}">← Kembali</a>

    <!-- Judul & Subjudul -->
    <div class="text-center mb-6">
        <div class="inline-block relative">
            <img src="{{ asset('images/Shape 4.webp') }}" alt="Program Magang Background" class="h-[64px] md:h-[80px]">
            <span class="absolute inset-0 flex items-center justify-center text-white font-extrabold italic uppercase text-2xl md:text-4xl">
                Program Magang
            </span>
        </div>
        <p class="mt-3 text-2xl font-extrabold italic">Bersertifikat</p>
    </div>

    <!-- Bagian Konten -->
    <div class="space-y-6">
        <div>
            <div class="flex items-center space-x-2 mb-1">
                <img src="{{ asset('images/Shape 2.webp') }}" class="h-5" alt="icon">
                <p class="font-bold italic text-black">Mempersiapkan Siswa/Mahasiswa Siap Kerja Lewat Pengalaman Nyata</p>
            </div>
            <p>SPDVC menawarkan program magang terstruktur dengan dua jalur pilihan yang dapat disesuaikan dengan tujuan pembelajaran siswa.</p>
        </div>

        <div>
            <div class="flex items-center space-x-2 mb-1">
                <img src="{{ asset('images/Shape 2.webp') }}" class="h-5" alt="icon">
                <p class="font-bold italic text-black">Jalur Reguler</p>
            </div>
            <p><strong>Tujuan:</strong> Memberikan pengalaman kerja dasar di unit-unit fungsional industri.</p>
            <ul class="list-disc pl-5">
                <li><strong>Durasi:</strong> 3 bulan, 6 bulan, dan 12 bulan</li>
                <li><strong>Divisi Tersedia:</strong> Produksi, Operasional, Marketing, Konten Kreatif, Human Resources, Finance, IT, dan R&D</li>
                <li><strong>Kegiatan:</strong> Observasi, asistensi, eksekusi tugas-tugas rutin</li>
                <li><strong>Output:</strong> Laporan magang & evaluasi kinerja</li>
            </ul>
        </div>

        <div>
            <div class="flex items-center space-x-2 mb-1">
                <img src="{{ asset('images/Shape 2.webp') }}" class="h-5" alt="icon">
                <p class="font-bold italic text-black">Jalur Projek Akhir (Capstone Internship)</p>
            </div>
            <p><strong>Tujuan:</strong> Memberi tantangan akhir berupa proyek nyata yang dapat dijadikan portofolio.</p>
            <ul class="list-disc pl-5">
                <li><strong>Penguasaan Individu atau Tim:</strong> Contoh: pembuatan alat ukur kecepatan digital, sistem tracking produksi, katalog online produk</li>
                <li><strong>Pendampingan:</strong> Mentor dari teknisi ahli + supervisor</li>
                <li><strong>Output:</strong> Prototype, presentasi hasil, dan pitching ke mitra industri</li>
            </ul>
        </div>

        <div>
            <div class="flex items-center space-x-2 mb-1">
                <img src="{{ asset('images/Shape 2.webp') }}" class="h-5" alt="icon">
                <p class="font-bold italic text-black">Contoh Hasil Proyek:</p>
            </div>
            <ul class="list-disc pl-5">
                <li>Speedometer berbasis IoT</li>
                <li>Sistem reservasi online untuk bengkel</li>
                <li>ERP untuk perusahaan manufaktur</li>
            </ul>
        </div>

        <div>
            <div class="flex items-center space-x-2 mb-1">
                <img src="{{ asset('images/Shape 2.webp') }}" class="h-5" alt="icon">
                <p class="font-bold italic text-black">Syarat & Alur Pendaftaran:</p>
            </div>
            <ul class="list-disc pl-5">
                <li>Pengajuan oleh SMK/Universitas</li>
                <li>Seleksi siswa oleh SPDVC (psikotes/tes minat)</li>
                <li>Penempatan dan kontrak pelatihan</li>
                <li>Monitoring & laporan berkala</li>
            </ul>
        </div>
    </div>

    <!-- Tombol -->
    <div class="flex justify-center mt-6">
        <button class="bg-orange-500 text-white px-6 py-3 rounded font-semibold hover:bg-orange-600 transition">
            Daftar Magang Sekarang
        </button>
    </div>
</div>
@endsection
