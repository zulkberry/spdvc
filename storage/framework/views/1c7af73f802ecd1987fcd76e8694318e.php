<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SPDVC - Beranda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
   <style>
        :root {
            --spd-orange: #ff7408;
        }
    </style>
</head>
<body class="font-sans bg-white text-gray-800">

    <!-- Navbar -->
    <header class="bg-[#121212] text-white">
        <div class="max-w-9xl mx-auto flex items-center justify-between px-4 py-3">
            
            <!-- Logo kiri -->
            <img src="<?php echo e(asset('images/Logo SPDVC.webp')); ?>" alt="SPDVC" class="h-8 md:h-10">

            <!-- Menu kanan -->
            <nav class="flex space-x-6 text-sm md:text-base font-medium">
                <a href="#" class="hover:text-[var(--spd-orange)]">BERANDA</a>
                <a href="/tentang-kami" class="hover:text-[var(--spd-orange)]">TENTANG KAMI</a>
                <a href="/program" class="hover:text-[var(--spd-orange)]">PROGRAM</a>
                <a href="/berita" class="hover:text-[var(--spd-orange)]">BERITA</a>
                <a href="/kontak" class="hover:text-[var(--spd-orange)]">KONTAK</a>
                <a href="/login" class="hover:text-[var(--spd-orange)]">LOGIN</a>
            </nav>

        </div>
    </header>

    <section class="relative w-full h-auto md:h-[450px] overflow-hidden">
        <!-- Gambar orang-orang -->
        <img src="<?php echo e(asset('images/Foto 1.webp')); ?>" alt="Foto Diskusi"
            class="absolute inset-0 w-full h-auto object-right z-0" />

        <!-- Overlay PNG -->
        <img src="<?php echo e(asset('images/BG 1.webp')); ?>" alt="Overlay Orange"
            class="absolute left-0 top-0 h-full z-10 pointer-events-none" />

        <!-- Konten -->
        <div class="relative z-20 h-full flex items-center px-6 md:px-20">
            <div class="text-white max-w-md">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-poppins italic font-bold leading-snug drop-shadow mb-24">
                    “Menghubungkan<br>Pendidikan Vokasi<br>dengan Dunia Industri”
                </h1>
                <div class="mt-6 flex justify-center gap-3 max-w-full flex-nowrap">
                    <a href="#"
                        class="inline-flex items-center justify-center w-[220px] h-[48px] text-white font-poppins font-bold leading-none rounded-md shadow-md"
                        style="background-image: url('<?php echo e(asset('images/Button 1.webp')); ?>'); background-size: cover; background-position: center;">
                        <span class="-mt-[10px]">Ajukan Kerja Sama</span>
                    </a>

                    <a href="#"
                        class="inline-flex items-center justify-center w-[220px] h-[48px] text-orange-600 font-poppins font-bold px-5 py-2"
                        style="background-image: url('<?php echo e(asset('images/Button 2.webp')); ?>'); background-size: cover; background-position: center;">
                        <span class="-mt-[10px]">Jadwalkan Konsultasi</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Kerja Sama -->
    <section class="py-16 bg-gray-50">
        <div class="px-4 max-w-7xl mx-auto text-center">

        <!-- Judul Program -->
        <div class="mb-6">
            <!-- Gambar oranye dengan teks PROGRAM -->
            <div class="relative inline-block text-left">
                <img src="<?php echo e(asset('images/Shape 1.webp')); ?>" alt="PROGRAM background" class="h-[64px] md:h-[80px]">
                <span class="absolute inset-0 flex items-center justify-center text-white font-poppins italic font-extrabold uppercase text-3xl md:text-6xl">
                    PROGRAM
                </span>
            </div>

            <!-- Tulisan KERJA SAMA -->
            <h3 class="text-3xl md:text-6xl font-poppins italic font-extrabold text-[#111827] mt-2">
                KERJA SAMA
            </h3>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Teaching Factory -->
            <div class="bg-white shadow-md rounded-xl p-6 min-h-[310px] flex flex-col items-center justify-center">
                <img src="<?php echo e(asset('images/Icon 1.webp')); ?>" alt="Teaching Factory" class="h-20 mb-10">
                <h4 class="text-black text-xl font-bold">Teaching Factory</h4>
                <p class="text-base text-gray-600 mt-2">Pembelajaran Berbasis Industri</p>
            </div>

            <!-- Magang -->
            <div class="bg-white shadow-md rounded-xl p-6 min-h-[310px] flex flex-col items-center justify-center">
                <img src="<?php echo e(asset('images/Icon 2.webp')); ?>" alt="Magang Bersertifikat" class="h-20 mb-10">
                <h4 class="text-black text-xl font-bold">Magang Bersertifikat</h4>
            </div>

            <!-- Career -->
            <div class="bg-white shadow-md rounded-xl p-6 min-h-[310px] flex flex-col items-center justify-center">
                <img src="<?php echo e(asset('images/Icon 3.webp')); ?>" alt="Career Development" class="h-20 mb-10">
                <h4 class="text-black text-xl font-bold">Career Development</h4>            </div>

            <!-- Sertifikasi -->
            <div class="bg-white shadow-md rounded-xl p-6 min-h-[310px] flex flex-col items-center justify-center">
                <img src="<?php echo e(asset('images/Icon 4.webp')); ?>" alt="Training dan Sertifikasi" class="h-20 mb-10">
                <h4 class="text-black text-xl font-bold">Training dan Sertifikasi</h4>            </div>
        <!-- Judul, Gambar, Card, dll. masuk sini -->
            </div>
        </section>

    <!-- Keunggulan Bermitra Section -->
    <section class="relative py-16 px-4 w-full mx-full" style="background-image: url('<?php echo e(asset('images/Shape 3.webp')); ?>'); background-repeat: no-repeat; background-size: 100% auto; background-position: bottom left;">
        <h2 class="text-2xl md:text-4xl font-montserrat font-bold italic text-black mb-6">
            <img src="<?php echo e(asset('images/Shape 2.webp')); ?>" alt="" class="inline-block w-8 mr-2 align-middle">
            <h>Keunggulan Bermitra Dengan Kami</h>
        </h2>

        <div class="overflow-x-auto px-4 md:px-0">
    <div class="max-w-6xl mx-auto shadow-lg rounded-xl overflow-hidden bg-white bg-opacity-90 backdrop-blur-md">
 
            <table class="relative w-full text-sm text-gray-800 z-10">
                <thead>
                    <tr class="bg-gradient-to-r from-[#f97300] to-[#ff9900] text-white">
                        <th class="p-4 text-center text-xl md:text-3xl text-lg font-poppins font-bold">Keunggulan</th>
                        <th class="p-4 text-center text-xl md:text-3xl text-lg font-poppins font-bold">Penjelasan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-l border-orange-200">
                        <td class="p-4 text-base md:text-lg font-bold text-left bg-white border border-orange-200">
                            Berbasis Industri Nyata
                        </td>
                        <td class="p-4 text-base md:text-lg text-left bg-white border border-orange-200">
                            Program teaching factory dan magang langsung berbasis proses kerja aktual di industri.
                        </td>
                    </tr>
                    <tr class="border-t border-orange-200">
                        <td class="p-4 text-base md:text-lg font-bold text-left bg-orange-50 border border-orange-200">
                            Dua Jalur Magang Terstruktur
                        </td>
                        <td class="p-4 text-base md:text-lg text-left bg-orange-50 border border-orange-200">
                            Siswa dapat memilih jalur magang reguler atau projek akhir yang menghasilkan prototype nyata.
                        </td>
                    </tr>
                    <tr class="border-t border-orange-200">
                        <td class="p-4 text-base md:text-lg font-bold text-left bg-white border border-orange-200">
                            Asesmen Psikologi Karir
                        </td>
                        <td class="p-4 text-base md:text-lg text-left bg-white border border-orange-200">
                            Tersedia tes minat, bakat, dan kesiapan kerja untuk membantu arah karir siswa.
                        </td>
                    </tr>
                    <tr class="border-t border-orange-200">
                        <td class="p-4 text-base md:text-lg font-bold text-left bg-orange-50 border border-orange-200">
                            Pelatihan + Sertifikasi
                        </td>
                        <td class="p-4 text-base md:text-lg text-left bg-orange-50 border border-orange-200">
                            Kami menyediakan program pelatihan teknis dan soft skill lengkap dengan sertifikasi industri.
                        </td>
                    </tr>
                    <tr class="border-t border-orange-200">
                        <td class="p-4 text-base md:text-lg font-bold text-left bg-white border border-orange-200">
                            Pendampingan & Monitoring
                        </td>
                        <td class="p-4 text-base md:text-lg text-left bg-white border border-orange-200">
                            Setiap program disertai pelaporan, evaluasi, dan feedback ke sekolah/universitas serta siswa/mahasiswa.
                        </td>
                    </tr>
                    <tr class="border-t border-orange-200">
                        <td class="p-4 text-base md:text-lg font-bold text-left bg-orange-50 border border-orange-200">
                            Akses Penyaluran Kerja
                        </td>
                        <td class="p-4 text-base md:text-lg text-left bg-orange-50 border border-orange-200">
                            Lulusan program kami diprioritaskan untuk rekrutmen internal dan mitra industri.
                        </td>
                    </tr>
        </tbody>
    </table>
    </div>
</div>
</section>

<!-- Testimoni Section -->
<section class="bg-gray-100 py-24 px-4">
    <div class="max-w-6xl mx-auto text-start">
        <h2 class="text-2xl md:text-4xl font-montserrat font-bold italic text-black mb-6">
            <img src="<?php echo e(asset('images/Shape 2.webp')); ?>" alt="" class="inline-block w-8 mr-2 align-middle">
            <h>Testimoni dari Sekolah, Universitas, dan Industri</h>
        </h2>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center min-h-[340px]">
                <img src="https://img.icons8.com/ios-filled/50/cccccc/user.png" alt="Profile" class="w-16 h-16 rounded-full mb-4">
                <div class="text-yellow-400 mb-2">★★★★★</div>
                <p class="italic mb-4 text-sm">“Sejak bekerja sama dengan SPD Vocational Centre, siswa kami tidak hanya belajar praktik, tapi juga membangun mental kerja yang kuat.”</p>
                <p class="font-semibold text-sm text-gray-700 mt-auto">- Kepala Sekolah xxx -</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center min-h-[340px]">
                <img src="https://img.icons8.com/ios-filled/50/cccccc/user.png" alt="Profile" class="w-16 h-16 rounded-full mb-4">
                <div class="text-yellow-400 mb-2">★★★★★</div>
                <p class="italic mb-4 text-sm">“Kami sangat terbantu dengan lulusan magang dari SPD Vocational Centre. Mereka disiplin, cepat belajar, dan beberapa langsung kami rekrut setelah lulus.”</p>
                <p class="font-semibold text-sm text-gray-700 mt-auto">- Kaprodi Universitas xxx -</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center min-h-[340px]">
                <img src="https://img.icons8.com/ios-filled/50/cccccc/user.png" alt="Profile" class="w-16 h-16 rounded-full mb-4">
                <div class="text-yellow-400 mb-2">★★★★★</div>
                <p class="italic mb-4 text-sm">“Program projek akhir dari SPD membuat siswa punya karya nyata. Ini penting untuk portofolio mereka saat lulus nanti.”</p>
                <p class="font-semibold text-sm text-gray-700 mt-auto">- Guru SMK xxx -</p>
            </div>
        </div>
    </div>
</section>


    <!-- Footer -->
    <footer class="bg-[#121212] text-white text-center py-4">
        <p>@2025 SPD Vocational Centre. All rights reserved.</p>
    </footer>

</body>
</html>
<?php /**PATH C:\laragon\www\web-spd\spdvsc\resources\views/welcome.blade.php ENDPATH**/ ?>