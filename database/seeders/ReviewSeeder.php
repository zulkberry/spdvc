<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        Review::create([
            'name' => 'Kepala Sekolah xxx',
            'position' => 'Kepala Sekolah',
            'quote' => '“Sejak bekerja sama dengan SPD Vocational Centre, siswa kami tidak hanya belajar praktik, tapi juga membangun mental kerja yang kuat.”',
            'rating' => 5,
            'avatar' => 'avatar1.png', // sesuaikan nama file di public/img/
        ]);

        Review::create([
            'name' => 'Kapordi Universitas xxx',
            'position' => 'Kapordi Universitas',
            'quote' => '“Kami sangat terbantu dengan lulusan magang dari SPD Vocational Centre. Mereka disiplin, cepat belajar, dan beberapa langsung kami rekrut setelah lulus.”',
            'rating' => 5,
            'avatar' => 'avatar2.png',
        ]);

        Review::create([
            'name' => 'Guru SMK xxx',
            'position' => 'Guru SMK',
            'quote' => '“Program projek akhir dari SPD membuat siswa punya karya nyata. Ini penting untuk portofolio mereka saat lulus nanti.”',
            'rating' => 5,
            'avatar' => 'avatar3.png',
        ]);
    }
}
