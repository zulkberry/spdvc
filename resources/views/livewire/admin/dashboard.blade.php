{{-- resources/views/admin/dashboard.blade.php --}}
@extends('layouts.admin') {{-- Sesuaikan jika layout kamu memang bernama layouts/admin.blade.php --}}

@section('content')
<div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-100 p-4">
        <img src="{{ asset('images/logo SPDVC.webp') }}" alt="Logo SPDVC" class="h-10 mb-6" />
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <h1 class="text-2xl font-bold mb-4">
            <span class="text-orange-500 text-3xl font-bold mr-2">‖</span>
            Laporan Siswa / Mahasiswa Magang
        </h1>
    </main>
</div>
@endsection
