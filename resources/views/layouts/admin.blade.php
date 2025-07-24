<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin - SPDVC')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">

    {{-- TOPBAR --}}
    <header class="bg-black text-white px-6 py-4 flex items-center justify-between">
        <img src="{{ asset('images/Logo SPDVC.webp') }}" alt="SPDVC" class="h-8">
        <nav class="space-x-6 text-sm uppercase font-semibold">
            <a href="/" class="hover:text-orange-500">Beranda</a>
            <a href="/tentang-kami" class="hover:text-orange-500">Tentang Kami</a>
            <a href="/program" class="hover:text-orange-500">Program</a>
            <a href="/berita" class="hover:text-orange-500">Berita</a>
            <a href="/kontak" class="hover:text-orange-500">Kontak</a>
            <a href="/login" class="hover:text-orange-500">👤</a>
        </nav>
    </header>

    {{-- CONTAINER UTAMA --}}
    <div class="flex min-h-screen">
       {{-- Sidebar --}}
        <aside class="w-64 bg-[#f3f3f3] p-6">
            <ul class="space-y-6 font-bold text-gray-800 text-xl"> <!-- Ubah text-sm jadi text-adminpan -->

                <li>
                    <a href="{{ route('admins.laporan') }}"
                    class="flex items-center gap-3 {{ request()->routeIs('admins.laporan') ? 'text-orange-500' : 'hover:text-orange-500' }}">
                        <img src="{{ asset('images/Icon 12.webp') }}" alt="SPDVC" class="h-5">
                        LAPORAN
                    </a>
                </li>

                <li>
                    <a href="{{ route('admins.progres') }}"
                    class="flex items-center gap-3 {{ request()->routeIs('admins.progres') ? 'text-orange-500' : 'hover:text-orange-500' }}">
                    <img src="{{ asset('images/Icon 13.webp') }}" alt="SPDVC" class="h-5">
                        PROGRES
                    </a>
                </li>

                <li>
                    <a href="{{ route('admins.jadwal') }}"
                    class="flex items-center gap-3 {{ request()->routeIs('admins.jadwal') ? 'text-orange-500' : 'hover:text-orange-500' }}">
                    <img src="{{ asset('images/Icon 14.webp') }}" alt="SPDVC" class="h-5">
                        JADWAL
                    </a>
                </li>

                <li>
                    <a href="{{ route('admins.data') }}"
                    class="flex items-center gap-3 {{ request()->routeIs('admins.data') ? 'text-orange-500' : 'hover:text-orange-500' }}">
                    <img src="{{ asset('images/Icon 15.webp') }}" alt="SPDVC" class="h-5">
                        DATA
                    </a>
                </li>

            </ul>
        </aside>

        {{-- Main Content --}}
        <div class="flex-1 p-8">
            @yield('content')
        </div>
    </div>
</body>
</html>
