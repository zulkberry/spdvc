 <!-- Ganti jika kamu pakai layout lain -->

<?php $__env->startSection('content'); ?>
<section class="pt-24 pb-28 bg-white text-black">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
        <!-- Judul Utama -->
        <div class="text-center mb-16">
            <div class="inline-block relative">

                    
                <h2 class="relative z-10 inline-block text-3xl md:text-4xl font-extrabold italic text-white bg-gradient-to-r from-orange-500 to-orange-400 px-6 py-1 rounded-sm shadow-md">
                    BERITA
                </h2>
                <span class="ml-2 text-3xl md:text-4xl font-extrabold italic text-black align-middle">
                    & KEGIATAN
                </span>
            </div>
        </div>

        <!-- Subjudul -->
        <div class="flex items-center gap-2 mb-8">
            <img src="<?php echo e(asset('images/Shape 2.webp')); ?>" alt="Ikon" class="w-4 h-6 object-contain">
            <h2 class="text-xl md:text-2xl font-bold italic text-black">
                Liputan Kegiatan SMK/Universitas Mitra
            </h2>
        </div>

        <!-- Grid Berita -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php for($i = 0; $i < 3; $i++): ?>
            <div class="bg-white rounded-xl shadow-xl overflow-hidden hover:shadow-2xl transition duration-300">
                <!-- Gambar Placeholder -->
                <div class="h-40 bg-gray-200"></div>

                <!-- Konten Card -->
                <div class="p-4">
                    <p class="text-sm text-[#f97300] font-medium mb-1">01/01/2025</p>
                    <h3 class="text-base font-extrabold text-black mb-1">Judul Berita & Kegiatan</h3>
                    <p class="text-sm text-gray-700 mb-3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy...
                    </p>
                    <a href="#" class="text-sm text-orange-500 font-semibold hover:underline flex items-center gap-1">
                        Baca selengkapnya <span class="text-base">››</span>
                    </a>
                </div>
            </div>
            
            <?php endfor; ?>
        </div>
    </div>
    <!-- Showcase Hasil Projek Magang -->
<section class="pt-10 pb-20 bg-white text-black">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
        <!-- Judul -->
        <div class="flex items-center gap-2 mb-8">
            <img src="<?php echo e(asset('images/Shape 2.webp')); ?>" alt="Ikon" class="w-4 h-6 object-contain">
            <h2 class="text-xl md:text-2xl font-bold italic text-black">
                Showcase Hasil Projek Magang
            </h2>
        </div>

        <!-- Grid Card -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php for($i = 0; $i < 3; $i++): ?>
            <div class="bg-white rounded-xl shadow-xl overflow-hidden hover:shadow-2xl transition duration-300">
                <div class="h-40 bg-gray-200"></div>
                <div class="p-4">
                    <p class="text-sm text-[#f97300] font-medium mb-1">01/01/2025</p>
                    <h3 class="text-base font-extrabold text-black mb-1">Judul Berita & Kegiatan</h3>
                    <p class="text-sm text-gray-700 mb-3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy...
                    </p>
                    <a href="#" class="text-sm text-orange-500 font-semibold hover:underline flex items-center gap-1">
                        Baca selengkapnya <span class="text-base">››</span>
                    </a>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- Info Event & Seminar Vokasi -->
<section class="pt-10 pb-24 bg-white text-black">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
        <!-- Judul -->
        <div class="flex items-center gap-2 mb-8">
            <img src="<?php echo e(asset('images/Shape 2.webp')); ?>" alt="Ikon" class="w-4 h-6 object-contain">
            <h2 class="text-xl md:text-2xl font-bold italic text-black">
                Info Event & Seminar Vokasi
            </h2>
        </div>

        <!-- Grid Card -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php for($i = 0; $i < 3; $i++): ?>
            <div class="bg-white rounded-xl shadow-xl overflow-hidden hover:shadow-2xl transition duration-300">
                <div class="h-40 bg-gray-200"></div>
                <div class="p-4">
                    <p class="text-sm text-[#f97300] font-medium mb-1">01/01/2025</p>
                    <h3 class="text-base font-extrabold text-black mb-1">Judul Berita & Kegiatan</h3>
                    <p class="text-sm text-gray-700 mb-3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy...
                    </p>
                    <a href="#" class="text-sm text-orange-500 font-semibold hover:underline flex items-center gap-1">
                        Baca selengkapnya <span class="text-base">››</span>
                    </a>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-spd\spdvsc\resources\views/berita.blade.php ENDPATH**/ ?>