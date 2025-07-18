@extends('layouts.admin')

@section('title', 'Progres Teaching Factory')

@section('content')
<div class="p-10">
    <!-- Judul Halaman -->
   <a href="{{ route('admin.progres') }}" class="flex items-center px-8 py-4 text-black hover:bg-orange-100 font-bold text-xl">
    <img src="{{ asset('images/Shape 2.webp') }}" class="h-10 mr-4 pointer-events-none" alt="Icon Progres" />
    PROGRES
</a>

    <!-- Timeline Progress -->
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-5xl">
        <div class="flex items-center justify-between text-sm font-semibold text-gray-500">
            
            <!-- Step 1 -->
            <div class="text-center flex-1 relative">
                <div class="rounded-full bg-orange-500 text-white w-6 h-6 flex items-center justify-center mx-auto z-10 relative">
                    ✔
                </div>
                <p class="mt-2 text-gray-800">Progres 1</p>
            </div>

            <div class="flex-1 h-1 bg-orange-500"></div>

            <!-- Step 2 -->
            <div class="text-center flex-1 relative">
                <div class="rounded-full border-2 border-orange-500 text-orange-500 bg-white w-6 h-6 flex items-center justify-center mx-auto z-10 relative">
                    2
                </div>
                <p class="mt-2 text-gray-800">Progres 2</p>
            </div>

            <div class="flex-1 h-1 bg-gray-300"></div>

            <!-- Step 3 -->
            <div class="text-center flex-1 relative">
                <div class="rounded-full bg-gray-300 text-white w-6 h-6 flex items-center justify-center mx-auto z-10 relative">
                    3
                </div>
                <p class="mt-2 text-gray-800">Progres 3</p>
            </div>

            <div class="flex-1 h-1 bg-gray-300"></div>

            <!-- Step 4 -->
            <div class="text-center flex-1 relative">
                <div class="rounded-full bg-gray-300 text-white w-6 h-6 flex items-center justify-center mx-auto z-10 relative">
                    4
                </div>
                <p class="mt-2 text-gray-800">Progres 4</p>
            </div>
        </div>
    </div>
</div>
@endsection
