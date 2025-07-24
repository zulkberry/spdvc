<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - SPD Vocational Centre</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-[#2d2f33] text-white font-sans min-h-screen">

    
    <header class="bg-[#121212] text-white w-full">
        <div class="flex items-center justify-between px-6 py-3">
            
            <img src="<?php echo e(asset('images/Logo SPDVC.webp')); ?>" alt="SPDVC Logo" class="h-8 md:h-10">

            
            <nav class="flex space-x-4 text-sm md:text-base font-medium">
                <a href="/" class="hover:text-orange-500">BERANDA</a>
                <a href="/tentang-kami" class="hover:text-orange-500">TENTANG KAMI</a>
                <a href="/program" class="hover:text-orange-500">PROGRAM</a>
                <a href="/berita" class="hover:text-orange-500">BERITA</a>
                <a href="/kontak" class="hover:text-orange-500">KONTAK</a>
                <a href="/login" class="text-orange-500 border-b-2 border-orange-500">LOGIN</a>
            </nav>
        </div>
    </header>

    
    <main class="flex items-center justify-center flex-1 py-12 px-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

</body>
</html>
<?php /**PATH C:\laragon\www\web-spd\spdvsc\resources\views/layouts/auth.blade.php ENDPATH**/ ?>