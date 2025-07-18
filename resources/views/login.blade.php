@extends('layouts.auth')

@section('content')
<div class="min-h-screen bg-[#2d2f33] flex flex-col">

    
    {{-- FORM LOGIN DUA KOLOM --}}
    <div class="flex flex-1 items-center justify-center">
        <div class="bg-[#202124] rounded-xl shadow-xl p-0 md:p-0 w-full max-w-2xl overflow-hidden flex">

            {{-- Kolom Kiri: Logo Besar --}}
            <div class="bg-[#202124] hidden md:flex items-center justify-center w-1/2 p-6">
                <img src="{{ asset('images/logo SPDVC.webp') }}" alt="Logo" class="h-20 md:h-24">
            </div>

            {{-- Kolom Kanan: Form --}}
            <div class="w-full md:w-1/2 p-8">
                <h2 class="text-2xl font-bold mb-6 text-white text-center">Login</h2>

                <form method="POST" action="{{ route('login.process') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block mb-1 text-sm text-white">Email</label>
                        <input type="email" name="email" id="email" required
                            class="w-full px-4 py-2 rounded-md bg-[#1e1e1e] border border-gray-600 focus:outline-none focus:ring-2 focus:ring-orange-500 text-white"
                            placeholder="Ketik email Anda...">
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block mb-1 text-sm text-white">Password</label>
                        <div class="relative">
                            <input type="password" name="password" id="password" required
                                class="w-full px-4 py-2 rounded-md bg-[#1e1e1e] border border-gray-600 focus:outline-none focus:ring-2 focus:ring-orange-500 text-white"
                                placeholder="Ketik password Anda...">
                            <span onclick="togglePassword()" class="absolute right-3 top-2.5 text-gray-400 cursor-pointer">👁</span>
                        </div>
                    </div>

                    <!-- Tombol Login -->
                    <div class="flex justify-center mb-4 space-x-2">
                        <button type="submit"
                            class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-6 rounded-md shadow">
                            Login
                        </button>

                        <a href="{{ route('google.login') }}"
                            class="flex items-center justify-center bg-white text-black font-semibold py-2 px-4 rounded-md shadow hover:bg-gray-200 transition">
                            <img src="{{ asset('images/search.png') }}" alt="Google" class="w-5 h-5 mr-2">
                            Google
                        </a>
                    </div>

                    <!-- Lupa Password -->
                    <div class="text-center text-sm mt-4 text-gray-400">
                        Lupa password? <a href="#" class="text-orange-400 hover:underline">Klik di sini</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Script toggle password --}}
<script>
    function togglePassword() {
        const pwd = document.getElementById('password');
        pwd.type = pwd.type === 'password' ? 'text' : 'password';
    }
</script>
@endsection
