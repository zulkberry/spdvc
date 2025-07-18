@extends('layouts.app')

@section('content')
<section class="max-w-6xl mx-auto bg-white rounded-xl shadow px-6 py-8 mt-6 mb-10">
    <h2 class="text-2xl font-bold italic text-black mb-6 flex items-center">
        <img src="{{ asset('images/Shape 2.webp') }}" class="h-8 mr-2" alt="">
        Hubungi Kami :
    </h2>

    <div class="grid md:grid-cols-2 gap-8">
        <!-- Kontak Kiri -->
        <div class="space-y-4">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/Icon 6.webp') }}" class="h-6" alt="WA">
                <span class="text-lg font-semibold">0812-XXXX-XXXX</span>
            </div>

            <div class="flex items-start space-x-3">
                <img src="{{ asset('images/Icon 7.webp') }}" class="h-6 mt-1" alt="Maps">
                <div>
                    <p class="text-lg font-bold text-[var(--spd-orange)]">SPDVC</p>
                    <p class="text-sm italic text-gray-700">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                    </p>
                </div>
            </div>

            <!-- Google Maps -->
            <div class="mt-4">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5733097349754!2d110.3847252153684!3d-7.8332476797112125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a578bb7c2b64d%3A0x8f154c57bc4e8e1a!2sYogyakarta!5e0!3m2!1sen!2sid!4v1612356850290!5m2!1sen!2sid" 
                    width="100%" height="300" class="rounded-md" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>

        <!-- Form Kontak -->
        <form action="#" method="POST" class="space-y-4">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-semibold">Nama</label>
                    <input type="text" name="nama" placeholder="Masukkan nama Anda.." class="w-full border rounded px-4 py-2">
                </div>
                <div>
                    <label class="block text-sm font-semibold">No. Whatsapp</label>
                    <input type="text" name="wa" placeholder="Masukkan nomor whatsapp Anda.." class="w-full border rounded px-4 py-2">
                </div>
            </div>
            <div>
                <label class="block text-sm font-semibold">Email</label>
                <input type="email" name="email" placeholder="Masukkan email Anda.." class="w-full border rounded px-4 py-2">
            </div>
            <div>
                <label class="block text-sm font-semibold">Subject</label>
                <input type="text" name="subject" placeholder="Masukkan subject.." class="w-full border rounded px-4 py-2">
            </div>
            <div>
                <label class="block text-sm font-semibold">Pesan</label>
                <textarea name="pesan" rows="4" placeholder="Masukkan pesan Anda.." class="w-full border rounded px-4 py-2"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded font-semibold flex items-left">
                    KIRIM PESAN
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
