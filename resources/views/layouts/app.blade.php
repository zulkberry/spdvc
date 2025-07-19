<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'SPD Vocational Centre')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-[#111827] font-sans flex flex-col min-h-screen">

    {{-- ======= HEADER ======= --}}
    <header class="bg-[#121212] text-white">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3">
            <!-- Logo kiri -->
            <img src="{{ asset('images/Logo SPDVC.webp') }}" alt="SPDVC" class="h-8 md:h-10">

            <!-- Menu kanan -->
            <nav class="flex space-x-6 text-sm md:text-base font-medium">
                <a href="/" class="hover:text-[var(--spd-orange)]">BERANDA</a>
                <a href="/tentang-kami" class="hover:text-[var(--spd-orange)]">TENTANG KAMI</a>
                <a href="/program" class="hover:text-[var(--spd-orange)]">PROGRAM</a>
                <a href="/berita" class="hover:text-[var(--spd-orange)]">BERITA</a>
                <a href="/kontak" class="hover:text-[var(--spd-orange)]">KONTAK</a>
                <a href="/login" class="hover:text-[var(--spd-orange)]">LOGIN</a>
            </nav>
        </div>
    </header>

    {{-- ======= CONTENT ======= --}}
    <main class="flex-grow px-4 py-8">
        @yield('content')
    </main>

    {{-- ======= FOOTER ======= --}}
    <footer class="bg-[#121212] text-white text-center py-4">
        <p>&copy; 2025 SPD Vocational Centre. All rights reserved.</p>
    </footer>

</body>
</html>
