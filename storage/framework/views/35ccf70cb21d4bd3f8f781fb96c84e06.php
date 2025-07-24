


<?php $__env->startSection('content'); ?>
<div class="max-w-3xl mx-auto px-4 py-6 text-justify text-[15px] leading-relaxed">
    <a href="<?php echo e(route('program.index')); ?>" class="text-sm text-black hover:underline block mb-4">← Kembali</a>

    <!-- Judul -->
    <div class="text-center mb-6">
        <div class="inline-block relative">
            <img src="<?php echo e(asset('images/Shape 4.webp')); ?>" alt="Training" class="h-[64px] md:h-[80px]">
            <span class="absolute inset-0 flex items-center justify-center text-white font-extrabold italic uppercase text-2xl md:text-4xl">
                Training & Sertifikasi
            </span>
        </div>
        <p class="mt-3 text-2xl font-extrabold italic">Keahlian Vokasi</p>
    </div>

    <div class="space-y-6">
        <div>
            <div class="flex items-center space-x-2 mb-1">
                <img src="<?php echo e(asset('images/Shape 2.webp')); ?>" class="h-5" alt="icon">
                <p class="font-bold italic text-black">Meningkatkan Daya Saing Melalui Kompetensi Tersertifikasi</p>
            </div>
            <p>SPDVC menyelenggarakan pelatihan dan sertifikasi keahlian vokasi yang dirancang sesuai kebutuhan industri terkini.</p>
        </div>

        <div>
            <div class="flex items-center space-x-2 mb-1">
                <img src="<?php echo e(asset('images/Shape 2.webp')); ?>" class="h-5" alt="icon">
                <p class="font-bold italic text-black">Daftar Pelatihan:</p>
            </div>
            <ul class="list-disc pl-5">
                <li>Otomotif</li>
                <li>Elektronika</li>
                <li>Komunikasi</li>
                <li>Marketing & Branding</li>
            </ul>
        </div>

        <div>
            <div class="flex items-center space-x-2 mb-1">
                <img src="<?php echo e(asset('images/Shape 2.webp')); ?>" class="h-5" alt="icon">
                <p class="font-bold italic text-black">Sertifikasi Industri:</p>
            </div>
            <ul class="list-disc pl-5">
                <li>Sertifikasi internal SPDVC</li>
                <li>Pelatihan pra-sertifikasi BNSP</li>
            </ul>
        </div>

        <div>
            <div class="flex items-center space-x-2 mb-1">
                <img src="<?php echo e(asset('images/Shape 2.webp')); ?>" class="h-5" alt="icon">
                <p class="font-bold italic text-black">Jadwal & Skema Biaya:</p>
            </div>
            <ul class="list-disc pl-5">
                <li>Pelatihan dibuka secara reguler dan on-demand</li>
                <li>Biaya subsidi untuk mitra SMK/Universitas</li>
                <li>Disediakan sertifikat pelatihan</li>
            </ul>
        </div>
    </div>

    <div class="flex justify-center mt-6">
    <a href="<?php echo e(route('program.training')); ?>">
        <button class="bg-orange-500 text-white px-6 py-3 rounded font-semibold hover:bg-orange-600 transition">
            Ajukan Pelatihan
        </button>
    </a>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-spd\spdvsc\resources\views/program/training.blade.php ENDPATH**/ ?>