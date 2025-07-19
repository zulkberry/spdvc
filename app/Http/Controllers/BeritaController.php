<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get(); // Ambil semua berita terbaru
        return view('berita', compact('beritas'));
    }
}


