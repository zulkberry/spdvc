@extends('layouts.app')

@section('content')
    {{-- Konten Tentang Kami --}}
    <section class="max-w-4xl mx-auto text-center space-y-8">
        <div>
            <div class="relative inline-block">
                <img src="{{ asset('images/Shape 1.webp') }}" class="h-[32px] md:h-[40px]" alt="Visi">
                <span class="absolute inset-0 flex items-center justify-center text-white font-extrabold italic uppercase text-xl md:text-3xl">Visi</span>
            </div>
            <h2 class="text-2xl md:text-4xl font-montserrat font-extrabold italic mt-2">SPD Vocational Centre</h2>
            <p class="mt-4 text-lg leading-relaxed">
                Menjadi pusat pengembangan vokasi unggulan yang menghubungkan dunia pendidikan dengan dunia industri melalui pembelajaran berbasis praktik, pelatihan keahlian, dan pengembangan karir yang berkelanjutan.
            </p>
        </div>

        <div>
            <div class="relative inline-block">
                <img src="{{ asset('images/Shape 1.webp') }}" class="h-[32px] md:h-[40px]" alt="Misi">
                <span class="absolute inset-0 flex items-center justify-center text-white font-extrabold italic uppercase text-xl md:text-3xl">Misi</span>
            </div>
            <h2 class="text-2xl md:text-4xl font-extrabold italic mt-2">SPD Vocational Centre</h2>
            <ol class="mt-4 text-left space-y-2 text-lg list-decimal list-inside">
                <li><strong>Menyelenggarakan program teaching factory</strong> yang relevan dengan kebutuhan industri modern.</li>
                <li><strong>Membuka akses magang berkualitas</strong> bagi siswa/mahasiswa vokasi dengan sistem yang terstruktur dan terukur.</li>
                <li><strong>Menyediakan layanan asesmen dan pengembangan karir</strong> melalui tes psikologi dan penyaluran kerja.</li>
                <li><strong>Mengembangkan pusat pelatihan dan sertifikasi</strong> yang meningkatkan daya saing lulusan vokasi.</li>
                <li><strong>Membangun kemitraan strategis</strong> dengan sekolah, industri, dan lembaga sertifikasi untuk memperkuat ekosistem vokasi di Indonesia.</li>
            </ol>
        </div>
    </section>

    <section class="max-w-4xl mx-auto text-left mt-16 space-y-8">
        <div class="text-center">
            <div class="relative inline-block">
                <img src="{{ asset('images/Shape 1.webp') }}" class="h-[32px] md:h-[40px]" alt="Sejarah">
                <span class="absolute inset-0 flex items-center justify-center text-white font-extrabold italic uppercase text-xl md:text-3xl">Sejarah</span>
            </div>
            <h2 class="text-2xl md:text-4xl font-extrabold italic mt-2">& Latar Belakang</h2>
        </div>

        <p class="text-lg leading-relaxed text-justify">
            <strong>SPD Vocational Centre</strong> lahir dari kebutuhan untuk menjembatani kesenjangan antara kurikulum vokasi dengan tuntutan dunia kerja yang dinamis dan kompetitif. Berawal dari kolaborasi SPD Speedometer dengan beberapa SMK dan Universitas sejak tahun 2017, kami menyadari bahwa:
        </p>

        <ol class="text-lg space-y-2 list-decimal list-inside">
            <li>Banyak siswa SMK/ mahasiswa vokasi yang <strong>belum siap kerja</strong> meskipun memiliki dasar teori kuat.</li>
            <li>Industri membutuhkan <strong>lulusan vokasi yang siap pakai</strong>, tangguh, dan adaptif.</li>
            <li>Sekolah membutuhkan mitra industri untuk <strong>teaching factory, magang, dan pelatihan kompetensi</strong>.</li>
        </ol>

        <p class="text-lg leading-relaxed text-justify">
            Sejak itulah, SPD Vocational Centre dikembangkan sebagai wadah formal untuk:
        </p>

        <ol class="text-lg space-y-2 list-decimal list-inside">
            <li>Menyusun kurikulum kolaboratif</li>
            <li>Memberi ruang praktik nyata bagi siswa dan mahasiswa</li>
            <li>Menyediakan pelatihan dan tes karier berbasis psikologi industri organisasi</li>
            <li>Menyalurkan lulusan ke dunia kerja sesuai potensi dan minat mereka</li>
        </ol>
    </section>

@endsection
