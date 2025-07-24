<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// Frontend Controllers
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProgresController as FrontProgresController;

// Manual Admin Controllers (yang kamu buat)
use App\Http\Controllers\Admins\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admins\ProgresController as AdminProgresController;

// Filament Admin Controllers (biarkan prefix /admin untuk filament)
use App\Http\Controllers\Admins\LaporanController;
use App\Http\Controllers\Admins\JadwalController;
use App\Http\Controllers\Admins\DataController;
use App\Http\Controllers\Admin\GoogleLoginController;

use App\Models\Laporan;

//
// =========================
// Login Manual (Form & Proses)
// =========================
//
Route::get('/login', fn() => view('login'))->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('admins'); // diarahkan ke route manual (bukan Filament!)
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ])->onlyInput('email');
})->name('login.process');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

//
// =======================
// Halaman Umum (Frontend)
// =======================
//

Route::get('/', fn() => view('welcome'));
Route::get('/tentang-kami', fn() => view('tentang-kami'))->name('tentang-kami');
Route::get('/kontak', fn() => view('kontak'))->name('kontak');

// Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

//
// =======================
// Frontend: Laporan & Progres
// =======================
//

Route::get('/laporan-siswa', function () {
    $laporans = Laporan::latest()->get();
    return view('frontend.laporan', compact('laporans'));
})->name('laporan.front');

Route::get('/progres-siswa', [FrontProgresController::class, 'index'])->name('progres.front');

//
// =======================
// Google Login
// =======================
//

Route::get('/auth/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);

//
// =======================
// Program Pages
// =======================
//

Route::prefix('program')->name('program.')->controller(ProgramController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/teaching-factory', 'teachingFactory')->name('teaching-factory');
    Route::get('/magang-bersertifikat', 'magangBersertifikat')->name('magang-bersertifikat');
    Route::get('/career-development', 'careerDevelopment')->name('career-development');
    Route::get('/training', 'training')->name('training');
});

//
// =======================
// Admin Manual Routes (Login Manual Kamu)
// =======================
//

Route::middleware(['auth'])->prefix('admins')->name('admins.')->group(function () {
    Route::redirect('/', '/admins/dashboard');
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/progres', [AdminProgresController::class, 'index'])->name('progres');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');
    Route::get('/data', [DataController::class, 'index'])->name('data');
});
