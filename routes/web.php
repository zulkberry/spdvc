<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ProgramController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\BeritaController;

// Admin Controllers
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProgresController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\GoogleLoginController;

// =======================
// Halaman Utama & Statis
// =======================
Route::get('/', fn() => view('welcome'));
Route::get('/tentang-kami', fn() => view('tentang-kami'));
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/kontak', fn() => view('kontak'));

// ❌ HAPUS INI! (sudah di-handle Filament)
// Route::prefix('admin')->middleware(['auth'])->group(function () {
//     Route::resource('reviews', ReviewController::class);
// });

// =======================
// Autentikasi (Login)
// =======================
Route::get('/login', fn() => view('login'))->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('admin.dashboard');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
})->name('login.process');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

// Google Login
Route::get('/auth/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);

// =======================
// Halaman Program
// =======================
Route::prefix('program')->name('program.')->controller(ProgramController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/teaching-factory', 'teachingFactory')->name('teaching-factory');
    Route::get('/magang-bersertifikat', 'magangBersertifikat')->name('magang-bersertifikat');
    Route::get('/career-development', 'careerDevelopment')->name('career-development');
    Route::get('/training', 'training')->name('training');
});

// =======================
// Halaman Admin (Butuh Login)
// =======================
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
    Route::get('/progres', [ProgresController::class, 'index'])->name('progres');
    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');
    Route::get('/data', [DataController::class, 'index'])->name('data');

    // Jangan tambahkan redirect ke /admin di sini, bisa bentrok
});
